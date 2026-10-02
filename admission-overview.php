<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $admissionoverview_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $admissionoverview_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $admissionoverview_data['data']['meta_keywords'] ?? "" ?>">


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://dpsjankipuram.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Admission",
    "item": "https://dpsjankipuram.com/admission-overview"
  }]
}
</script>

</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($admissionoverview_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($admissionoverview_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
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
                        <a href="admission-overview" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($admissionoverview_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class=" mt-6 mb-10">
               <?= $admissionoverview_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <div class="">
                    <h3 class="text-[20px] font-[700] text-gray-600 ">ADMISSION PROCESS FOR PRE-PRIMARY</h3>
                    <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                        <li>● Registration is the first step. Prospectus given at the time of registration gives
                            complete information about the school system.</li>
                        <li>● Admission to Pre Nursery will be through informal interaction with the parents and the
                            child.</li>
                        <li>● Date and timing for interaction will be intimated.</li>
                        <li>● Nursery & Prep: There will be a written test conducted and an interaction of the parents
                            with the Principal.</li>
                        <li>● List of selected candidates will be displayed by the Administrative Office.</li>
                        <li>● On confirmation of admission, parents will be required to deposit a fee within the
                            stipulated time, failing which the admission shall stand cancelled.</li>
                    </ul>
                    <h3 class="text-[20px] font-[700] text-gray-600 mt-3 ">IMPORTANT DOCUMENTS TO BE ATTACHED AT THE
                        TIME OF REGISTRATION</h3>
                    <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                        <li>● Mark sheet of the previous Examination held (for Class I and above)</li>

                    </ul>
                </div> -->
            </div>

            <!-- <div>
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                    <li>● Self-attested photocopy of Birth Certificate of child issued by Municipal
                        Corporation/Competent Authority.</li>
                    <li>● Previous School’s ID Card.</li>
                    <li>● A Copy of self- attested Aadhar Card. (Not Mandatory)</li>
                    <li>● Two passport size photographs.</li>
                </ul>

                <h3 class="text-[20px] font-[700] text-gray-600 mt-3">ADMISSION PROCESS FOR CLASSES I - VIII</h3>
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                    <li>● Registration is the first step. Prospectus given at the time of registration gives complete
                        information about the school system.</li>
                    <li>● Admission to classes I and above is given based on the result of an admission test conducted
                        by the school.</li>
                    <li>● Date, Time and Syllabus for admission test may be collected from School Administrative Office
                        at the time of registration.</li>
                    <li>● Result of the Admission Test will be displayed at the School Administrative Office.</li>
                    <li>● Registration/Admission in a particular class depends on seats available.</li>
                </ul>

                <h3 class="text-[20px] font-[700] text-gray-600 mt-3">DOCUMENTS REQUIRED AT THE TIME OF ADMISSION</h3>
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                    <li>● Self- attested copy of Aadhar Card. (Not Mandatory)</li>
                    <li>● Filled up form and two passport size photographs.</li>
                    <li>● Self -attested copy of Birth Certificate.</li>
                    <li>● Original Birth Certificate for verification.</li>
                    <li>● Self -attested copy of Previous School’s Report Card.</li>
                    <li>● Original Transfer Certificate.</li>
                    <li>● Original Character Certificate.</li>
                    <li>● Certificate for disability if any.</li>
                    <li>● Medical Fitness Certificate from Chief Medical Officer/Registered Medical Practitioner.</li>
                    <li>● Self-attested Xerox copy of the Child's Immunization Card (Classes Pre Primary - I)</li>
                </ul>

                <h3 class="text-[20px] font-[700] text-gray-600 mt-3">ADMISSION PROCESS FOR CLASS XI</h3>
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                    <li>● Registration for admission to Class XI Science and Commerce stream begins by the end of March.</li>
                    <li>● Admission in Class XI is given on the basis of Written Admission Test and Personal Interview of the candidate with the Principal.</li>
                    <li>● Admission Test of Class XI is conducted either on the first or second week of April.</li>
                </ul>

                 <h3 class="text-[20px] font-[700] text-gray-600 mt-3">DOCUMENTS REQUIRED AT THE TIME OF ADMISSION</h3>
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">
                    <li>● Self- attested copy of Aadhar Card. (Not Mandatory)</li>
                    <li>● Filled up form and two passport size photographs.</li>
                    <li>● Self-attested copy of Class X Mark sheet and Pass Certificate.</li>
                    <li>● Original Transfer Certificate.</li>
                    <li>● Original Character Certificate.</li>
                    <li>● Certificate for disability if any.</li>
                    <li>● Medical Fitness Certificate from Chief Medical Officer/Registered Medical Practitioner.</li>
                </ul>
            </div> -->

        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
    $('.moreless-button').click(function() {
        const moreText = $(this).siblings('.moretext');

        $('.moretext').not(moreText).slideUp();
        $('.moreless-button').not(this).text('Read more');

        // Toggle the current one
        moreText.slideToggle();

        if ($(this).text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });

    var aboutCarousel = new Glide('.about-carousel', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 4
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel.mount();

    var aboutCarousel2 = new Glide('.about-carousel2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel2.mount();




    var glide03 = new Glide('.glide-03', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });

    glide03.mount();

    var latestNews2 = new Glide('.latestNews2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    latestNews2.mount();
    </script>
</body>

</html>