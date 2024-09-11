<?php

session_start();
include "../../config/database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $user_query = "SELECT * FROM users WHERE status='active'";
    $user_connect = mysqli_query($connect_db, $user_query);
    $user = mysqli_fetch_assoc($user_connect);


    $user_query = "SELECT * FROM users ";
    $user_connect = mysqli_query($connect_db, $user_query);
    $user = mysqli_fetch_assoc($user_connect);

    $port_query = "SELECT * FROM portfolios WHERE id='$id'";
    $portfolios = mysqli_query($connect_db, $port_query);
    $port = mysqli_fetch_assoc($portfolios);


    $link_query = "SELECT * FROM links";
    $link_connect = mysqli_query($connect_db, $link_query);
    $link = mysqli_fetch_assoc($link_connect);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio_Front</title>
    <link rel="shortcut icon" href="./neptune.png" type="image/x-icon">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- daisyUI link and tailwind css link -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <!-- flowbite js link -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <!-- custom css file link -->
    <link rel="stylesheet" href="../../styles/index.css">

    <!--   Swiper Js css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <header id="header" class="shadow-2xl transition-all duration-500 top-0 left-0 right-0 z-10">
        <nav class="">
            <div class="flex flex-wrap items-center justify-between py-3 mx-auto xl:max-w-[1280px] ">
                <a class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span
                        class="self-center text-xl md:text-[22px] font-bold whitespace-nowrap text-[#FFFFFF]">Portfolio</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-12 h-12 rounded-full object-cover" <img src="../../public/profile/<?= $user['image'] ?>" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 shadow-2xl bg-white"
                        id="user-dropdown" style="background-color: aliceblue !important;">
                        <div class="px-4 py-3 bg-white">
                            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-2 bg-white" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 text-white">
                        <li>
                            <a href="../../index.php"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#portfolio"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Portfolio</a>
                        </li>
                        <li class="flex md:hidden lg:flex">
                            <a href="#auther"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">auther</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <!-- portfolio -->
        <section id="portfolio" class="xl:max-w-[1280px] mx-auto py-5 lg:py-10 px-4 md:px-8 lg:px-0">

            <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1 text-center md:mb-28"
                style="font-style: italic;">Portfolio Single POST</h3>

            <div class="card">
                <div class="w-full">
                    <img
                        class="object-cover rounded-md w-full" src="../../public/portfolio/<?= $port['image']; ?>"
                        alt="Shoes" />
                </div>
                <div class="my-5 space-y-7">
                    <h2 class="text-[#FFFFFF] text-4xl font-semibold"><?= $port['title'] ?></h2>
                    <p class="text-[#8792AB] font-medium"> <?= $port['description'] ?></p>
                    <a href="<?= $port['live'] ?>" class="text-yellow-50 pt-2 underline font-medium text-xl hover:underline hover:text-green-300">Live links</a>
                </div>
            </div>
            <hr class="text-white">
            <section id="auther" class="xl:max-w-[1280px] mx-auto py-5 lg:py-16 px-4 md:px-8 lg:px-0">
                <div class="flex items-center gap-5 text-white">
                    <div class="avatar">
                        <div class="w-32 rounded-full">
                            <img src="../../public/profile/<?= $user['image'] ?>" alt="">
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-medium"><?= $user['name']; ?></h2>
                        <p class="text-[#8792AB] font-medium">I'm Anik, a professional web developer with long time experience in this field​. Committed to advancing my knowledge in the IT field, always eager to explore and adopt new technologies for web development. Dedicated to continuous learning and staying current with industry trends.
                        </p>
                        <div class="my-5 flex flex-row gap-2">
                            <a href="<?= $link['facebook'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-[10px] text-center duration-500">
                                    <i class="fa fa-facebook text-base"></i>
                                </button>
                            </a>
                            <a href="<?= $link['github'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-[10px] text-center duration-500">
                                    <i class="fa fa-github text-base"></i>
                                </button>
                            </a>
                            <a href="<?= $link['linkedin'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-[10px] text-center duration-500">
                                    <i class="fa fa-linkedin text-base"></i>
                                </button>
                            </a>
                            <a href="<?= $link['whatsapp'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-[10px] text-center duration-500">
                                    <i class="fa fa-whatsapp text-base"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

    </main>
    <footer class="footer-center bg-[#162239] text-gray-200 p-10 shadow-2xl">
        <p><small>© <span id="year"></span>. Develop by Anik Mondal. All right reserved.</small></p>
    </footer>

</body>

<!-- ======== Custom js Link ======== -->
<script src="./javascript/custom.js"></script>

<!-- ======== Swiper js Link ======== -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Set the year in the HTML
    document.getElementById('year').textContent = currentYear;


    // Get the navbar element
    const navbar = document.getElementById("header");

    // Get the offset position of the navbar
    const sticky = navbar.offsetTop + 200;

    // Add the sticky class to the navbar when you reach its scroll position
    // Remove the sticky class when you leave the scroll position
    function stickyNavbar() {
        console.log(window.pageYOffset);

        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
            navbar.classList.add("bg-blue-300");
        } else {
            navbar.classList.remove("sticky");
            navbar.classList.remove("bg-blue-300");
        }
    }

    // When the user scrolls the page, execute stickyNavbar
    window.onscroll = function() {
        stickyNavbar();
    };
</script>

</html>