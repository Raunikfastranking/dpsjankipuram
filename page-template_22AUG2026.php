<?php


// Add error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$page = "dyanmic-page";

// Include apis.php to get global gallery data (if not already included)
if (!defined('APIS_INCLUDED')) {
    include "includes/apis.php";
    define('APIS_INCLUDED', true);
}

require_once "layouts/layout-function.php"; 

$pageSlug = $_GET['page'] ?? 'home';
$pageSlug = preg_replace('/\.php$/i', '', $pageSlug);
$pageSlug = trim($pageSlug, '/');
$pageApiUrl = "https://dps.allenhouseschools.com/api/pages/$pageSlug";

// Fetch page data
require_once __DIR__ . '/proxy/config.php';

$pageCh = curl_init($pageApiUrl);
curl_setopt_array($pageCh, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER     => api_auth_headers(),
]);
$pageResponse = curl_exec($pageCh);
$pageHttpCode = curl_getinfo($pageCh, CURLINFO_HTTP_CODE);
curl_close($pageCh);

if ($pageResponse === false || empty($pageResponse) || $pageHttpCode !== 200) {
    header("HTTP/1.0 404 Not Found");
    include "404.php";
    exit;
}

$pageData2 = json_decode($pageResponse, true);
if (!isset($pageData2['data']) || empty($pageData2['data'])) {
    header("HTTP/1.0 404 Not Found");
    include "404.php";
    exit;
}

