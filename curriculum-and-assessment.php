<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Jankipuram| Curriculum and Assessment</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Curriculum and Assessment
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Curriculum and Assessment
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <a href="curriculum-and-assessment.php"
                            class="ms-1 text-sm font-medium text-blue-main">Curriculum and Assessment</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="sm:flex gap-10  mt-2">
                <!-- <div class="sm:w-[50%] sm:block hidden">
                    <img src="assets/images/vission.png" alt="">
                </div> -->
                <div class="mx-3 pb-0 ">
                    <div>
                        <p class="text-[16px] text-gray-600 ">
                            Delhi Public School, Jankipuram is a well-established school which is affiliated to CBSE and
                            follows the curriculum of Central Board of Secondary Education, which aims at holistic
                            development of each and every child. Our school celebrates the uniqueness in each and every
                            child by exposing them to a host of activities, which are a perfect balance of pedagogical
                            and technological elements. Our curriculum enhances the innate abilities of each child by
                            providing them the congenial learning environment.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            The school inculcates scientific temper in all the learners through exploration, observation
                            and discovery.</p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            Experiential learning approach is adopted at all developmental stages and at various levels,
                            leading to conceptual learning coupled with an inquisitive and analytical mindset.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            The school focuses on nurturing global citizens who are abreast with the latest
                            technological advancements but are also rooted in a sound value system. School curriculum
                            exposes the students to a joyful learning environment which is a perfect blend of various
                            co- curricular activities.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            We provide specialized training for various sports and our students have won laurels at many
                            state and national events.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            Art is integrated with the teaching and learning at all levels of imparting education which
                            hones creative skills of the students.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            The school hosts a plethora of events providing every student an opportunity to showcase
                            their academic and creative skills by participating in Olympiads, Inter and Intra school
                            competitions. Our school offers all the major streams at the senior secondary level i.e -
                            Science,
                            Commerce and Humanities. The outstanding performance of the students in board exams and
                            various
                            competitive exams bears testimony to the strategic and result oriented approach adopted by
                            our school in academics.
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            A safe, secure and healthy environment is provided for the students with the help of a
                            well-trained and adept staff. The school also provides personalized counselling,
                            acceleration
                            classes, individual attention and believes in maintaining a strong parent connection.
                            The curriculum incorporates a sense of belongingness among the students and inspires them to
                            become the torch bearers and change makers leading to a brighter future.
                        </p>





                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
        $('.moreless-button').click(function () {
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