<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $staffteaching_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $staffteaching_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $staffteaching_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image"
            >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
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
                        <a href="staff-teaching" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="text-[16px] text-gray-600 space-y-10 mb-16">
              
                  <?= $staffteaching_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <div class="sm:mt-10 relative">
                    <div>
                        <div class="md:w-[100%]">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                    <thead class="text-xs text-white uppercase bg-[#005224]">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">Sr No</th>
                                            <th scope="col" class="px-6 py-4">Information</th>
                                            <th scope="col" class="px-6 py-4">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</th>
                                            <td class="px-6 py-2 capitalize">Principal</td>
                                            <td class="px-6 py-2 capitalize">Ms Neeru Bhaskar</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap"
                                                rowspan="4">2</th>
                                            <td class="px-6 py-2 capitalize">Total No. Of Teachers</td>
                                            <td class="px-6 py-2">123</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <td class="px-6 py-2 pl-10 capitalize">* PGT</td>
                                            <td class="px-6 py-2">18</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <td class="px-6 py-2 pl-10 capitalize">* TGT</td>
                                            <td class="px-6 py-2">50</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <td class="px-6 py-2 pl-10 capitalize">* PRT</td>
                                            <td class="px-6 py-2">55</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</th>
                                            <td class="px-6 py-2 capitalize">Teachers Section Ratio</td>
                                            <td class="px-6 py-2">1.62</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</th>
                                            <td class="px-6 py-2 capitalize">Details Of Special Educator</td>
                                            <td class="px-6 py-2 capitalize">Yes</td>
                                        </tr>
                                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                                            <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</th>
                                            <td class="px-6 py-2 capitalize">Details Of Counsellor And Wellness Teacher
                                            </td>
                                            <td class="px-6 py-2 capitalize">Yes</td>
                                        </tr>
                                    </tbody>


                                </table>
                            </div>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>