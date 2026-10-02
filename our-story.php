<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourstory_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourstory_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourstory_data['data']['meta_keywords'] ?? "" ?>">
</head>
<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image"
            >
                <div>

                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                       <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left ml-[7rem] sm:mb-1 hr-line relative leading-9">
                       <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>


                </div>


            </div>

            <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-story" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"> <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <?= $ourstory_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <div class="mt-10 relative">

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5"><b>Delhi Public School Jankipuram</b> is an academic institution that follows progressive educational system. The school follows a curriculum that truly believes in developing life skills in students and making them global citizens.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school promotes a holistic learning system which caters to an all-round development of its students and provides challenging environment to reach their optimum potential. We aim to instill a progressive mind-set and has blossomed into a multidisciplinary institution, offering various facilities to impart myriad expertise.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school nurtures leaders of tomorrow, who will succeed in whatever they put their hands to, anywhere in the world, and yet retain a distinctive ethos and essence of India. We strive to develop the cognitive, emotional, psychomotor and aesthetic faculties of the learner through a number of curricular and co-curricular activities in order to foster team spirit and environmental cognizance. We offer an amiable, stress-free and value- based learning experience. We also lay emphasis on the proficiency of a learner in the acquisition of essential life skills attitudes, values, and achievement in outdoor co-curricular activities encompassing sports and games.</p>
                </div> -->
            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>