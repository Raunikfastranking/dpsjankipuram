<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $careerguidance_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $careerguidance_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $careerguidance_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="career-guidence-program" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class=" mt-8 mb-10">
                 <?= $careerguidance_data['data']['sections'][1]['content'] ?? "" ?>
               
                <!-- <div >

                    <p class="leading-6 text-gray-600">
                        <strong>"Empowering Students for a Brighter Future"</strong><br>
                        At DPS, Jankipuram, we believe in bringing out the best potential of every student. Our goal is
                        to provide comprehensive career counselling that helps students discover their passion. We guide
                        them to align their interests with suitable career paths and make informed decisions about their
                        future.
                    </p>
             
                 <h2 class="text-[20px] text-gray-600 font-[700] mt-5">Our Mission</h2>
                <p class="mt-2 leading-6 text-gray-600">
                    Our goal is to prepare students with the expertise, abilities, and assurance needed to handle the
                    challenges of their chosen careers. By providing access to counselling resources, we enable students
                    to take control of their educational and professional paths.
                </p>
         
   
               
        

            <div >
                <h2 class="text-[20px] text-gray-600 font-[700] mt-5">Career Exploration</h2>
                <p class="mt-2 leading-6 text-gray-600">
                    We assist students in discovering various career paths that align with their strengths, interests,
                    and values.
                </p>
            </div>

            <div >
                <h2 class="text-[20px] text-gray-600 font-[700] mt-5">Learning Pathways</h2>
                <p class="mt-2 leading-6 text-gray-600">
                    Selecting the appropriate courses and subjects is crucial for reaching career objectives. Our
                    teachers and
                    advisors collaborate closely with students to:
                    <br> ● Choose courses that match their professional goals
                    <br> ● Comprehend the educational prerequisites for various career paths.
                    <br> ● Guide advanced studies, scholarships, and college applications.
                </p>
            </div>

            <div>
                <h2 class="text-[20px] text-gray-600 font-[700] mt-5">Skills Development</h2>
                <p class="mt-2 leading-6 text-gray-600">
                    The future is all about skills, and just academic knowledge of core subjects is not enough. We offer
                    workshops and training in:
                    <br> ● Communication Skills: To help students express themselves confidently.

                    <br> ● Problem-Solving Skills: To develop critical thinking abilities.
                    <br> ● Time Management: To teach students how to balance academic work with extracurricular
                    activities.

                </p>
            </div>

            <div>
                <h2 class="text-[20px] text-gray-600 font-[700] mt-5">Career Talks and Seminars</h2>
                <p class="mt-2 leading-6 text-gray-600">
                    We organise interactive sessions with industry professionals and experts to:
                    <br> ● Introduce students to real-world career experiences.

                    <br> ● Provide insights into emerging fields and industries.
                    <br> ● Offer practical tips on how to succeed in various careers.
                </p>
            </div>
        </div> -->

    </div>
      </div>
        </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>