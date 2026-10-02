<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $documentsinformation_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $documentsinformation_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $documentsinformation_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image"
           >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="documents-and-informations"
                            class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                              <?= $documentsinformation_data['data']['sections'][1]['content'] ?? "" ?>
                             <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">S.No.</th>
                                        <th scope="col" class="px-6 py-4">Documents/Information</th>
                                        <th scope="col" class="px-6 py-4">Upload Document Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</td>
                                        <td class="px-6 py-2">Copies Of Affiliation/Upgradation Letter And Recent
                                            Extension Of Affiliation, If Any</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/f36c2023719114726551.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2</td>
                                        <td class="px-6 py-2">Copies Of Societies/Trust/Company Registration/Renewal
                                            Certificate as Applicable</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/d3c8202372115482445.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</td>
                                        <td class="px-6 py-2">Copy Of No Objection Certificate (NOC) Issued If
                                            Applicable By The State Govt/UT</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/052a2023718172557197.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</td>
                                        <td class="px-6 py-2">Copy Of Recognition Certificate Under RTE Act 2009 And Its
                                            Renewal If Applicable</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/cc86202372115486599.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</td>
                                        <td class="px-6 py-2">Copy Of Valid Building Safety Certificate As Per The
                                            National Building Code</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/0d9c2023719174215384.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6</td>
                                        <td class="px-6 py-2">Copy Of Valid Fire Safety Certificate Issued By The
                                            Competent Authority</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/48e12023714163951588.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7</td>
                                        <td class="px-6 py-2">Copy of the DEO certificate submitted by the school for
                                            Affiliation/Upgradation/Extension of Affiliation of Self Certification by
                                            School</td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/ed332023724123038267.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">8</td>
                                        <td class="px-6 py-2">Copies of Valid Water, Health and Sanitation Certificates
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="http://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/7515202371416402477.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">9</td>
                                        <td class="px-6 py-2">APPENDIX -IX
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/575f202552814144469.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">10</td>
                                        <td class="px-6 py-2">COPY OF LAND CERTIFICATE
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsjnk.superhouseerp.com/Uploads/Site/DPSJNK/DocsAndInfo/Pdf/26712023724123448548.pdf"
                                                class="text-blue-600" target="_blank">View</a>
                                        </td>
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