<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $laboratories_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $laboratories_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $laboratories_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($laboratories_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($laboratories_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="laboratories" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($laboratories_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 ">
            <div class=" my-10">

                <div>
                    <!-- <div class="sm:flex gap-10 items-center">
                        <div class="w-[50%]">
                            <img src="./assets/images/Art Room2 1.png" alt="">
                        </div>
                        <div class="w-[50%]">
                            <p class="text-[17px] text-gray-600 mt-3 leading-8">
                                <span class="text-gray-600 font-[600] text-[20px]">Junior Labs: </span>
                            <div class="text-gray-600">
                                <span class="text-gray-600 font-[600]"> Play Lab: </span>
                                The activity lab is designed for all activities for the preprimary and primary students
                                where they actively participate in all activities to enhance their learning and sharpen
                                their motor skills.
                                <br>● The Junior Maths Lab
                                <br>● The Curiosity Lab
                            </div>
                        </div>
                    </div> -->
                    <div class="sm:flex gap-10 ">
                         <div class="w-[50%]">
                            <img src="<?= $laboratories_data['data']['sections'][1]['columns'][0]['image_path'] ?? "" ?>" alt="">
                        </div>
                        <div class="w-[50%]">
                              <?= $laboratories_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                            <!-- <div class="mt-4 text-gray-600">
                                <br>  <strong class="text-gray-600 font-[600]">Science Lab: </strong>
                                <br>
                                Our state-of-the-art Science Labs for Physics, Chemistry and Biology provide an
                                immersive and hands-on learning experience, in line with the National Education Policy
                                (NEP). These labs are equipped with the latest tools, equipment, and safety measures to
                                allow students to experiment, investigate, and discover scientific concepts in real
                                time.

                                <br> ● <strong class="text-gray-600 font-[600]">Physics Lab:</strong>
                                Explore the wonders of the physical world through practical experiments that bring theoretical concepts to life. Students investigate motion, energy, and forces, deepening their understanding of physics principles.

                                <br> ● <strong class="text-gray-600 font-[600]">Chemistry Lab:</strong>
                                 A well-equipped environment for students to conduct safe chemical experiments, enhancing their understanding of matter, reactions, and the elements that shape our world.

                                <br> ● <strong class="text-gray-600 font-[600]">Biology Lab:</strong>
                                 It offers students the chance to explore the world of living organisms. With microscopes, models, and specimens, students gain insights into anatomy, ecosystems, genetics, and environmental science.



                            </div> -->
                        </div>

                       
                    </div>

                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <p class="text-[17px] text-gray-600 mt-1">
                    <span class="text-blue-main text-[20px] font-[600]">Laboratories :</span><br>
                <div>
                    <span class="text-gray-600 font-[600]">Junior Labs Play Lab: </span>
                    The activity lab is designed for all activities for the preprimary and primary students where they actively participate in all activities to enhance their learning and sharpen their motor skills.
                    <br>● The Junior Maths Lab
                    <br>● The Curiosity Lab
                </div>
                <div class="mt-4">
                    <span class="text-gray-600 font-[600]">Senior Labs: </span>
                    Science Lab <br>

                    <br> ● Physics
                    The lab is as per the specification of C.B.S.E. norms with spacious and proper counters for experiments; with the other required provisions.

                    <br> ● Chemistry
                    As per proper and latest specifications the requirements are prevalent in the labs to meet C.B.S.E. standards.

                    <br> ● Biology
                    Biology lab has various facilities to help students get a first-hand learning experience by performing various experiments on their own, under the guidance of the subject teacher.

                    <br> ● Bio-Technology

                    <br> ● Computer Lab
                    The school is embellished with an updated computer lab with the latest infrastructure and computers which can accommodate the classes with ease.


                    <br> ● Language Lab

                    Video clippings are shown to students on a regular basis to apprise them of the principles of language to better their command of it.

                    Fashion Studies Lab {need content}

                    <br> ● Math Lab

                </div>
                </p>
            </div>
        </div> -->


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>