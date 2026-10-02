<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $faqs_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $faqs_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $faqs_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                  <?= strip_tags($faqs_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                  <?= strip_tags($faqs_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="faq" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($faqs_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

       <div class="mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
         <?= $faqs_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <div class="relative">
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">1. What grades does Delhi Public School, Jankipuram offer?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Delhi Public School, Jankipuram, Lucknow offers a whole education journey from
                    Playgroup to grade 12th.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">2. How do I enroll my child at Delhi Public School, Jankipuram?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: To enroll your child, please visit the Admission page or Contact us page for detailed information and guidelines. You can also apply online through our registration form.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">3. What are the school timings?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Delhi Public School, Jankipuram timings start from 9:00 A.M. to 4:00 P.M., Monday through Saturday.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">4. Which board is the school affiliated with?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Our school is affiliated with the Central Board of Secondary Education (CBSE), New Delhi, under the affiliation number 2131718.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">5. What is the student-teacher ratio at DPS Jankipuram?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: 30:1 is the pupil-teacher ratio (PTR) mandated by the Central Board of Secondary Education (CBSE). The meaning of this is that for every 30 students, there should be one teacher. As per the CBSE ratio, our teacher-section ratio is 20:1 and student-teacher ratio is ……</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">6. What extracurricular activities are available?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: We offer a wide range of extracurricular activities in our school, including sports academy, animation, coding academy and more.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">7. Does the school have boarding (residential) facilities?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: No, we do not provide residential facilities. Delhi Public School, Jankipuram, is a day school that gets over by 4:00 pm.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">8. Does the DPS Jankipuram offer lunch or cafeteria services?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, we provide our children with wholesome and delicious meals in our on-site cafeteria.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">9. How often will there be PTM’s?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Based on School Content.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">10. Are computer classes available at DPS Jankipuram?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans. Yes, computer classes are available at our school. We offer a comprehensive computer education program that includes coding like Coding Dojo. Also, these are supported by textbooks like……</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">11. Does Delhi Public School, Jankipuram provide medical facilities on campus?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, DPS Jankipuram offers on-campus medical facilities. The school has a well-equipped medical room staffed by qualified professionals to provide first aid and attend to basic health needs of students during school hours.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">12. Why Delhi Public School is so famous?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Delhi Public School (DPS) is renowned across India for its academic excellence, disciplined environment, and holistic approach to education. At DPS Jankipuram, this legacy continues with a strong emphasis on quality teaching, co-curricular enrichment, modern learning technologies, and value-based education. The school's commitment to nurturing well-rounded, future-ready individuals makes it a trusted and respected name among parents and students alike.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">13. Why choose Delhi Public School, Jankipuram, for my child’s education?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: DPS Jankipuram stands out by offering a balanced education that nurtures both academic excellence and holistic development. What truly sets us apart is our strong focus on beyond-the-curriculum learning, where students gain future-ready skills through programs in coding, animation, oluxi smart skills, and more. </p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">14. How does Delhi Public School, Jankipuram, ensure student safety and security?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Student safety is our top priority. Delhi Public School, Jankipuram, has 24/7 security and CCTV facilities available.</p>
               
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">15. Who is the founder of Delhi Public School Society?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Delhi Public School Society (DPSS), under the visionary leadership of Shri B.K. Chaturvedi (Chairman) and Shri V.K. Shunglu (Vice Chairman), is committed to delivering holistic and quality education to all members of society. This mission is deeply rooted in its guiding motto: "Service Before Self."</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">16. Who is the principal of DPS Jankipuram, Lucknow?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: The principal of Delhi Public School, Jankipuram, is Ms. Neeru Bhaskar. With extensive experience in educational leadership, she leads the school’s academic and administrative initiatives.</p>
                
                 <h2 class="text-[24px] font-[700] text-blue-main text-center mt-5">ADMISSION</h2>

                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">17. What is the fee structure of the school?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: The fee structure at DPS Jankipuram is thoughtfully designed to reflect the comprehensive educational experience we offer.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">18. Is there an admission fee or application fee?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, there is a Rs.30000/- for PG to 10th and Rs.35000/- for class 11 and 12th non-refundable application fee required at the time of submission. Visit our Admissions page for more details.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">19. What is the age criteria for admission?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Please visit our Admission Process page for details.</p>
               
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">20. Can I transfer my child mid-year?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: It depends on a case-by-case basis, based on seat availability and academic compatibility.</p>
               
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">21. What documents are required for admission?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: The required documents may vary depending on the class for which admission is sought. For detailed information, please visit our Admission Procedure page.</p>
               
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">22. Is there an entrance exam for admission?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, the school conducts an entrance exam for admission to Class Nursery to Class XI. Admission to Pre Nursery will be through informal interaction with the parents and the child. </p>
                 <h2 class="text-[24px] font-[700] text-blue-main text-center mt-5">TRANSPORTATION</h2>
                
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">23. Does DPS Jankipuram offer transportation services?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, the school provides transportation services for students across Lucknow. To know the exact pick-up points, click here. </p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">24. Which areas are covered by the school bus service?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Our buses cover all the nearby areas. You can check our Bus Route page for more details.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">25. What are the school bus timings?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: School bus timings may vary based on location. Once your child is enrolled, you will receive a detailed transportation schedule with specific pick-up and drop-off timings tailored to your route.</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">26. Are the school buses safe and well-maintained?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes. Our buses are equipped with all the safety measures, including GPS, CCTV, and first-aid kits (or given by the school) and undergo regular safety inspections and maintenance checks. </p>

                 <h3 class="text-[20px] font-[700] text-gray-600 mt-5">27. Do the school buses have trained staff?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2">Ans: Yes, each bus is accompanied by a trained driver and a female bus attendant to ensure student safety and supervision. (Change based on school)</p>
                <h3 class="text-[20px] font-[700] text-gray-600 mt-5">28. Who do I contact for transportation-related queries or issues?</h3>
                <p class="sm:text-[16px] text-[16px] text-gray-600 font-[400] mt-2 mb-5">Ans: For any transportation-related queries or issues, you can reach out to our Transport Coordinator at [Phone Number] or email [Email Address].</p>
                
            </div> -->
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