$heading = $pageData2['data']['sections'][0]['content_heading'] ?? '';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageData2['data']['title'] ?? 'Page') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageData2['data']['meta_description'] ?? '') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageData2['data']['meta_keywords'] ?? '') ?>">
    <?php include "includes/head.php" ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <style>
        .pdf-preview-card {
            height: 200px;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            border-radius: 8px 8px 0 0;
        }
        .pdf-preview-card:hover {
            background: #e9ecef;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include "includes/header.php"; ?>

    <main class="flex flex-col min-h-screen">
        <!-- Breadcrumb -->
        <div class="brud-image bg-top flex items-center text-center h-[300px]">
            <div>
                <h2 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                  <?= htmlspecialchars($pageData2['data']['title'] ?? '') ?>
                </h2>
            </div>
            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= htmlspecialchars($pageData2['data']['title'] ?? '') ?>
                </h2>
            </div>
        </div>

        <?php
        // Render dynamic sections
        if (function_exists('renderDynamicSections')) {
            renderDynamicSections($pageData2, $api_url);
        }

        // ============================================================
        // GALLERY SUBTYPE HANDLING – SHOW ALBUM CARDS
        // ============================================================
        
        // Expanded fallback mapping with more flexible matching
        $fallbackGalleryMap = [
            'newsletter' => 'newsletter',
            'annual-magazine' => 'annual_magazine',
            'photo-gallery' => 'photo_gallery',
            'display-gallery' => 'photo_gallery',
            'print-media' => 'media_gallery',
            'media-events' => 'media_gallery',
        ];

        $gallerySubtype = null;
        $showGallery = false;

        // FIRST: Check if this page is associated with a gallery via page_id in gallery data
        // This is the most reliable method since your galleries have page_id field
        if (!empty($photo_gallery_data['data'])) {
            foreach ($photo_gallery_data['data'] as $gallery) {
                // Check if gallery's page_id matches current page's ID
                if (!empty($gallery['page_id']) && isset($pageData2['data']['id']) && 
                    $gallery['page_id'] == $pageData2['data']['id']) {
                    $showGallery = true;
                    if (!empty($gallery['gallery_sub_type']['sub_type_name'])) {
                        $gallerySubtype = $gallery['gallery_sub_type']['sub_type_name'];
                    }
                    break;
                }
            }
        }

        // SECOND: Check if page has sections with gallery type
        if (!$showGallery && !empty($pageData2['data']['sections'])) {
            foreach ($pageData2['data']['sections'] as $section) {
                if (isset($section['section_type']) && $section['section_type'] === 'gallery') {
                    $showGallery = true;
                    if (!empty($section['gallery_subtype'])) {
                        $gallerySubtype = $section['gallery_subtype'];
                    }
                    break;
                }
            }
        }

        // THIRD: Check page data directly for gallery_subtype
        if (!$showGallery && !empty($pageData2['data']['gallery_subtype'])) {
            $gallerySubtype = $pageData2['data']['gallery_subtype'];
            $showGallery = true;
        }
        
        // FOURTH: Use fallback mapping based on page slug (with flexible matching)
        if (!$showGallery) {
            // Try exact match first
            if (array_key_exists($pageSlug, $fallbackGalleryMap)) {
                $gallerySubtype = $fallbackGalleryMap[$pageSlug];
                $showGallery = true;
            } else {
                // Try partial match (e.g., "annual-magazine-1-" contains "annual-magazine")
                foreach ($fallbackGalleryMap as $key => $subtype) {
                    if (strpos($pageSlug, $key) !== false) {
                        $gallerySubtype = $subtype;
                        $showGallery = true;
                        break;
                    }
                }
            }
        }

        // Year dropdown + /api/galleries/branch/{id}/year/{year} grid (same as photo-gallery / other branches)
        if ($showGallery) {
            echo '<div class="container mx-auto px-4 py-8">';

            if (!empty($pageData2['data']['sections'][0]['content_heading'])) {
                echo '<h2 class="text-2xl font-bold mb-6">' . htmlspecialchars($pageData2['data']['sections'][0]['content_heading']) . '</h2>';
            }

            echo '<div class="tabs sm:mt-10">';
            $galleryToolbarPlaceholder = 'Search';
            include __DIR__ . '/includes/gallery-year-toolbar.php';

            echo '<section id="section1" class="tab-panel mt-5" role="tabpanel">';
            echo '<div id="pageTemplateGalleryGrids" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4"></div>';

            echo '<div id="pageTemplateGalleryPagination" class="flex justify-center items-center gap-2 mt-8">';
            echo '<button type="button" id="pageTemplateGalleryPrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Previous</button>';
            echo '<div id="pageTemplateGalleryPageNumbers" class="flex gap-1"></div>';
            echo '<button type="button" id="pageTemplateGalleryNextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Next</button>';
            echo '</div>';

            echo '<p id="pageTemplateGalleryNoResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">No matching galleries found.</p>';
            echo '</section>';
            echo '</div>';
            echo '</div>';
        }
        ?>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
    </main>

    <!-- Scripts -->
    <?php include "includes/foot.php"; ?>
    
    <script>
    (function() {
        function initWhenReady() {
            if (typeof Fancybox !== 'undefined') {
                const galleryLinks = document.querySelectorAll('[data-fancybox], .gallery-item');
                if (galleryLinks.length > 0) {
                    Fancybox.bind(galleryLinks, {});
                }
            }
            
            if (typeof Glide !== 'undefined') {
                document.querySelectorAll('.glide').forEach(function(element) {
                    if (element && element.querySelector('.glide__track')) {
                        try {
                            new Glide(element, {
                                type: 'slider',
                                perView: 3,
                                breakpoints: { 768: { perView: 1 } }
                            }).mount();
                        } catch(e) {
                            console.warn('Glide slider skipped:', e.message);
                        }
                    }
                });
            }
        }
        
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initWhenReady);
        } else {
            initWhenReady();
        }
    })();
    </script>
<?php if (!empty($showGallery)): ?>
    <?php
    $galleryGridConfig = [
        'galleryType' => 'gallery',
        'subType' => $gallerySubtype,
        'gridSelector' => '#pageTemplateGalleryGrids',
        'yearSelectSelector' => '#galleryYearSelect',
        'searchSelector' => '#searchInput',
        'prevBtnId' => 'pageTemplateGalleryPrevBtn',
        'nextBtnId' => 'pageTemplateGalleryNextBtn',
        'pageNumbersId' => 'pageTemplateGalleryPageNumbers',
        'paginationId' => 'pageTemplateGalleryPagination',
        'noResultsSelector' => '#pageTemplateGalleryNoResults',
        'emptyMessage' => 'No galleries for this year.',
        'searchEmptyMessage' => 'No matching galleries found.',
        'pdfLabel' => 'PDF Document',
        'mediaCountLabel' => 'Total Media',
    ];
    include __DIR__ . '/includes/gallery-grid-init.php';
    ?>
<?php endif; ?>
</body>
</html>