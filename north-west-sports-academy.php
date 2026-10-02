<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $northwest_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $northwest_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $northwest_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($northwest_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($northwest_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="north-west-sports-academy.php" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($northwest_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $northwest_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="">
                </div>
                <div class="md:w-[60%]">
                    <?= $northwest_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <div>

                        <p class="mt-2 leading-6">
                            DPS Jankipuram, upholds its goal to impart holistic development of each student and lays
                            great
                            emphasis on sports to support the young generation to be educated in every field of
                            instruction
                            and education. We have a gamut of indoor and outdoor sports activities to encourage young
                            sports enthusiasts to pursue their sporting excellence. The school provides its students
                            with
                            various opportunities to hone their skills with top class facilities and qualified coaches,
                            who use
                            their knowledge and expertise to bring out the best of the students’ potentials without
                            compromising on their academics.
                            <br><br>
                            The school campus accommodates prodigious sports infrastructure to up-skill talented
                            youngsters for varied sports to accomplish their dreams in sports and make them stay active
                            and
                            healthy.
                        </p>
                    </div> -->
                </div>
            </div>

             <?= $northwest_data['data']['sections'][2]['content'] ?? "" ?>

            <!-- <div class="mb-10">
                <h2 class="text-[20px]  font-[700] mt-5">Facilities under Sports Academy</h2>
                <p class="mt-2 leading-6 px-3">
                    ● Two Basketball Courts<br>
                    ● Two Lawn Tennis Synthetic Courts<br>
                    ● A Badminton Court<br>
                    ● An Enclosed Swimming Pool<br>
                    ● Indoor Chess Room<br>
                    ● Table Tennis Hall<br>
                    ● Two Turf Cricket Pitches<br>
                    ● One Cemented Cricket Pitch<br>
                    ● A Skating Rink<br>
                    ● A Football Ground<br>
                    ● A Volleyball Court
                </p>
            </div> -->

            <!-- <div class="mb-10">
                <h2 class="text-[20px]  font-[700] mt-5">Some Other Games and Activities</h2>
                <p class="mt-2 leading-6 px-3">
                    ● Marshall Arts<br>
                    ● Archery<br>
                    ● Yoga<br>
                    ● Judo<br>
                    ● Boxing<br>
                    ● Adventure Sports
                </p>
            </div> -->

            <!-- <div class="mb-10">
                <p class="mt-2 leading-6">
                    Among various sports, Athletics too has been added to the sports orbit, coached by the trained
                    professionals who facilitate the participation in all CBSE, Inter DPS, National level events and
                    Tournaments.
                    <br><br>
                    Professionally qualified sports teachers diligently foster the sporting talent of the students and
                    their overall development which help them become champions in the games of their choice.
                </p>
            </div> -->
        </div>



    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>