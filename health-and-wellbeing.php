<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $health_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $health_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $health_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($health_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($health_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="health-and-wellbeing" class="ms-1 text-sm font-medium text-blue-main">  <?= strip_tags($health_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9">
                <div class="md:w-[40%]">
                    <img src="<?= $health_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="" class="w-[100%]">
                </div>
               <div class="md:w-[60%]">
                 <?= $health_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2"> Mental Health and Wellness at
                        DPS Jankipuram: A Holistic Approach
                        At Delhi Public School, Jankipuram, the mental health and emotional well-being of students are
                        regarded as foundational to the child’s academic and personal success. The school has instituted
                        a
                        comprehensive Mental Health and Wellness Program designed to nurture balanced, confident, and
                        emotionally resilient individuals.</p>


                    <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Empathetic Guidance for Every
                        Learner: To support students through their individual learning and
                        emotional journeys, regular one-on-one counselling sessions are offered to address issues such
                        as
                        anxiety, academic stress, social adjustment, and self-esteem with parent consent only. The
                        school
                        also provides personalized interventions for students with special needs, ensuring inclusive and
                        empathetic education.</p>
                    <p class="sm:text-[16px] text-[16px] text-gray-600 font-[700] mt-4">Building Life Skills, Shaping
                        Futures</p>
                    <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Group Sessions That Empower and
                        Educate: To instil lifelong values and coping strategies, the school
                        conducts regular group sessions and life skill workshops that focus on:</p>
                    <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2 sm:ml-5"
                        style="list-style:disc">
                        <li>Anti-Bullying Awareness</li>
                        <li>Anger Management</li>
                    </ul> -->
                </div> 
            </div>
                 
            <div >
                 <?= $health_data['data']['sections'][2]['content'] ?? "" ?>
<!--                 
                <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2 sm:ml-5" style="list-style:disc">
                 <li>Team Building and Cooperation</li>
                        <li>Perseverance and Resilience</li>
                        <li>Positive Affirmations and a Growth Mindset</li>
                        <li>Anti-Substance Abuse Education</li>
                        <li>Effective Communication and Conflict Resolution</li>
                    </ul>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">These sessions aim to equip students with the tools to manage emotions, make responsible decisions,
                    and develop positive social relationships, thereby enhancing overall school climate and student
                    well-being.</p>
                    <p class="sm:text-[16px] text-[16px] text-gray-600 font-[700] mt-4"> Partnering with Parents</p>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Workshops for Understanding and Nurturing Today’s Generation: Recognizing that mental wellness
                    begins at home, we conduct parenting workshops to strengthen the parent-child relationship. These
                    sessions explore:</p>
                    <ul  class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2 sm:ml-5" style="list-style:disc">
                    <li>Effective strategies for handling young minds</li>
                   <li> Insight into contemporary challenges faced by students</li>
                    <li>Enhancing communication between parents and children</li>
</ul>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Parents are guided on how to nurture empathy, discipline, and confidence in their children while
                    being mindful of their psychological development.</p>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[700] mt-4">Nurturing the Nurturers</p>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Teacher Wellness and Strengthening Student-Teacher Bonds: The school places equal emphasis on the
                    mental health of its educators. Regular teacher wellness sessions are conducted to support their
                    emotional balance, stress management, and self-care. Specialized sessions cover:</p>
                    <ul class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2 sm:ml-5" style="list-style:disc">
                   <li> Creating emotionally safe classroom environments</li>
                    <li>Understanding developmental stages and needs of students</li>
                    <li>Guiding younger children on good touch and bad touch</li>
                   <li> Instilling gratitude and empathy in primary learners</li>
                    <li>Fostering trust and respect between teachers and students</li>
</ul>
                    <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2"> These practices ensure that teachers are not only educators but also nurturing mentors who
                    positively impact student development.</p>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[700] mt-4">A Culture of Care and Connection</p>
                     <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Holistic Wellness Practices for a Thriving School Environment: The mental health and wellness
                    program at our campus is a testament to the school’s commitment to the all-round development of
                    every learner. By supporting students, empowering parents, and nurturing teachers, the school
                    creates a harmonious and growth-oriented environment—preparing children not just for exams, but for
                    life.</p> -->
            </div>

        </div>

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