<?php
include "includes/apis.php";

// Collect + sort newsletter items newest first (SAFE & ROBUST)
$all_newsletters = [];
$processed_ids = [];

if (!empty($dps_data['data']['sections'])) {
    foreach ($dps_data['data']['sections'] as $section) {
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

        // Filter for newsletter-related galleries (adjust filter if needed)
        if (
            !isset($rc['gallery_type']) || 
            strtolower($rc['gallery_type']) !== 'gallery'
        ) {
            continue;
        }

        // Safe date extraction
        $rawDate = null;
        foreach (['date', 'created_at', 'published_at', 'issue_date'] as $key) {
            $value = trim($rc[$key] ?? '');
            if (!empty($value) && !str_starts_with($value, '0000')) {
                $ts = strtotime($value);
                if ($ts !== false && $ts > 0) {
                    $rawDate = $value;
                    break;
                }
            }
        }

        $timestamp = $rawDate ? strtotime($rawDate) : 0;
        $heading   = strip_tags(trim($rc['heading'] ?? $rc['title'] ?? 'Untitled Newsletter'));
        $media     = $rc['media'] ?? [];

        if (!is_array($media) || empty($media)) continue;

        $first_media_url = $media[0]['media_url'] ?? 'https://via.placeholder.com/400x300?text=No+Media';
        $ext = strtolower(pathinfo($first_media_url, PATHINFO_EXTENSION));
        $is_pdf = ($ext === 'pdf');

        $preview = $is_pdf ? null : $first_media_url;

        $all_newsletters[] = [
            'timestamp'       => $timestamp,
            'rawDate'         => $rawDate,
            'heading'         => $heading,
            'first_media'     => $first_media_url,
            'first_media_row' => $media[0] ?? [],
            'is_pdf'          => $is_pdf,
            'media_count'     => count($media),
            'id'              => $rc['id'] ?? '',
        ];
    }

    // Sort newest first
    usort($all_newsletters, function ($a, $b) {
        return $b['timestamp'] <=> $a['timestamp'];
    });
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($dps_data['data']['title'] ?? "Newsletter") ?></title>
    <?php include "includes/head.php" ?>

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
<?php include "includes/header.php" ?>

<div class="main relative mb-[120px]">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
        <div class="w-full">
            <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 hr-line relative leading-9">
                Newsletter
            </h1>
            <h2 class="sm:text-[32px] hidden sm:block font-[700] text-white text-left ml-[7rem] hr-line relative leading-9">
                Newsletter
            </h2>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="flex m-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="index.php" class="sm:text-sm text-xs font-medium text-blue-main">Home</a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">Gallery</p>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">School Publications</p>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="newsletter.php" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Newsletter</a>
                </div>
            </li>
        </ol>
    </div>

    <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
        <div class="mt-10 relative">
            <div class="tabs sm:mt-10">
                <div class="flex items-center gap-2 sm:justify-between">
                    <ul class="flex gap-2 sm:gap-4 border-b bg-gray-50 rounded-xl">
                        <li class="flex-1"><a href="#section1" class="tab-link block text-center py-3 font-semibold text-gray-700 transition-colors hover:bg-[#005224] hover:text-[#FED72B] active">Title</a></li>
                        <li class="flex-1"><a href="#section2" class="tab-link block text-center py-3 font-semibold text-gray-700 transition-colors hover:bg-[#005224] hover:text-[#FED72B]">Category</a></li>
                        <li class="flex-1"><a href="#section3" class="tab-link block text-center py-3 font-semibold text-gray-700 transition-colors hover:bg-[#005224] hover:text-[#FED72B]">Year</a></li>
                    </ul>

                    <input type="text" id="searchInput"
                           class="bg-gray-100 w-[50%] border-b px-5 py-2 outline-none rounded-md text-xs sm:text-base"
                           placeholder="Search by title..." />
                </div>

                <section id="section1" class="tab-panel mt-5">
                    <div id="galleryGrids" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                        <?php
                        $foundAny = false;
                        if (!empty($all_newsletters)) {
                            $foundAny = true;
                            foreach ($all_newsletters as $item) {
                                $day   = $item['rawDate'] ? date("d", strtotime($item['rawDate'])) : '';
                                $month = $item['rawDate'] ? date("M", strtotime($item['rawDate'])) : '';
                                $year  = $item['rawDate'] ? date("Y", strtotime($item['rawDate'])) : '—';
                        ?>
                                <div class="gallery-item bg-white border rounded-lg shadow hover:shadow-lg transition"
                                     data-title="<?= strtolower(strip_tags($item['heading'])) ?>">

                                    <a href="gallery-detail.php?id=<?= urlencode($item['id']) ?>">
                                        <?php if ($item['is_pdf']): ?>
                                            <div class="pdf-preview-card">
                                                <svg class="w-16 h-20 text-red-600 mb-2" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 14h-3v3h-2v-3H8v-2h3v-3h2v3h3v2z"/>
                                                </svg>
                                                <div class="text-sm font-medium text-gray-700">Newsletter Edition</div>
                                                <div class="absolute top-2 right-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">PDF</div>
                                            </div>
                                        <?php else: ?>
                                            <img class="rounded-t-lg w-full h-[200px] object-cover"
                                                 src="<?= htmlspecialchars($item['first_media']) ?>"
                                                 alt="<?= htmlspecialchars(cms_image_alt(array_merge($item['first_media_row'] ?? [], ['heading' => $item['heading']]), $item['heading'])) ?>">
                                        <?php endif; ?>
                                    </a>

                                    <div class="p-3">
                                        <div class="flex gap-4">
                                            <div class="w-[30%] text-center">
                                                <div class="bg-blue-main text-white font-bold"><?= htmlspecialchars($year) ?></div>
                                                <div class="border font-bold text-[#D9A414]">
                                                    <?= htmlspecialchars($day) ?><br>
                                                    <span class="text-sm text-[#223B71]"><?= htmlspecialchars($month) ?></span>
                                                </div>
                                            </div>

                                            <div class="w-[70%]">
                                                <h3 class="font-bold text-blue-main line-clamp-2">
                                                    <?= htmlspecialchars(strip_tags($item['heading'])) ?>
                                                </h3>
                                                <p class="text-xs mt-2">
                                                    Category: <strong>Newsletter</strong><br>
                                                    Total Items: <strong><?= $item['media_count'] ?></strong>
                                                </p>
                                            </div>
                                        </div>

                                        <a href="gallery-detail.php?id=<?= urlencode($item['id']) ?>">
                                            <button class="mt-4 w-full border rounded-lg py-2 text-blue-main hover:bg-[#003618] hover:text-white transition-colors">
                                                View More
                                            </button>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        }

                        if (!$foundAny) { ?>
                            <p class="col-span-full text-center text-gray-500 py-10 text-lg">
                                No newsletter editions available at this time.
                            </p>
                        <?php } ?>
                    </div>

                    <!-- Pagination Controls -->
                    <div id="newsletterPagination" class="flex justify-center items-center gap-2 mt-8">
                        <button id="newsletterPrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                            Previous
                        </button>
                        <div id="newsletterPageNumbers" class="flex gap-1">
                            <!-- Page numbers will be populated here -->
                        </div>
                        <button id="newsletterNextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">
                            Next
                        </button>
                    </div>

                    <p id="noResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">
                        No matching newsletters found.
                    </p>
                </section>

                <section id="section2" class="tab-panel hidden mt-5" role="tabpanel" aria-hidden="true"></section>
                <section id="section3" class="tab-panel hidden mt-5" role="tabpanel" aria-hidden="true"></section>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>
<?php include "includes/foot.php" ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
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
        const prevBtn = document.getElementById('newsletterPrevBtn');
        const nextBtn = document.getElementById('newsletterNextBtn');
        const pageNumbers = document.getElementById('newsletterPageNumbers');

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
        document.getElementById('newsletterPagination').style.display = 'none';
    }

    // Pagination button event listeners
    document.getElementById('newsletterPrevBtn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    document.getElementById('newsletterNextBtn').addEventListener('click', () => {
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
                document.getElementById('newsletterPagination').style.display = 'none';
                noResults?.classList.remove('hidden');
            } else {
                document.getElementById('newsletterPagination').style.display = 'flex';
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