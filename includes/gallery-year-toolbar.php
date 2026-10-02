<?php
$galleryToolbarPlaceholder = $galleryToolbarPlaceholder ?? 'Search by title...';
?>
<div class="flex items-center gap-2 sm:justify-between flex-wrap w-full">
    <div class="flex items-center gap-2 shrink-0">
        <label for="galleryYearSelect" class="sr-only">Year</label>
        <select id="galleryYearSelect" name="gallery_year"
                class="bg-gray-100 border-b text-gray-900 sm:text-[16px] text-[10px] outline-none focus:ring-0 block px-4 py-2 min-w-[5.5rem]"
                style="border-radius:9px;">
            <option value="all">All</option>
        </select>
    </div>
    <input type="text" id="searchInput"
           class="bg-gray-100 w-[50%] min-w-[8rem] flex-1 border-b text-gray-900 sm:text-[16px] text-[10px] outline-none focus:ring-0 block px-5 py-2"
           style="border-radius:9px;"
           placeholder="<?= htmlspecialchars($galleryToolbarPlaceholder, ENT_QUOTES, 'UTF-8') ?>" />
</div>
