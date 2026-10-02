<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Jankipuram| Photo Gallery</title>
    <?php include "includes/head.php" ?>
</head>

<body>
    <style>
        .job-opening-bg {
            position: relative;
        }

        .job-opening-bg::before {
            content: "";
            height: 100%;
            position: absolute;
            opacity: .6;
            width: 100%;
            background: #112759;
        }
    </style>
    <?php include "includes/header.php" ?>

    <div class="main relative mb-[120px] ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
           <div class="bg-center flex items-center text-left h-[300px]  brud-image"
            >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left mb-5 sm:mb-8 hr-line relative leading-9 pl-4 ">
                    Photo Gallery 
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Photo 
                    <span class="sm:hidden"></span> Gallery
                </h1>
            </div>


        </div>

            <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="index.php" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="admission-enquiry.php" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Admission
                                Enquiry</a>
                        </div>
                    </li>
                </ol>
            </div>




           <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 mx-3 mt-5 mb-10">
            <!-- <div class="grid gap-2 grid-flow-row-dense xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 grid-cols-2">
                <a href="assets/images/gallery/GI1.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI1.jpg" />
                </a>
                <a href="assets/images/gallery/GI2.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI2.jpg" />
                </a>
                <a href="assets/images/gallery/GI3.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI3.jpg" />
                </a>
                <a href="assets/images/gallery/GI4.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI4.jpg" />
                </a>
                <a href="assets/images/gallery/GI5.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI5.jpg" />
                </a>
                <a href="assets/images/gallery/GI6.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI6.jpg" />
                </a>
                <a href="assets/images/gallery/GI7.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI7.jpg" />
                </a>
                <a href="assets/images/gallery/GI8.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI8.jpg" />
                </a>
                <a href="assets/images/gallery/GI9.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI9.jpg" />
                </a>
                <a href="assets/images/gallery/GI10.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI10.jpg" />
                </a>
                <a href="assets/images/gallery/GI11.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI11.jpg" />
                </a>
                <a href="assets/images/gallery/GI12.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI12.jpg" />
                </a>
                <a href="assets/images/gallery/GI13.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI13.jpg" />
                </a>
                <a href="assets/images/gallery/GI14.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI14.jpg" />
                </a>

                <a href="assets/images/gallery/GI15.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI15.jpg" />
                </a>
                <a href="assets/images/gallery/GI16.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI16.jpg" />
                </a>
                <a href="assets/images/gallery/GI16.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI16.jpg" />
                </a>

                <a href="assets/images/gallery/GI17.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI17.jpg" />
                </a>
                <a href="assets/images/gallery/GI19.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI19.jpg" />
                </a>
                <a href="assets/images/gallery/GI20.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI20.jpg" />
                </a>
                <a href="assets/images/gallery/GI21.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI21.jpg" />
                </a>
                <a href="assets/images/gallery/GI22.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI22.jpg" />
                </a>
                <a href="assets/images/gallery/GI23.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI23.jpg" />
                </a>
                <a href="assets/images/gallery/GI24.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI24.jpg" />
                </a>
                <a href="assets/images/gallery/GI25.jpg" data-fancybox="gallery">
                    <img alt="" class="w-[100%]" src="assets/images/gallery/GI25.jpg" />
                </a>
            </div> -->
            <p class="text-center font-bold">NOT PROVIDED</p>
        </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabPanels = document.querySelectorAll('.tab-panel');
            const indicator = document.getElementById('indicator');

            let activeTab = tabLinks[0];
            let activePanel = tabPanels[0];

            function changeTab(newTab) {
                // Hide all panels
                tabPanels.forEach(panel => panel.classList.add('hidden'));

                // Remove aria-selected and tabindex from all tabs
                tabLinks.forEach(tab => {
                    tab.setAttribute('aria-selected', 'false');
                    tab.setAttribute('tabindex', '-1');
                });

                // Show new tab's panel
                const targetPanel = document.getElementById(newTab.getAttribute('aria-controls'));
                targetPanel.classList.remove('hidden');
                targetPanel.setAttribute('aria-hidden', 'false');

                // Set aria-selected and tabindex on the new tab
                newTab.setAttribute('aria-selected', 'true');
                newTab.setAttribute('tabindex', '0');

                // Move indicator
                const offset = newTab.offsetLeft;
                const width = newTab.offsetWidth;
                indicator.style.left = `${offset}px`;
                indicator.style.width = `${width}px`;
            }

            function handleKeydown(event) {
                const keyCode = event.keyCode;
                let newTab;

                if (keyCode === 37) { // Left arrow
                    newTab = activeTab.previousElementSibling?.querySelector('.tab-link');
                } else if (keyCode === 39) { // Right arrow
                    newTab = activeTab.nextElementSibling?.querySelector('.tab-link');
                }

                if (newTab) {
                    changeTab(newTab);
                    activeTab = newTab;
                }
            }

            tabLinks.forEach(tabLink => {
                tabLink.addEventListener('click', (event) => {
                    event.preventDefault();
                    activeTab = event.target;
                    changeTab(activeTab);
                });
                tabLink.addEventListener('keydown', handleKeydown);
            });

            // Initialize the first tab as active
            changeTab(activeTab);
        });
    </script>

</body>

</html>