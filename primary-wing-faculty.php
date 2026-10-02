<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $primarywing_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $primarywing_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $primarywing_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Faculty
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
                        <a href="primary-wing-faculty" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="overflow-x-auto">
                <?= $primarywing_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <table class="min-w-full border border-gray-300 bg-white">
                    <thead class="bg-blue-main text-white">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300">S. No.</th>
                            <th class="px-4 py-2 border border-gray-300">Teacher's Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">DIVYA SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">POORNA MEHROTRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">KIRAN SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">4</td>
                            <td class="border px-4 py-2">KAMLESH KUMARI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">5</td>
                            <td class="border px-4 py-2">SHWETA VOHRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">6</td>
                            <td class="border px-4 py-2">AAFREEN IRSHAD</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">7</td>
                            <td class="border px-4 py-2">AASTHA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">8</td>
                            <td class="border px-4 py-2">ALFISHA LIYAQAT</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">9</td>
                            <td class="border px-4 py-2">ALIZA ALI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">10</td>
                            <td class="border px-4 py-2">ANAMIKA PANDEY</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">11</td>
                            <td class="border px-4 py-2">ARUNDHATI SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">12</td>
                            <td class="border px-4 py-2">ASHA PATEL</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">13</td>
                            <td class="border px-4 py-2">DACKSHINA TIWARI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">14</td>
                            <td class="border px-4 py-2">DEEBA RIZVI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">15</td>
                            <td class="border px-4 py-2">DEWANSHI MEHTA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">16</td>
                            <td class="border px-4 py-2">DIVYA SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">17</td>
                            <td class="border px-4 py-2">FARIHA ALEEM</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">18</td>
                            <td class="border px-4 py-2">MANISHA SINHA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">19</td>
                            <td class="border px-4 py-2">MINAKSHI VERMA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">20</td>
                            <td class="border px-4 py-2">MONIKA SAXENA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">21</td>
                            <td class="border px-4 py-2">NAMITA SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">22</td>
                            <td class="border px-4 py-2">PRANSHI SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">23</td>
                            <td class="border px-4 py-2">RACHNA ACHARYA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">24</td>
                            <td class="border px-4 py-2">RUCHI PANDEY</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">25</td>
                            <td class="border px-4 py-2">SAFINA KHAN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">26</td>
                            <td class="border px-4 py-2">SANGITA RANJAN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">27</td>
                            <td class="border px-4 py-2">SAPNA VERMA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">28</td>
                            <td class="border px-4 py-2">SARIKA SHARMA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">29</td>
                            <td class="border px-4 py-2">SARITA SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">30</td>
                            <td class="border px-4 py-2">SHALINI KATIYAR</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">31</td>
                            <td class="border px-4 py-2">SHIFA SULTAN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">32</td>
                            <td class="border px-4 py-2">SHRADDHA BHARTI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">33</td>
                            <td class="border px-4 py-2">SHUBHI TRIPATHI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">34</td>
                            <td class="border px-4 py-2">SONIA SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">35</td>
                            <td class="border px-4 py-2">SWAPNILA PANDEY</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">36</td>
                            <td class="border px-4 py-2">SWATI BAWEJA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">37</td>
                            <td class="border px-4 py-2">YASMEEN KHALIL</td>
                        </tr>
                    </tbody>
                </table> -->
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