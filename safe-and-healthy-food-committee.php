<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $safehealthy_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $safehealthy_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $safehealthy_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>


    <div class="main relative  mb-[40px] sm:mb-[120px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($safehealthy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($safehealthy_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-xs sm:text-sm font-medium text-blue-main">General Information</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="safe-and-healthy-food-committee"
                            class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($safehealthy_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div class="md:w-[100%]">


                    <div class="w-full max-w-3xl mx-auto mt-10">
                      
                    <?= $pocso_data['data']['sections'][1]['content'] ?? "" ?>
                        <!-- Committee Table -->
                        <!-- <table class="table-auto border border-gray-400 w-full text-left">
                            <thead>
                                <tr class="bg-blue-main text-white">
                                    <th class="border border-gray-400 px-4 py-2">Member</th>
                                    <th class="border border-gray-400 px-4 py-2">Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Shikha Kapoor</td>
                                    <td class="border border-gray-400 px-4 py-2">Junior Mistress</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Preeti Joshi</td>
                                    <td class="border border-gray-400 px-4 py-2">Academic Coordinator</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Maneesha Singh</td>
                                    <td class="border border-gray-400 px-4 py-2">Coordinator (Activity)</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Mr. Avaneesh Dubey</td>
                                    <td class="border border-gray-400 px-4 py-2">House Warden</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Kamlesh</td>
                                    <td class="border border-gray-400 px-4 py-2">Teacher</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Deeba Rizvi</td>
                                    <td class="border border-gray-400 px-4 py-2">Teacher</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Rashmi Srivastava</td>
                                    <td class="border border-gray-400 px-4 py-2">Teacher</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Meenakshi</td>
                                    <td class="border border-gray-400 px-4 py-2">Teacher</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Mr. A. K. Srivastava</td>
                                    <td class="border border-gray-400 px-4 py-2">Admin</td>
                                </tr>
                            </tbody>
                        </table> -->

                        
                        <div class="mt-6 ">
                            <!-- <h3 class="font-bold text-[20px] mb-2">Grievance Redressal</h3>
                            <table class="table-auto border border-gray-400 w-full text-center">
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2">Ms. Niiru Bhaskarr</td>
                                    <td class="border border-gray-400 px-4 py-2">Principal</td>
                                    <td class="border border-gray-400 px-4 py-2">contact@dpsjankipuram.com</td>
                                </tr>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" w-full">
        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>