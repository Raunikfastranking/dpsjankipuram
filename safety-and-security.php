<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $safesecurity_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $safesecurity_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $safesecurity_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($safesecurity_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($safesecurity_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Mandatory Public
                            Disclosure
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Committees
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
                        <a href="safety-and-security"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> <?= strip_tags($safesecurity_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="gap-9 mt-6 mb-10">
                <div class="w-full max-w-4xl mx-auto mt-10">
                    <?= $safesecurity_data['data']['sections'][1]['content'] ?? "" ?>
                </div>
                     
                <!-- <div class="w-full max-w-4xl mx-auto mt-10">
                    <table class="table-auto border border-gray-400 w-full text-center">
                        <thead>
                            <tr class="bg-blue-main text-white">
                                <th class="border border-gray-400 px-4 py-2">Parents</th>
                                <th class="border border-gray-400 px-4 py-2">Teachers</th>
                                <th class="border border-gray-400 px-4 py-2">Students</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2">Mr. Tushar Giri</td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Shikha Kapoor</td>
                                <td class="border border-gray-400 px-4 py-2">Shipra Yadav</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2">Ms. Shifa Sultan</td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Preeti Joshi</td>
                                <td class="border border-gray-400 px-4 py-2">Raza Jafri</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Monica Rani</td>
                                <td class="border border-gray-400 px-4 py-2">Shrankhala Srivastava</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Mr. Anshul Gupta</td>
                                <td class="border border-gray-400 px-4 py-2">Fatima Zehra</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Mr. C. N. Chaturvedi</td>
                                <td class="border border-gray-400 px-4 py-2">Raghav Kumar</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Maneesha Singh</td>
                                <td class="border border-gray-400 px-4 py-2">Huzaifa</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Samriddhi Mishra</td>
                                <td class="border border-gray-400 px-4 py-2">Ranbir Singh</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Mr. Anoop Kumar Rai</td>
                                <td class="border border-gray-400 px-4 py-2">Aditi Singh</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Mr. Naresh Mishra</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Deeba Rizvi</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Mr. Yogesh Pal</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Uzma Najam</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Divya Srivastava</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"></td>
                                <td class="border border-gray-400 px-4 py-2">Ms. Ranjo Nalwa</td>
                                <td class="border border-gray-400 px-4 py-2"></td>
                            </tr>
                        </tbody>
                    </table>

                   
                    <div class="mt-6 ">
                        <h2 class="font-bold text-[20px]">Grievance Redressal</h2>
                        <table class="table-auto border border-gray-400 w-full mt-2 text-center">
                            <tr>
                                <td class="border border-gray-400 px-4 py-2">Ms. Niiru Bhaskarr</td>
                                <td class="border border-gray-400 px-4 py-2">Principal</td>
                                <td class="border border-gray-400 px-4 py-2">contact@dpsjankipuram.com</td>
                            </tr>
                        </table>
                    </div>
                </div> -->

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