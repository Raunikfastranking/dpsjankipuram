<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $middlewing_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $middlewing_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $middlewing_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($middlewing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($middlewing_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="middle-wing-faculty" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($middlewing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

            <div class="overflow-x-auto">
                 <?= $middlewing_data['data']['sections'][1]['content'] ?? "" ?>
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
                            <td class="border px-4 py-2">DEEPTI UPPAL</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">2</td>
                            <td class="border px-4 py-2">ADEEBA SHAKEEL</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">3</td>
                            <td class="border px-4 py-2">AHMAD ZAFAR</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">4</td>
                            <td class="border px-4 py-2">ANAMIKA TIWARI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">5</td>
                            <td class="border px-4 py-2">ANCHAL SHUKLA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">6</td>
                            <td class="border px-4 py-2">ANSHUL GUPTA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">7</td>
                            <td class="border px-4 py-2">ANVITA VERMA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">8</td>
                            <td class="border px-4 py-2">AVANISH DUBEY</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">9</td>
                            <td class="border px-4 py-2">AYUSH SAXENA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">10</td>
                            <td class="border px-4 py-2">BHAWANA JOSHI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">11</td>
                            <td class="border px-4 py-2">HARDIK KESARWANI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">12</td>
                            <td class="border px-4 py-2">KUSHAGRA SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">13</td>
                            <td class="border px-4 py-2">MANEESHA SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">14</td>
                            <td class="border px-4 py-2">MANISH THAKUR</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">15</td>
                            <td class="border px-4 py-2">MANJALI SONI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">16</td>
                            <td class="border px-4 py-2">MARIYAM ZEHRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">17</td>
                            <td class="border px-4 py-2">NEHA CHATTERJEE</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">18</td>
                            <td class="border px-4 py-2">PRAGYA RATOGI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">19</td>
                            <td class="border px-4 py-2">PRIYANKA SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">20</td>
                            <td class="border px-4 py-2">RANJANA TRIPATHI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">21</td>
                            <td class="border px-4 py-2">RANPREET SINGH</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">22</td>
                            <td class="border px-4 py-2">RASHMI SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">23</td>
                            <td class="border px-4 py-2">RASHMI SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">24</td>
                            <td class="border px-4 py-2">RITU SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">25</td>
                            <td class="border px-4 py-2">ROLI MISRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">26</td>
                            <td class="border px-4 py-2">SAIMA MUMTAZ</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">27</td>
                            <td class="border px-4 py-2">SAMRIDDHI MISHRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">28</td>
                            <td class="border px-4 py-2">SAMUEL MURMU</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">29</td>
                            <td class="border px-4 py-2">SANDHYA MISRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">30</td>
                            <td class="border px-4 py-2">SAROJ SHUKLA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">31</td>
                            <td class="border px-4 py-2">SHALINI RANA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">32</td>
                            <td class="border px-4 py-2">SHASHI JOSHI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">33</td>
                            <td class="border px-4 py-2">SHATRUGHAN P. VISHWAKARMA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">34</td>
                            <td class="border px-4 py-2">SHIPRA LAKHAN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">35</td>
                            <td class="border px-4 py-2">SHIVAM MISHRA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">36</td>
                            <td class="border px-4 py-2">SHWETA OBEROI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">37</td>
                            <td class="border px-4 py-2">SHWETA SRIVASTAVA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">38</td>
                            <td class="border px-4 py-2">SIMRAN RASTOGI</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">39</td>
                            <td class="border px-4 py-2">SULTANA J. GAYEN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">40</td>
                            <td class="border px-4 py-2">SUMBUL KHAN</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">41</td>
                            <td class="border px-4 py-2">UZMA NAJAM</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">42</td>
                            <td class="border px-4 py-2">VARSHA GUPTA</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">43</td>
                            <td class="border px-4 py-2">YOGESH PAL</td>
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