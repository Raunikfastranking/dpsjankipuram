<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $generalinformation_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $generalinformation_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $generalinformation_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image"
           >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($generalinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($generalinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="general-information" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($generalinformation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                              <?= $generalinformation_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            S.No.
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Information
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Details
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1.</th>
                                        <td class="px-6 py-2">Name of the School</td>
                                        <td class="px-6 py-2">DELHI PUBLIC SCHOOL JANKIPURAM</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2.</th>
                                        <td class="px-6 py-2">Affiliation no. (if applicable)</td>
                                        <td class="px-6 py-2">2131718</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3.</th>
                                        <td class="px-6 py-2">School code (if applicable)</td>
                                        <td class="px-6 py-2">70978</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4.</th>
                                        <td class="px-6 py-2">Complete address with pin code</td>
                                        <td class="px-6 py-2">Sector - 6, Jankipuram Ext., Lucknow 226021</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5.</th>
                                        <td class="px-6 py-2">Principal name & qualification</td>
                                        <td class="px-6 py-2">Ms Neeru Bhaskar, MA, B.Ed</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6.</th>
                                        <td class="px-6 py-2">School mail id</td>
                                        <td class="px-6 py-2">contact@dpsjankipuram.com</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7.</th>
                                        <td class="px-6 py-2">Contact details (landline/mobile)</td>
                                        <td class="px-6 py-2">0522-2772862 / 9076569658</td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>