<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolclub_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolclub_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolclub_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($schoolclub_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($schoolclub_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Leadership Programme
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-clubs" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($schoolclub_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $schoolclub_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="">
                </div>
                <div class="md:w-[60%] text-gray-600">
                    <?= $schoolclub_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <div>
                        <p class="text-[20px] font-[700]"> School Clubs : Only for Students of Classes 6 to 12</p>

                        <p class="text-[18px] font-[700] mt-3">KEY RESPONSIBILITIES</p>
                        <p class="font-[700]">Green Gnomes</p>
                        <p>To form & operate strong Gardening Club for the purpose of nurturing Garedening as Hobby.</p>
                        <p class="font-[700]">MUN Club</p>
                        <p>To hold & to prepare students for participation in MUN Activities. To help Students to have a
                            ‘Voice’.</p>
                        <p class="font-[700]">Soulful Art</p>
                        <p>To form strong School Choir / School Band & Dance Group (both Primary & Senior)</p>
                        <p class="font-[700]">Eco Warriors</p>
                        <p>To conduct activities & initiate practices that is pro environment conservation.</p>
                        <p class="font-[700]">Sahitya Maceanas</p>
                        <p>Dramatics & Promotion of Literature</p>
                        <p>(Eng. & Hindi)</p>
                        <p>Relevant Activities to be designed & conducted.</p>
                        <p class="font-[700]">The Cybernauts</p>
                        <p>Identify & form Strong Student Tech Team</p>
                        <p class="font-[700]">Erudite</p>
                        <p>To promote Love for Reading.</p>
                        <p>Conduction of Regular DEAR Activity</p>



                    </div> -->
                </div>
            </div>
                       <?= $schoolclub_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <div class="mt-5">
                <p class="font-[700]">Spreading Smiles</p>
                <p>Community Outreach (Atleast 3 per year)</p>
                <p class="font-[700]">STEAM</p>
                <p>To identify & promote Scientific Temperament.</p>
                <p>Designing & Conduction of Steam-based Activities / Events.</p>
                <p class="font-[700]">OLUXI Smart Skills</p>
                <p>All OLUXI Smart Skills Modules to be conducted effectively with the aim of promoting Values ,
                </p>
                <p>Compassion & strong Civic Sense .
                <p class="font-[700]">Speak Well</p>
                <p>To teach good communication skills with emphasis on correct pronunciation / diction & usage.
                </p>
                <p class="font-[700]">Innovation</p>
                <p>To promote Ideation, Innovation and Creation among the students.</p>
                <p class="font-[700]"> DPSJ Shutterbug Society</p>
                <p>To promote and practice the art of photography among the students.</p>
            </div> -->
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
    $('.moreless-button').click(function() {
        const moreText = $(this).siblings('.moretext');

        $('.moretext').not(moreText).slideUp();
        $('.moreless-button').not(this).text('Read more');

        // Toggle the current one
        moreText.slideToggle();

        if ($(this).text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });

    var aboutCarousel = new Glide('.about-carousel', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 4
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel.mount();

    var aboutCarousel2 = new Glide('.about-carousel2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel2.mount();




    var glide03 = new Glide('.glide-03', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });

    glide03.mount();

    var latestNews2 = new Glide('.latestNews2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    latestNews2.mount();
    </script>
</body>

</html>