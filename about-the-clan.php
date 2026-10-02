<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $abouttheclan_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $abouttheclan_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $abouttheclan_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>


    <div class="main relative  mb-[40px] sm:mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($abouttheclan_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($abouttheclan_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="about-the-clan" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($abouttheclan_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 text-gray-600">
            <div class="sm:mt-10 relative">


                <div class="">
                     <?= $abouttheclan_data['data']['sections'][1]['content'] ?? "" ?>

                    <!-- <div class="">

                        <h2 class="text-[22px] font-[700] sm:mt-0 mt-2 hr-line relative leading-9">“Alone we can do so
                            little, together we can do so much.”
                        </h2>
                        <p class="sm:text-[16px] text-[16px]  font-[400] mt-2">
                            The well trained teaching staff of DPS Indira Nagar, has been earnestly serving the students
                            academically ,keeping the motto – Service Before Self alive. We believe that qualified
                            teachers are an asset to the organization. With extensive teaching experience, each faculty
                            member is both a teacher and an expert in his or her own field. Teachers here plan their
                            lessons in great detail and well in advance. They are not only well equipped with their
                            subject knowledge but also are prominent co-workers making the functioning of the system
                            smooth and positive under the following hierarchy-
                        </p>
                        <ul class="mt-2 ml-6 list-disc">
                            <li>PRINCIPAL</li>
                            <li>HEAD MISTRESS</li>
                            <li>COORDINATORS</li>
                            <li>CLASS REPRESENTATIVES</li>
                            <li>CLASS TEACHERS</li>
                        </ul>

                    </div> -->
                </div>
            </div>

        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>