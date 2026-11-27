<?php
include "includes/apis.php";

function dps_get_youtube_embed_url(?string $videoUrl): string {
    $videoUrl = trim((string)$videoUrl);
    if ($videoUrl === '') return '';

    // 1. YouTube playlist
    if (preg_match('/[?&]list=([^&]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/videoseries?list=' . $m[1];
    }
    // 2. youtu.be/<id>
    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/' . $m[1];
    }
    // 3. youtube.com/watch?v=<id>
    if (preg_match('/[?&]v=([a-zA-Z0-9_-]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/' . $m[1];
    }
    // 4. youtube.com/shorts/<id>
    if (preg_match('/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/' . $m[1];
    }
    // 5. youtube.com/embed/<id>
    if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/' . $m[1];
    }
    // 6. youtube.com/live/<id>
    if (preg_match('/youtube\.com\/live\/([a-zA-Z0-9_-]+)/', $videoUrl, $m)) {
        return 'https://www.youtube.com/embed/' . $m[1];
    }
    // 7. Vimeo
    if (preg_match('/vimeo\.com\/(?:video\/)?([0-9]+)/', $videoUrl, $m)) {
        return 'https://player.vimeo.com/video/' . $m[1];
    }

    return $videoUrl;
}

$videos = [];
foreach (($testimonial_data['data']['sections'] ?? []) as $sec) {
    if (($sec['section_type'] ?? '') === 'video' || ($sec['layout'] ?? '') === 'video' || stripos($sec['title'] ?? '', 'video') !== false) {
        $found = $sec['resolved_content']['media'] ?? [];
        if (!empty($found)) {
            $videos = $found;
            break;
        }
    }
}
if (empty($videos)) {
    $videos = $testimonial_data['data']['sections'][2]['resolved_content']['media'] ?? [];
}

// Fallback: if cache didn't have videos, fetch fresh testimonials page from API
if (empty($videos)) {
    $endpoint = 'https://dps.allenhouseschools.com/api/pages/testimonials-page-jankipuram';
    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_HTTPHEADER => api_auth_headers(),
    ]);
    $res = curl_exec($ch);
    if ($res !== false) {
        $decoded = json_decode($res, true);
        if (!empty($decoded['data']['sections'])) {
            $testimonial_data = $decoded;
            foreach ($testimonial_data['data']['sections'] as $sec) {
                if (($sec['section_type'] ?? '') === 'video' || ($sec['layout'] ?? '') === 'video' || stripos($sec['title'] ?? '', 'video') !== false) {
                    $found = $sec['resolved_content']['media'] ?? [];
                    if (!empty($found)) {
                        $videos = $found;
                        break;
                    }
                }
            }
            if (empty($videos)) {
                $videos = $testimonial_data['data']['sections'][2]['resolved_content']['media'] ?? [];
            }
        }
    }
    curl_close($ch);
}

