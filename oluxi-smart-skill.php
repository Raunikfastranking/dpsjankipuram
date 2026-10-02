<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $oluxi_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $oluxi_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $oluxi_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($oluxi_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($oluxi_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="oluxi-smart-skill" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($oluxi_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                     <img src="<?= $oluxi_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="">
                </div>
                <div class="md:w-[60%]">
                    <div>
                          <?= $oluxi_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                        <!-- <p class=" leading-6">
                            The Transformational Journey into a Spirited Individual
                            The perennial vision of our school
                            group is to metamorphose its students into highly motivated individuals, with refined
                            personalities, adept at navigating the rigors of career competitiveness and who can also
                            efficiently address the complex challenges that life presents. In its commitment to
                            precision and
                            individualized growth, we have initiated the Oluxi Smart Skills program for Classes 1 to 8,
                            where
                            we meticulously craft transformative designs for the educational journey, ensuring that each
                            student's unique needs are not just met but elegantly tailored for their individual-optimal
                            personality development.
                            <br><br>
                            The program is aligned with NEP 2020, NCF, CBSE, ICSE and NCERT-endorsed life skills
                            programs, and also incorporates insights from WHO, UNICEF, UNESCO, and OECD reports.
                            Achievements stemming from the Oluxi Smart Skills program:
                        </p> -->
                    </div>
                </div>
            </div>
                   <?= $oluxi_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <div class="mb-10">
                <h2 class="text-[20px] text-blue-main font-[700] mt-5">Achievements stemming from the Oluxi Smart Skills
                    program</h2>
                <p class="mt-2 leading-6 px-3">
                    ● Cultivating effective communication and interpersonal proficiencies.<br>
                    ● Nurturing eloquence and proficiency in public speaking.<br>
                    ● Building a captivating and magnetic personality.
                    <br>
                    ● Instilling core values, discipline and a strong sense of punctuality<br>
                    ● Recognizing the merits of demonstrating respect and courtesy.
                    <br>
                    ● Fostering empathy and gratitude within the students.<br>
                    ● Cultivating emotional intelligence to recognize, understand, manage and effectively use your
                    own emotions.
                    <br>
                    ● Inculcating resilience and courage in the face of challenges and making children fit to
                    survive.<br>
                    ● Nurturing the ability to make thoughtful decisions and honing logical reasoning skills.<br>
                    ● Empowering the child to thrive and adapt successfully.<br>
                    ● Developing leadership acumen and collaborative teamwork, instilling within them the virtues of
                    guidance and cohesive synergy
                </p>
            </div> -->
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>