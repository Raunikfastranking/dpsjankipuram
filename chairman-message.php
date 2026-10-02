<?php
include "includes/apis.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $chairmans_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $chairmans_data['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $chairmans_data['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($chairmans_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($chairmans_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Our School
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
                        <a href="chairman-message" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($chairmans_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div class="mt-8 mb-16 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto px-3 ">
            <!-- <div class="flex justify-center">
                <img src="https://res.cloudinary.com/dvzfuapyy/image/upload/v1730305735/Layer_1_fjuspj.png" alt="">
            </div> -->
            <div class="mt-10 relative">

                <div class="sm:flex gap-10">
                    <div class="sm:w-[50%]">
                          <?= $chairmans_data['data']['sections'][1]['columns'][0]['content'] ?? "" ?>
                        <!-- <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2">
                            We are living in a fast changing world. The pace of change is indeed so fast that almost
                            everything seems to be in transformation mode. Since education cannot exist in isolation,
                            the
                            system needs to take cognizance of these developments
                        </p>
                        <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2">
                            Education all over the world is undergoing a radical shift. Knowledge is no longer
                            constrained
                            by time and space. It has expanded beyond the classrooms and school campuses. Hence,
                            continuous mentoring, monitoring and evaluation of the learning environment need to be
                            done to provide required intellectual stimulation to the young minds. In today's world,
                            acquiring knowledge alone does not matter, application of the acquired knowledge is more
                            important. This is where excellence in present day education lies.

                        </p>
                        <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2">
                            Youth of today exhibits unparalleled genius. We have to prepare our students for a global
                            stage. Our pedagogical practices have to shift from teaching to learning. In emerging global
                            dynamics, educators have to play the role of change managers. While creating curriculum
                            designs, value orientation should remain in prime focus. Schools should aim at grooming the
                            students into ethical and dynamic leaders of tomorrow, whose thoughts and actions are
                            deeply embedded in the values and culture of our land.
                        </p> -->




                    </div>
                    <div class="sm:w-[50%] mt-4">
                        <img src="<?= $chairmans_data['data']['sections'][1]['columns'][1]['image_path'] ?? "" ?>" class="border-[1px] border-gray-100 sm:w-auto w-[100%]"
                            alt="Pro Vice Chairman Image">
                        <div class="mt-1">
                              <?= $chairmans_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                            <!-- <h2 class="font-[600]">Mr. Mukhtarul Amin</h2>
                            <span class="text-[14px] text-gray-600">(Pro-Vice Chairman)</span> -->
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                     <?= $chairmans_data['data']['sections'][2]['content'] ?? "" ?>
                    <!-- <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2">We hope to pass on not only great
                        scholars but also sensitive, compassionate and responsible young adults to the society.</p>
                </div>
            </div>
            <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2">
                As a premier educational institution, we are known for creating our own benchmarks and
                elevating ourselves to higher planes. This practice has made our group schools excellent
                centres of learning.
            </p>
            <p class="text-[16px] sm:text-left text-center text-gray-600 mt-2 font-bold">
                "However, learning, evolving and effort will never cease."
            </p> -->
        </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>