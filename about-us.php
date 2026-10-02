<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Jankipuram| About Us</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
              <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    About Us
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    About Us
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="about-us.php" class="ms-1 text-sm font-medium text-blue-main">About Us</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <h1 class="text-[16px] font-[700] text-gray-600 leading-8 text-center relative"><span
                        class="text-[32px] font-[700] text-blue-main hr-line uppercase">WELCOME TO DELHI PUBLIC SCHOOL
                        JANKIPURAM</span></h1>
                <p class="text-[17px] text-gray-600 mt-5">A love for learning, a quest for more, and a strong will to
                    make a change— DPS believes in raising a generation of global citizens who thrive on these three
                    aspects. With world-class infrastructure and a dedicated staff, we recognise the uniqueness of every
                    child and provide them with personalised guidance and opportunities..</p>

            </div>
        </div>



        <div class="mb-5 ab-cr-bg ">
            <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto px-3">
                <div class="relative glide-0333 opne-hide-circle px-3 pb-5">
                    <!-- Slides -->
                    <div class="overflow-hidden mt-3 " data-glide-el="track">
                        <ul
                            class="mt-5 relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                            <li><img src="assets/images/img06.jpg" class="w-full max-w-full m-auto" /></li>
                            <li><img src="assets/images/img07.jpg" class="w-full max-w-full m-auto" /></li>
                            <li><img src="assets/images/img08.jpg" class="w-full max-w-full m-auto" /></li>
                            <li><img src="assets/images/img09.jpg" class="w-full max-w-full m-auto" /></li>
                            <li><img src="assets/images/img010.jpg" class="w-full max-w-full m-auto" /></li>

                        </ul>
                    </div>
                    <!-- Controls -->
                    <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2 hide-circle"
                        data-glide-el="controls">
                        <button
                            class="inline-flex items-center justify-center relative right-[66px] hover:bg-[#FED72B] hover:text-white w-8 h-8 transition duration-300 border rounded-full lg:w-10 lg:h-10 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                            data-glide-dir="<" aria-label="prev slide">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button
                            class="inline-flex items-center justify-center relative left-[66px]  hover:bg-[#FED72B] hover:text-white w-8 h-8 transition duration-300 border rounded-full lg:w-10 lg:h-10 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                            data-glide-dir=">" aria-label="next slide">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
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

        var glide0333 = new Glide('.glide-0333', {
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

        glide0333.mount();
 
    </script>
</body>

</html>