$image_testimonials = [];
foreach (($testimonial_data['data']['sections'] ?? []) as $sec) {
    if (($sec['section_type'] ?? '') === 'carousel' || ($sec['layout'] ?? '') === 'carousel' || stripos($sec['title'] ?? '', 'content') !== false) {
        $found = $sec['resolved_content']['items'] ?? [];
        if (!empty($found)) {
            $image_testimonials = $found;
            break;
        }
    }
}
if (empty($image_testimonials)) {
    $image_testimonials = $home_data['data']['sections'][10]['resolved_content']['items'] ?? [];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Jankipuram | Testimonials</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <style>
        ul.glide__slides {
            display: flex;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        ul.tabs {
            padding: 0px;
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 4px;
            margin-bottom: 20px;
        }

        ul.tabs li {
            color: #003618;
            display: inline-block;
            padding: 10px 18px;
            cursor: pointer;
            background: #ededed;
            border-radius: 4px;
            font-weight: 600;
        }

        @media (max-width: 640px) {
            ul.tabs li {
                font-size: 14px;
                padding: 8px;
                background: #ededed;
            }

        }

        ul.tabs li.current {
            background: #003618;
            color: #fff;
        }

        .tab-content {
            display: none;
            padding-top: 15px;
        }

        .tab-content.current {
            display: block !important;
        }

        .img-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: transparent;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            animation: animatepopup 0.3s ease-in-out forwards;

         
            width: 50vw;
            height: 90vh;
        }

        .popup-content img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            opacity: 0;
            transform: translateY(-100px);
            animation: animatepopup 0.3s ease-in-out forwards;
            border-radius: 10px;
        }

     
        @media (max-width: 640px) {
            .popup-content {
                width: 100vw;
                height: 50vh;
            }
        }

        .close-btn {
            width: 35px;
            height: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .close-btn .bar {
            height: 4px;
            background: #fff;
            border-radius: 2px;
        }

        .close-btn .bar:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn .bar:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
        }

        .img-popup.opened {
            display: flex;
        }

        @keyframes animatepopup {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mySwiper .swiper-pagination-bullet {
            background-color: #003618 !important;
        }

        .mySwiper .swiper-pagination-bullet-active {
            background-color: #002A5B !important;
        }

        @media (max-width: 640px) {
            .swiper {
                box-shadow: none !important;
            }

            .swiper-slide {
                box-shadow: none !important;
            }

            .swiper-wrapper {
                margin: 0 !important;
            }
        }

        .clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .expanded {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
            display: block;
            -webkit-line-clamp: unset;
            white-space: normal;
        }
    </style>

    <?php include "includes/header.php" ?>

    <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div class="brud-image bg-top flex items-center text-center h-[300px]">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Testimonials
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Testimonials
                </h1>
            </div>
        </div>


        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="testimonial"
                            class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Testimonials</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="my-10">

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="relative sm:mt-20 mt-10" id="testimonials">
                    <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 px-3">

                        <div class="relative  sm:pt-5 pt-2 ">

                            <ul class="tabs text-center">
                                <li class="tab-link current" data-tab="tab-1">Image Testimonials</li>
                                <li class="tab-link" data-tab="tab-2">Video Testimonials</li>
                            </ul>

                            <div id="tab-1" class="tab-content current Testimonials">
                                <div class="overflow-hidden mt-1" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php
                                        if (empty($image_testimonials)) {
                                            echo "<li class='text-center w-full py-8 text-gray-500'>No data available</li>";
                                        } else {
                                            foreach ($image_testimonials as $data) {
                                                ?>
                                                <li
                                                    class=" sm:flex items-start gap-2 mb-4 border-[1px] border-gray-300 p-3 rounded-[8px] bg-blue-main">
                                                    <div class="text-center sm:w-[30%] w-[90%]">
                                                        <img src="<?= $api_url ?>/<?= $data['image_url'] ?? "" ?>" alt="<?= htmlspecialchars(cms_image_alt($data, 'Testimonial')) ?>"
                                                            class="mb-2 mx-auto rounded-[10px] w-[130px] h-[130px]">
                                                        <h2 class="font-[700] text-[16px] text-gray-100">
                                                            <?= $data['title'] ?? "" ?></h2>
                                                    </div>
                                                    <div class="sm:w-[50%] w-[90%] sm:mt-0 mt-3 sm:text-left text-center ">
                                                        <p
                                                            class="testimonial-text text-[16px] text-gray-200 text-center sm:text-left clamp-2">
                                                            <?= strip_tags($data['description']) ?? "" ?>
                                                        </p>
                                                        <button class="moreless-button font-[600] text-white text-sm mt-1">Read
                                                            more...</button>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div id="tab-2" class="tab-content Testimonials2">
                                <div class="overflow-hidden mt-1" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php
                                        if (empty($videos)) {
                                            echo "<li class='text-center w-full py-8 text-gray-500'>No data available</li>";
                                        } else {
                                            $hasValidVideo = false;
                                            foreach ($videos as $video) {
                                                $mediaFile = $video["media_file"] ?? '';
                                                $mediaUrl = $video["media_url"] ?? $video["video_url"] ?? '';
                                                $embedUrl = dps_get_youtube_embed_url($mediaUrl);

                                                if (empty($embedUrl) && empty($mediaFile)) {
                                                    continue;
                                                }
                                                $hasValidVideo = true;
                                                ?>
                                                <li class="video-slide p-2">
                                                    <div class="w-full rounded-2xl shadow-lg bg-white overflow-hidden p-2 sm:p-3 border border-gray-200">
                                                        <?php if (!empty($mediaFile)) { ?>
                                                            <video class="w-full h-[240px] sm:h-[300px] rounded-xl object-cover" controls>
                                                                <source src="<?= $api_url ?>/<?= ltrim($mediaFile, '/') ?>" type="video/mp4">
                                                            </video>
                                                        <?php } else { ?>
                                                            <iframe class="w-full h-[240px] sm:h-[300px] rounded-xl"
                                                                src="<?= htmlspecialchars($embedUrl, ENT_QUOTES, 'UTF-8') ?>"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen>
                                                            </iframe>
                                                        <?php } ?>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                            if (!$hasValidVideo) {
                                                echo "<li class='text-center w-full py-8 text-gray-500'>No data available</li>";
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
        let glide1 = null;
        let glide2 = null;

        function initGlide(selector, perViewCount) {
            const slideCount = document.querySelectorAll(selector + ' .glide__slides > li').length;
            const perView = Math.min(perViewCount || 2, Math.max(1, slideCount));
            return new Glide(selector, {
                type: slideCount > 1 ? 'carousel' : 'slider',
                focusAt: 0,
                perView: perView,
                gap: 16,
                peek: 0,
                autoplay: slideCount > 1 ? 4000 : false,
                hoverpause: true,
                animationDuration: 600,
                breakpoints: {
                    1680: {
                        perView: Math.min(perViewCount >= 4 ? 3 : 2, Math.max(1, slideCount)),
                        gap: 16
                    },
                    1024: {
                        perView: Math.min(2, Math.max(1, slideCount)),
                        gap: 16
                    },
                    820: {
                        perView: 1,
                        gap: 12
                    },
                    640: {
                        perView: 1,
                        gap: 12
                    }
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            const slideCount1 = document.querySelectorAll('.Testimonials .glide__slides > li:not(.text-center)').length;
            if (slideCount1 > 0) {
                glide1 = initGlide('.Testimonials', 2);
                glide1.mount();
            }

            const tabs = document.querySelectorAll(".tab-link");
            const contents = document.querySelectorAll(".tab-content");

            tabs.forEach(tab => {
                tab.addEventListener("click", function () {
                    const tabId = this.getAttribute("data-tab");

                    tabs.forEach(t => t.classList.remove("current"));
                    contents.forEach(c => c.classList.remove("current"));

                    this.classList.add("current");
                    const targetContent = document.getElementById(tabId);
                    if (targetContent) {
                        targetContent.classList.add("current");
                    }

                    if (tabId === "tab-2") {
                        const slideCount2 = document.querySelectorAll('.Testimonials2 .glide__slides > li:not(.text-center)').length;
                        if (slideCount2 > 0) {
                            if (!glide2) {
                                glide2 = initGlide('.Testimonials2', 2);
                                glide2.mount();
                            } else {
                                setTimeout(() => glide2.update(), 50);
                            }
                        }
                    } else {
                        const iframes = document.querySelectorAll("#tab-2 iframe");
                        iframes.forEach(f => {
                            const src = f.src;
                            f.src = src;
                        });
                        const videos = document.querySelectorAll("#tab-2 video");
                        videos.forEach(v => {
                            v.pause();
                            v.currentTime = 0;
                        });
                        if (glide1) {
                            setTimeout(() => glide1.update(), 50);
                        }
                    }
                });
            });

            const buttons = document.querySelectorAll(".moreless-button");
            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    const para = this.previousElementSibling;
                    if (!para) return;
                    para.classList.toggle("expanded");
                    para.classList.toggle("clamp-2");
                    this.textContent = para.classList.contains("expanded") ? "Read less" : "Read more...";
                });
            });
        });
    </script>

</body>

</html>