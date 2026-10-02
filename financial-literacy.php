<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $financial_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $financial_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $financial_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($financial_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($financial_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">21st Century Skills</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="financial-literacy" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($financial_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">

            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $financial_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $financial_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <div class="">

                        <p class="text-gray-600 text-[16px]"><strong>The Reserve Bank of India (RBI) has launched
                                the National Strategy for Financial Education
                                (NSFE):</strong> 2020-2025, the second one after the NSFE 2013-2018, to create a
                            financially aware and
                            empowered India. The strategy aims to empower different sections of the population to make
                            informed choices about their financial wellbeing, by developing the requisite knowledge,
                            skills,
                            attitudes and behaviours.</p>
                        <p class="text-gray-600 text-[16px] mt-2">This is to be achieved through the “5 C strategy” of:
                        </p>
                        <ul class="text-gray-600 text-[16px] mt-2 sm:ml-5" style="list-style:disc">
                            <li>Content creation for schools, colleges and training establishments</li>
                            <li>Capacity building of financial service intermediaries</li>
                            <li>Community participation through an appropriate</li>
                            <li>Communication strategy</li>
                            <li>Collaboration enhancement among various people.</li>
                        </ul>
                        <p class="text-gray-600 text-[16px] mt-2">
                            Why is Financial Literacy important for students?</p>
                        <p class="text-gray-600 text-[16px] mt-2">
                            Enhance understanding: Students develop a thorough understanding of money management,
                            enabling
                            them to make informed decisions. By gaining financial knowledge, they become more confident
                            in
                            managing their finances, which encourages healthier financial habits throughout their lives.
                            Preparation for the Future: Early exposure to financial literacy prepares students for
                            future
                            financial responsibilities, such as managing student loans, saving for higher education, and
                            investing to achieve their life goals</p>



                    </div> -->
                </div>
            </div>

            <?= $financial_data['data']['sections'][2]['content'] ?? "" ?>
 
            <!-- <div>
                <p class="text-gray-600 font-[700] text-[20px] mt-2"> Program Structure at School Level</p>

                <p class="text-gray-600 text-[16px] mt-2">Financial literacy incorporates a variety of interactive
                    activities and real-life applications
                    to make learning about finance engaging and practical:</p>
                <ul class="text-gray-600 text-[16px] mt-2">
                    <li>1. <strong>Basics of Money:</strong> This section introduces the concept of money, its history,
                        and its various
                        forms (coins, notes, digital money). This foundational knowledge sets the stage for
                        understanding more complex financial concepts later on.</li>
                    <li>2. <strong>Needs vs. Wants:</strong> Students learn to differentiate between essential items
                        (needs) and
                        non-essential items (wants), fostering better spending habits and thoughtful decision-making
                        regarding their purchases.</li>
                    <li>3. <strong>Introduction to Banking:</strong> This part covers basic banking concepts, including
                        the purpose of
                        banks, types of bank accounts (like savings accounts), and how banking services can help manage
                        money.</li>
                    <li> 4. <strong>Savings and Expenditure:</strong> Students are taught the importance of saving money
                        and how to track
                        and manage their expenses. They are encouraged to set aside money for future needs and avoid
                        unnecessary spending.</li>
                    <li>5. <strong>Budgeting:</strong> This section introduces the concept of budgeting, including how
                        to create a simple
                        budget and track income and expenses. This skill is crucial for effectively managing finances.
                    </li>
                    <li>6. <strong>Types of Savings Accounts:</strong> Students receive an overview of various savings
                        accounts,
                        including their features and benefits. They learn about interest rates, account types, and how
                        to choose the right account for their needs.</li>
                    <li>7. <strong>Advanced Banking Concepts:</strong> This part delves into more sophisticated banking
                        topics such as
                        digital banking, different types of financial institutions, and the role of central banks like
                        the Reserve Bank of India (RBI). This understanding helps students grasp the broader financial
                        system.</li>
                    <li>8. <strong>Investment Basics</strong>: Students are introduced to various investment options,
                        including mutual
                        funds, bonds, and Unit Linked Insurance Plans (ULIPs). They learn about the risk-return
                        relationship and how to make informed investment decisions.</li>
                    <li>9. <strong>Financial Planning:</strong> This section provides a comprehensive overview of
                        financial planning,
                        including setting financial goals, managing debt, and preparing for future expenses. Students
                        learn to create a financial plan that aligns with their personal goals and circumstances.</li>
                </ul>

            </div> -->

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