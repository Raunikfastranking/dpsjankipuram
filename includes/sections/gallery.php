<div class="container mx-auto px-4 py-8">
    <?php
    $album = $data['resolved_content'] ?? null;
    if (!empty($album) && !empty($album['id']) && is_array($album['media'] ?? null)) {
        $heading = htmlspecialchars(strip_tags($album['heading'] ?? $album['gallery_title'] ?? 'Untitled'));
        $albumId = (int) $album['id'];
        $media = $album['media'];
        $firstMedia = $media[0] ?? null;
        $previewUrl = !empty($firstMedia['media_url']) ? $firstMedia['media_url'] : 'https://via.placeholder.com/400x300?text=No+Media';
        $total = count($media);

        $dateRaw = $album['date'] ?? $album['created_at'] ?? '';
        $year = '—';
        $day = '';
        $month = '';
        if ($dateRaw) {
            $ts = strtotime($dateRaw);
            if ($ts !== false && $ts > 0) {
                $year = date('Y', $ts);
                $day = date('d', $ts);
                $month = date('M', $ts);
            }
        }

        $category = 'Gallery';
        if (!empty($album['gallery_type'])) {
            $category = htmlspecialchars(ucfirst($album['gallery_type']));
        }
        if (is_array($album['gallery_sub_type'] ?? null) && !empty($album['gallery_sub_type']['sub_type_name'])) {
            $category = htmlspecialchars(ucfirst(str_replace('_', ' ', $album['gallery_sub_type']['sub_type_name'])));
        }
        ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-4">
            <div class="gallery-item w-full mx-auto bg-white border border-gray-200 rounded-lg shadow hover:shadow-[rgba(0,0,0,0.15)_0px_15px_25px,rgba(0,0,0,0.05)_0px_5px_10px] transition-shadow duration-300">
                <a href="gallery-detail?id=<?= $albumId ?>" class="block">
                    <img class="rounded-t-lg w-full h-[200px] object-cover" src="<?= htmlspecialchars($previewUrl) ?>" alt="<?= $heading ?>">
                </a>
                <div class="sm:p-4 p-1 flex flex-col justify-between relative">
                    <a href="gallery-detail?id=<?= $albumId ?>">
                        <div class="flex gap-4">
                            <div class="w-[30%]">
                                <div class="bg-blue-main text-white text-center rounded-t-lg p-1 font-[700] text-[18px]"><?= htmlspecialchars($year) ?></div>
                                <div class="text-center font-[700] text-[24px] text-[#D9A414] rounded-b-lg border border-gray-300">
                                    <?= htmlspecialchars($day) ?><br><span class="text-[#223B71] text-[14px]"><?= htmlspecialchars($month) ?></span>
                                </div>
                            </div>
                            <div class="w-[70%]">
                                <div class="text-blue-main text-[1rem] font-[700] m-2 line-clamp-2"><?= $heading ?></div>
                                <hr>
                                <div class="flex gap-2 text-[9px] text-[#3B3B3B] m-2">
                                    <div>Category: <strong><?= $category ?></strong></div>
                                    <div>Total Photo(s): <strong><?= $total ?></strong></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="gallery-detail?id=<?= $albumId ?>">
                        <button type="button" class="group py-1 px-4 sm:px-6 rounded-[10px] w-full border border-gray text-blue-main hover:text-white hover:bg-[#003618] flex gap-2 items-center justify-center mt-5">
                            View More
                            <svg class="w-[14px] h-[10px] fill-[#223B71] group-hover:fill-white" width="8" height="9" viewBox="0 0 8 9" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.65008 0.911564C6.9831 0.911564 7.25307 1.18153 7.25307 1.51456L7.25307 6.63112C7.25307 6.96414 6.9831 7.23411 6.65008 7.23411C6.31705 7.23411 6.04708 6.96414 6.04708 6.63112L6.04708 2.97031L1.10714 7.91026C0.871652 8.14574 0.489858 8.14574 0.254375 7.91026C0.0188919 7.67477 0.018892 7.29298 0.254376 7.0575L5.19432 2.11755L1.53352 2.11755C1.20049 2.11755 0.930523 1.84758 0.930523 1.51456C0.930523 1.18153 1.20049 0.911564 1.53352 0.911564L6.65008 0.911564Z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
