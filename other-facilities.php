<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $otherfacilitie_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $otherfacilitie_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $otherfacilitie_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($otherfacilitie_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($otherfacilitie_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Facilities
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
                        <a href="other-facilities" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($otherfacilitie_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">





            <div>


                <div class="sm:flex gap-10 items-center">
                    <div class="mx-3 pb-0 sm:pt-0 pt-[100px] sm:w-[50%]">
                               <?= $otherfacilitie_data['data']['sections'][1]['columns'][0]['content'] ?? "" ?>
                        <!-- <div class="sm:text-left text-center">
                            <h2
                                class="text-[20px] font-[700] text-gray-600 uppercase sm:text-left text-center mb-3 hr-line relative">
                                Multi Activity Lounge:</h2>
                            <p class="text-[16px] text-gray-600 mt-1"> which serves as a niche for enhancing student
                                learning and
                                development by providing a space for experiential, hands- on- learning and exploration.
                                The Activity Room for our little toddlers is no less than a world full of fun. It’s
                                based on
                                the concept of multi-sensory development. It provides a stimulating environment for
                                children and aids spontaneous learning. It also caters to cognitive, socio-emotional,
                                and
                                fine and gross motor skill development. It is a fun approach to learning as it boosts
                                the
                                development of the brain in children by providing constant stimulus by prompting them
                                for responses. As children improve their fine motor skills they develop their
                                independence in doing a range of tasks such as eating, writing, speaking, creating, and
                                dressing themselves. They are able to access a wider source of learning activities, and
                                social experiences</p>
                        </div> -->
                    </div>
                    <div class="sm:w-[50%] sm:block hidden">
                        <img src="<?= $otherfacilitie_data['data']['sections'][1]['columns'][1]['image_path'] ?? "" ?>" alt="">
                    </div>
                </div>



                <div class="sm:flex gap-10 items-center">
                    <div class="sm:w-[50%] sm:block hidden">
                        <img src="<?= $otherfacilitie_data['data']['sections'][2]['columns'][0]['image_path'] ?? "" ?>" alt="">
                    </div>
                    <div class="mx-3 pb-0 sm:pt-0 pt-[100px] sm:w-[50%]">
                         <?= $otherfacilitie_data['data']['sections'][2]['columns'][1]['content'] ?? "" ?>
                        <!-- <div class="sm:text-left text-center">
                            <h2
                                class="text-[20px] font-[700] text-gray-600 uppercase sm:text-left text-center mb-3 hr-line relative">
                                Our School Auditorium:</h2>
                            <p class="text-[16px] text-gray-600 mt-1"> It is not only the host of an array of
                                celebrations and events like
                                the one today, but is also the place where the students become proud orators standing
                                at the dais embracing the Mic</p>
                        </div> -->
                    </div>
                    
                </div>



                <div class="sm:flex gap-10 items-center">
                    <div class="mx-3 pb-0 sm:pt-0 pt-[100px] sm:w-[50%]">
                         <?= $otherfacilitie_data['data']['sections'][3]['columns'][0]['content'] ?? "" ?>
                        <!-- <div class="sm:text-left text-center">
                            <h2
                                class="text-[20px] font-[700] text-gray-600 uppercase sm:text-left text-center mb-3 hr-line relative">
                                Infirmary:</h2>
                            <p class="text-[16px] text-gray-600 mt-1">The School has a well-equipped
                                infirmary with a well-qualified nurse. In case
                                of emergency the school can deal with cases immediately
                            </p>
                            </p>
                        </div> -->
                    </div>
                    <div class="sm:w-[50%] sm:block hidden">
                        <img src="<?= $otherfacilitie_data['data']['sections'][3]['columns'][1]['image_path'] ?? "" ?>" alt="">
                    </div>
                </div>


              
            </div>
        </div>
    </div>
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