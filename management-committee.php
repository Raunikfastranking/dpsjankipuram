<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $mc_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $mc_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $mc_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($mc_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($mc_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">About Us</a>
                    </div>
                </li>
                   <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Leadership Team</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="management-committee" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($mc_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div>

                    <div class="md:w-[100%]">

                        <div class="max-w-4xl mx-auto rounded-md mt-10">
                            <?= $mc_data['data']['sections'][1]['content'] ?? "" ?>
                           
                            <!-- <div class="bg-green-800 text-white rounded-t-md text-center p-4">
                                <h1 class="text-2xl font-bold">Delhi Public School Jankipuram</h1>
                                <p class="text-sm italic">(Under the aegis of The Delhi Public School Society, New Delhi)</p>
                                <p class="font-semibold mt-1 text-[13px]">DELHI PUBLIC SCHOOL, SECTOR-6, JANKIPURAM EXTENSION, LUCKNOW</p>
                            </div>

                          
                            <div class="bg-black text-white text-center font-bold py-2">
                                School Managing Committee Member Details
                            </div>

                          
                            <div class="overflow-x-auto">
                                <table class="min-w-full table-auto border border-black text-sm">
                                    <thead class="bg-gray-200 text-black font-semibold">
                                        <tr>
                                            <th class="border border-black px-4 py-2 text-left">S.No.</th>
                                            <th class="border border-black px-4 py-2 text-left">Name</th>
                                            <th class="border border-black px-4 py-2 text-left">Designation</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        <tr>
                                            <td class="border border-black px-4 py-2">1</td>
                                            <td class="border border-black px-4 py-2">Mr. Mukhtarul Amin</td>
                                            <td class="border border-black px-4 py-2">President</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">2</td>
                                            <td class="border border-black px-4 py-2">Mr. Syed Javed Ali Hashmi</td>
                                            <td class="border border-black px-4 py-2">Member</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">3</td>
                                            <td class="border border-black px-4 py-2">Ms. Neeru Bhaskar</td>
                                            <td class="border border-black px-4 py-2">Secretary</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">4</td>
                                            <td class="border border-black px-4 py-2">Mr. Anshul Gupta</td>
                                            <td class="border border-black px-4 py-2">Teacher, Member</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">5</td>
                                            <td class="border border-black px-4 py-2">Ms. Shuchi Agarwal</td>
                                            <td class="border border-black px-4 py-2">Teacher, Member</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">6</td>
                                            <td class="border border-black px-4 py-2">Ms. Priya Mishra</td>
                                            <td class="border border-black px-4 py-2">Parent, Member</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">7</td>
                                            <td class="border border-black px-4 py-2">Mr. Sanjay Mishra</td>
                                            <td class="border border-black px-4 py-2">Parent, Member</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">8</td>
                                            <td class="border border-black px-4 py-2">Ms. Ghazala Afsar</td>
                                            <td class="border border-black px-4 py-2">Principal, Other School</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">9</td>
                                            <td class="border border-black px-4 py-2">Ms. Sangeeta Yadav</td>
                                            <td class="border border-black px-4 py-2">Principal, Other School</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-black px-4 py-2">10</td>
                                            <td class="border border-black px-4 py-2">DIOS</td>
                                            <td class="border border-black px-4 py-2">Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->
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