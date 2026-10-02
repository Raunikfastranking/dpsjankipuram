<?php
include "includes/apis.php";

// Collect + sort magazine/newsletter items newest first — safe version
$all_magazines = [];
$processed_ids = [];

if (!empty($magazine_data['data']['sections'])) {
    foreach ($magazine_data['data']['sections'] as $section) {
        if (!isset($section['section_type']) || $section['section_type'] !== 'gallery') {
            continue;
        }
        if (!isset($section['resolved_content'])) {
            continue;
        }

        $rc = $section['resolved_content'];
        $item_id = $rc['id'] ?? null;

        // Skip duplicates
        if ($item_id && in_array($item_id, $processed_ids)) {
            continue;
        }
        if ($item_id) {
            $processed_ids[] = $item_id;
        }

        // Filter: only magazine/newsletter items
        if (
            !isset($rc['gallery_type']) || strtolower($rc['gallery_type']) !== 'gallery' ||
            !isset($rc['gallery_sub_type']) || (string)$rc['gallery_sub_type'] !== '3'
        ) {
            continue;
        }

        // Safe date extraction from resolved_content
        $rawDate = null;
        foreach (['date', 'created_at'] as $key) {
            $value = $rc[$key] ?? null;
            if (!empty($value) && $value !== '0000-00-00' && $value !== '0000-00-00 00:00:00') {
                $ts = strtotime($value);
                if ($ts !== false) {
                    $rawDate = $value;
                    break;
                }
            }
        }

        $timestamp = $rawDate ? strtotime($rawDate) : 0;
        $heading   = strip_tags($rc['heading'] ?? 'Untitled Magazine');
        $media     = $rc['media'] ?? [];

        if (!is_array($media) || empty($media)) continue;

        $first_image = $media[0]['media_url'] ?? 'https://via.placeholder.com/400x300?text=No+Image';

        $all_magazines[] = [
            'timestamp'      => $timestamp,
            'rawDate'        => $rawDate,
            'heading'        => $heading,
            'first_image'    => $first_image,
            'first_media_row' => $media[0] ?? [],
            'media_count'    => count($media),
            'id'             => $rc['id'] ?? '',
        ];
    }

    // Sort newest first
    usort($all_magazines, function ($a, $b) {
        return $b['timestamp'] <=> $a['timestamp'];
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($magazine_data['data']['title'] ?? "Magazine & Newsletter") ?></title>
    <meta name="description" content="<?= htmlspecialchars($magazine_data['data']['meta_description'] ?? "") ?>">
    <meta name="keywords" content="<?= htmlspecialchars($magazine_data['data']['meta_keywords'] ?? "") ?>">
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Magazine & Newsletter
                </h1>
            </div>
            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Magazine & Newsletter
                </h2>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li>
                    <a href="index.php" class="text-xs sm:text-sm font-medium text-blue-main">Home</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-3 h-3 text-blue-main mx-1" viewBox="0 0 6 10" fill="none">
                        <path stroke="currentColor" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-xs sm:text-sm font-medium text-blue-main">Media & Events</span>
                </li>
                <li class="flex items-center">
                    <svg class="w-3 h-3 text-blue-main mx-1" viewBox="0 0 6 10" fill="none">
                        <path stroke="currentColor" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="text-xs sm:text-sm font-medium text-blue-main">Magazine & Newsletter</span>
                </li>
            </ol>
        </div>

        <!-- Tabs + Search -->
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="flex items-center gap-2 sm:justify-between">
                <ul class="flex gap-2 sm:gap-4 border-b bg-gray-50 rounded-xl">
                    <li class="flex-1">
                        <a href="#section1" aria-controls="section1"
                           class="tab-link active block text-center py-2.5 px-2 sm:text-[16px] text-[10px] font-semibold">
                            Title
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#section2" aria-controls="section2"
                           class="tab-link block text-center py-2.5 px-2 sm:text-[16px] text-[10px] font-semibold">
                            Category
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="#section3" aria-controls="section3"
                           class="tab-link block text-center py-2.5 px-2 sm:text-[16px] text-[10px] font-semibold">
                            Year
                        </a>
                    </li>
                </ul>

                <input type="text" id="searchInput"
                       class="bg-gray-100 w-[50%] border-b text-gray-900 sm:text-[16px] text-[10px] outline-none px-5 py-2 rounded-lg"
                       placeholder="Search by title..." />
            </div>

            <!-- SECTION 1: Title -->
            <section id="section1" class="tab-panel mt-5">
                <div id="galleryGrids"
                     class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <?php
                    if (!empty($all_magazines)) {
                        foreach ($all_magazines as $item) {
                            $day   = $item['rawDate'] ? date('d', strtotime($item['rawDate'])) : '';
                            $month = $item['rawDate'] ? date('M', strtotime($item['rawDate'])) : '';
                            $year  = $item['rawDate'] ? date('Y', strtotime($item['rawDate'])) : '—';
                            ?>
                            <div class="gallery-item bg-white border rounded-lg shadow hover:shadow-lg transition"
                                 data-title="<?= htmlspecialchars(strtolower($item['heading'])) ?>"
                                 data-year="<?= htmlspecialchars($year) ?>">

                                <a href="gallery-detail?id=<?= urlencode($item['id']) ?>">
                                    <img src="<?= htmlspecialchars($item['first_image']) ?>"
                                         class="rounded-t-lg w-full h-[200px] object-cover"
                                         alt="<?= htmlspecialchars(cms_image_alt(array_merge($item['first_media_row'] ?? [], ['heading' => $item['heading']]), $item['heading'])) ?>">
                                </a>

                                <div class="p-4">
                                    <div class="flex gap-4">
                                        <div class="w-[30%]">
                                            <div class="bg-blue-main text-white text-center rounded-t-lg font-bold">
                                                <?= htmlspecialchars($year) ?>
                                            </div>
                                            <div class="text-center font-bold text-xl border rounded-b-lg">
                                                <?= htmlspecialchars($day) ?><br>
                                                <span class="text-sm"><?= htmlspecialchars($month) ?></span>
                                            </div>
                                        </div>

                                        <div class="w-[70%]">
                                            <h3 class="text-blue-main font-bold line-clamp-2">
                                                <?= htmlspecialchars($item['heading']) ?>
                                            </h3>
                                            <hr class="my-2">
                                            <p class="text-xs">
                                                Category: <strong>Magazine</strong><br>
                                                Total Photo(s): <strong><?= $item['media_count'] ?></strong>
                                            </p>
                                        </div>
                                    </div>

                                    <a href="gallery-detail?id=<?= urlencode($item['id']) ?>">
                                        <button class="mt-4 w-full border rounded-lg py-2 text-blue-main hover:bg-green-900 hover:text-white">
                                            View More
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p class='col-span-full text-center text-gray-500 py-10'>No magazine or newsletter items found.</p>";
                    }
                    ?>
                </div>

                <!-- Pagination Controls -->
                <div id="magazinePagination" class="flex justify-center items-center gap-2 mt-8">
                    <button id="magazinePrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                        Previous
                    </button>
                    <div id="magazinePageNumbers" class="flex gap-1">
                        <!-- Page numbers will be populated here -->
                    </div>
                    <button id="magazineNextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                        Next
                    </button>
                </div>

                <p id="noResults" class="hidden text-center text-gray-500 mt-4">
                    No matching items found.
                </p>
            </section>

            <section id="section2" class="tab-panel hidden mt-5">
                <p class="text-center text-gray-600">Category filtering coming soon...</p>
            </section>

            <section id="section3" class="tab-panel hidden mt-5">
                <p class="text-center text-gray-600">Year filtering coming soon...</p>
            </section>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabPanels = document.querySelectorAll('.tab-panel');

        function activateTab(id) {
            tabPanels.forEach(p => p.classList.add('hidden'));
            tabLinks.forEach(l => l.classList.remove('active'));

            document.getElementById(id)?.classList.remove('hidden');
            document.querySelector(`[aria-controls="${id}"]`)?.classList.add('active');
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                activateTab(link.getAttribute('aria-controls'));
            });
        });

        activateTab('section1');

        // Pagination configuration
        const itemsPerPage = 6;
        let currentPage = 1;
        const galleryItems = Array.from(document.querySelectorAll('#galleryGrids .gallery-item'));
        const totalItems = galleryItems.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage);

        // Pagination functions
        function showPage(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            galleryItems.forEach((item, index) => {
                if (index >= startIndex && index < endIndex) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });

            updatePaginationControls(page);
        }

        function updatePaginationControls(page) {
            const prevBtn = document.getElementById('magazinePrevBtn');
            const nextBtn = document.getElementById('magazineNextBtn');
            const pageNumbers = document.getElementById('magazinePageNumbers');

            // Update prev/next buttons
            prevBtn.disabled = page === 1;
            nextBtn.disabled = page === totalPages || totalPages === 0;

            // Update page numbers
            pageNumbers.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.className = `px-3 py-2 ${i === page ? 'bg-blue-main text-white' : 'bg-gray-200 text-gray-700'} rounded hover:bg-gray-300`;
                pageBtn.textContent = i;
                pageBtn.onclick = () => showPage(i);
                pageNumbers.appendChild(pageBtn);
            }
        }

        // Initialize pagination
        if (totalItems > 0) {
            showPage(1);
        } else {
            document.getElementById('magazinePagination').style.display = 'none';
        }

        // Pagination button event listeners
        document.getElementById('magazinePrevBtn').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });

        document.getElementById('magazineNextBtn').addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const noResults = document.getElementById('noResults');

        if (searchInput) {
            searchInput.addEventListener('input', () => {
                const term = searchInput.value.toLowerCase().trim();
                let visible = 0;
                const filteredItems = [];

                galleryItems.forEach(item => {
                    const title = item.getAttribute('data-title')?.toLowerCase() || '';
                    if (title.includes(term)) {
                        item.style.display = '';
                        visible++;
                        filteredItems.push(item);
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Update pagination for filtered results
                const filteredTotal = filteredItems.length;
                const filteredPages = Math.ceil(filteredTotal / itemsPerPage);
                
                if (filteredTotal === 0) {
                    document.getElementById('magazinePagination').style.display = 'none';
                    noResults?.classList.remove('hidden');
                } else {
                    document.getElementById('magazinePagination').style.display = 'flex';
                    noResults?.classList.add('hidden');
                    
                    // Reset to page 1 and show filtered results
                    currentPage = 1;
                    
                    // Show only first page of filtered results
                    let count = 0;
                    filteredItems.forEach((item, index) => {
                        if (count < itemsPerPage) {
                            item.style.display = '';
                            count++;
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Update pagination controls for filtered results
                    updatePaginationControls(1);
                }
            });
        }
    });
    </script>

</body>
</html>