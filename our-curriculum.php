<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourcurriculum_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourcurriculum_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourcurriculum_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px]">
            <div class="bg-center flex items-center text-center h-[300px] brud-image"
               >
                <div>
                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                       <?= strip_tags($ourcurriculum_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                        <?= strip_tags($ourcurriculum_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-curriculum" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"> <?= strip_tags($ourcurriculum_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                 <?= $ourcurriculum_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <div class="mt-10 relative">



                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Delhi Public School, Jankipuram is a well-established school which is affiliated to CBSE and
                        follows the curriculum of Central Board of Secondary Education, which aims at holistic
                        development of each and every child. Our school celebrates the uniqueness in each and every
                        child by exposing them to a host of activities, which are a perfect balance of pedagogical and
                        technological elements. Our curriculum enhances the innate abilities of each child by providing
                        them the congenial learning environment.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        The school inculcates scientific temper in all the learners through exploration, observation and
                        discovery.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">Experiential learning approach is adopted at
                        all developmental stages and at various levels, leading to conceptual learning coupled with an
                        inquisitive and analytical mindset.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school focuses on nurturing global
                        citizens who are abreast with the latest technological advancements but are also rooted in a
                        sound value system. School curriculum exposes the students to a joyful learning environment
                        which is a perfect blend of various co- curricular activities.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">We provide specialized training for various
                        sports and our students have won laurels at many state and national events.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">Art is integrated with the teaching and
                        learning at all levels of imparting education which hones creative skills of the students.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school hosts a plethora of events
                        providing every student an opportunity to showcase their academic and creative skills by
                        participating in Olympiads, Inter and Intra school competitions.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">Our school offers all the major streams at
                        the senior secondary level i.e - Science, Commerce and Humanities. The outstanding performance
                        of the students in board exams and various competitive exams bears testimony to the strategic
                        and result oriented approach adopted by our school in academics.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">A safe, secure and healthy environment is
                        provided for the students with the help of a well-trained and adept staff. The school also
                        provides personalized counselling, acceleration classes, individual attention and believes in
                        maintaining a strong parent connect.</p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The curriculum incorporates a sense of
                        belongingness among the students and inspires them to become the torch bearers and change makers
                        leading to a brighter future.</p>
                </div> -->

            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>