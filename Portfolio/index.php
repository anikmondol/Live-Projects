<?php

session_start();
include "./config/database.php";

$user_query = "SELECT * FROM users WHERE status='active'";
$user_connect = mysqli_query($connect_db, $user_query);
$user = mysqli_fetch_assoc($user_connect);

$link_query = "SELECT * FROM links";
$link_connect = mysqli_query($connect_db, $link_query);
$link = mysqli_fetch_assoc($link_connect);

$services_query = "SELECT * FROM services WHERE status='active'";
$services = mysqli_query($connect_db, $services_query);

$portfolios_query = "SELECT * FROM portfolios WHERE status='active'";
$portfolios = mysqli_query($connect_db, $portfolios_query);

$educations_query = "SELECT * FROM educations WHERE status='active'";
$educations = mysqli_query($connect_db, $educations_query);

$testimonials_query = "SELECT * FROM testimonials WHERE status='active'";
$testimonials = mysqli_query($connect_db, $testimonials_query);

$feedbacks_query = "SELECT * FROM feedbacks WHERE status='active'";
$feedbacks = mysqli_query($connect_db, $feedbacks_query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio_Front</title>
    <link rel="shortcut icon" href="./images/neptune.png" type="image/x-icon">

    <!-- font awesome 6.6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome 4.7 -->
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

    <!--   Swiper Js css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles/index.css">

</head>

<body>
    <header id="header" class="shadow-2xl transition-all duration-500 top-0 left-0 right-0 z-10">
        <nav class="xl:max-w-[1280px] mx-auto">
            <div class="flex flex-wrap items-center justify-between py-3 mx-auto xl:max-w-[1280px] px-4 lg:px-0">
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
                        <img class="w-12 h-12 rounded-full object-cover" <img src="./public/profile/<?= $user['image'] ?>" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 shadow-2xl bg-white"
                        id="user-dropdown" style="background-color: aliceblue !important;">
                        <div class="px-4 py-3 bg-white">
                            <span class="block text-sm text-gray-900 dark:text-white"><?= $user['name'] ?></span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?= $user['email'] ?></span>
                        </div>
                        <ul class="py-2 bg-white" aria-labelledby="user-menu-button">
                            <li class="hidden md:flex lg:hidden">
                                <a href="./authetication/login.php"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li class="hidden md:flex lg:hidden">
                                <a href="#contact"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Contact</a>
                            </li>

                        </ul>
                        <div class="flex gap-2 px-3 pb-2">
                            <a href="<?= $link['facebook'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-gray-600 rounded-full px-[10px] py-[5px] text-center duration-500">
                                    <i class="fa-brands fa-facebook text-sm"></i>
                                </button>
                            </a>
                            <a href="<?= $link['github'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-gray-600 rounded-full px-[10px] py-[5px] text-center duration-500">
                                    <i class="fa-brands fa-github text-sm"></i>
                                </button>
                            </a>
                            <a href="<?= $link['linkedin'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-gray-600 rounded-full px-[10px] py-[5px] text-center duration-500">
                                    <i class="fa-brands fa-linkedin text-sm"></i>
                                </button>
                            </a>
                            <a href="<?= $link['whatsapp'] ?>" target="_blank">
                                <button type="button"
                                    class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-gray-600 rounded-full px-[10px] py-[5px] text-center duration-500">
                                    <i class="fa-brands fa-whatsapp text-sm"></i>
                                </button>
                            </a>
                        </div>
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
                            <a href="#hero"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] duration-500 font-bold"
                                aria-current="page">About</a>
                        </li>
                        <li>
                            <a href="#skills"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Skills</a>
                        </li>
                        <li>
                            <a href="#services"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Portfolio</a>
                        </li>
                        <li class="flex md:hidden lg:flex">
                            <a href="#contact"
                                class="block py-2 px-3 text-white  rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                aria-current="page">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['auth_id'])) : ?>
                            <li class="flex md:hidden lg:flex">
                                <a href="./authetication/login.php"
                                    class="block py-2 px-3 text-white   rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                    aria-current="page">Dashboard</a>
                            </li>
                        <?php else: ?>
                            <li class="flex md:hidden lg:flex">
                                <a href="./authetication/login.php"
                                    class="block py-2 px-3 text-white   rounded md:bg-transparent md:p-0 hover:text-[#8CC090] font-bold duration-500"
                                    aria-current="page">Login/Register</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- hero section -->
        <section id="hero" class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row-reverse gap-10 md:gap-0 justify-between ">
                <div class="lg:w-5/12 relative flex justify-center items-center">
                    <div class="sipner-img mx-auto">
                        <img class="" src="./front_assets/shape/dot_circle.png" alt="">
                    </div>
                    <div class="absolute pt-3 md:pt-0 lg:-top-24 object-cover banner-man-image">
                        <img src="./front_assets/banner/banner_img8.webp" />
                    </div>
                </div>
                <div class="lg:w-7/12 space-y-5 mt-4 md:mt-0">
                    <h4 class="text-xl lg:text-3xl font-bold text-[#8CC090] mt-3 md:mt-0" style="font-style: italic;">
                        Hello!</h4>
                    <?php if (isset($user['name'])) : ?>
                        <h2 class="text-4xl lg:text-6xl font-semibold lg:font-black text-gray-200 my-2"
                            style="font-style: italic;">I am <?= $user['name'] ?></h2>
                    <?php else: ?>
                        <h2 class="text-4xl lg:text-6xl font-semibold lg:font-black text-gray-200 my-2"
                            style="font-style: italic;">I am Anik Mondal</h2>
                    <?php endif; ?>

                    <p class="text-gray-400 font-medium mb-3">
                        I'm <?= (isset($user['name'])) ? $user['name'] : 'Anik Mondal' ?>,
                        a professional web developer with long time experience in this field​. Committed to advancing my knowledge in the IT field, always eager to explore and adopt new technologies for web development. Dedicated to continuous learning and staying current with industry trends.
                    </p>
                    <div class="my-8 flex gap-4">
                        <a href="<?= $link['facebook'] ?>" target="_blank">
                            <button type="button"
                                class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-3 text-center duration-500">
                                <i class="fa-brands fa-facebook text-sm"></i>
                            </button>
                        </a>
                        <a href="<?= $link['github'] ?>" target="_blank">
                            <button type="button"
                                class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-3 text-center duration-500">
                                <i class="fa-brands fa-github text-2xl"></i>
                            </button>
                        </a>
                        <a href="<?= $link['linkedin'] ?>" target="_blank">
                            <button type="button"
                                class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-3 text-center duration-500">
                                <i class="fa-brands fa-linkedin text-2xl"></i>
                            </button>
                        </a>
                        <a href="<?= $link['whatsapp'] ?>" target="_blank">
                            <button type="button"
                                class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-3 text-center duration-500">
                                <i class="fa-brands fa-whatsapp text-2xl"></i>
                            </button>
                        </a>
                    </div>
                    <div>
                        <button
                            class="btn text-base text-gray-500 hover:text-red-500 border-2 duration-1000 hover:border-cyan-400 hover:shadow-xl"> Download CV</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section-->
        <section id="about" class="xl:max-w-[1280px] mx-auto py-20 lg:pt-32  px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row-reverse gap-16 md:gap-5 justify-between ">
                <div class="lg:w-7/12 space-y-4 mt-4 md:mt-0">
                    <h4 class="text-base lg:text-xl font-bold text-[#8CC090]" style="font-style: italic;">Introduction
                    </h4>
                    <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1"
                        style="font-style: italic;">About Me</h3>
                    <p class=" text-gray-400 font-medium mb-3">
                        Hi, my name is Anik Mondal. I am a Jr. PHP & Laravel Developer . But I mostly work in frontend development I have more than 1 year experience in web design and web development.I have skills in HTML5, CSS3, bootstrap, tailwind css, javaScript, Es6, PHP, Laravel, Mysqul etc.
                    </p>
                    <div class="hidden md:flex flex-col">
                        <h5 class="text-[18px] font-black text-yellow-50">Education :</h5>
                        <?php
                        foreach ($educations as $education) :
                        ?>
                            <div class="flex items-center gap-3 md:justify-start md:flex-row md:items-center md:gap-5 space-y-2">
                                <div class="w-[100px] flex gap-5 justify-between items-center">
                                    <h4 class="text-xl font-bold text-yellow-50"><?= $education['year']; ?></h4>
                                    <div class="w-16 md:w-10 text-white">
                                        <hr>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-gray-300 font-medium pr-2 text-xl"><?= $education['title']; ?></p>
                                        <p class="text-white"><?= $education['ration']; ?> %</p>
                                    </div>
                                    <div class="w-[190px] md:w-[500px]">
                                        <progress class="progress progress-success  h-1" value="<?= $education['ration']; ?>" max="100"></progress>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="lg:w-5/12 relative md:pt-10 lg:pt-0 md:flex md:justify-center items-center">
                    <div class="sipner-img mx-auto hidden md:flex">
                        <img class="" src="./front_assets/shape/dot_circle.png" alt="">
                    </div>
                    <div class="about-man-image object-cover pb-10- md:absolute mx-auto">
                        <img src="./front_assets/banner/banner_img4.webp" />
                    </div>
                </div>
            </div>
        </section>

        <!-- skill -->
        <section id="skills" class="xl:max-w-[1280px] mx-auto py-20 lg:py-24 px-4 lg:px-0 text-white">
            <h4 class="text-base lg:text-xl font-bold text-[#8CC090] text-center pb-8" style="font-style: italic;">MY SKILLS
            </h4>
            <div class="flex flex-col md:flex-row gap-[4%] items-center">
                <div class="w-full space-y-5 pt-10 md:pt-0 lg:w-[48%]">
                    <h3 class="text-center">Technical Skills</h3>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Laravel</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">70%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">PHP</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">MySQL</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">55%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 55%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">REACT JS</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">68%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 68%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">JavaScript</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">71%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 71%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Tailwind CSS</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">80%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">CSS</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">83%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 83%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">HTML</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                </div>
                <div class="w-full space-y-5 pt-10 md:pt-0 lg:w-[48%]">
                    <h3 class="text-center">Soft Skills</h3>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Communication</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Problem-Solving</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">67%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 67%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Teamwork & Collaboration</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">78%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 68%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Time Management</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">69%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 69%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Adaptability</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">79%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 79%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Leadership</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Negotiation</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">62%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-base font-semibold">Continuous Learning</span>
                            <span class="text-sm font-medium text-[#FEC544] dark:text-white">75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                            <div class="bg-[#FEC544] h-1 rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- services -->
        <section id="services" class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <h4 class="text-base lg:text-xl font-bold text-[#8CC090] text-center" style="font-style: italic;">WHAT WE DO
            </h4>
            <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1 text-center"
                style="font-style: italic;">Services and Solutions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 gap-8">
                <?php
                foreach ($services as $service) :
                ?>
                    <div
                        class="flex flex-col md:flex-row gap-3 shadow-2xl bg-[#1a2539] p-5 md:gap-6 service-card rounded-lg">
                        <div class="text-[45px] text-[#8CC090] service-shape">
                            <i class="<?= $service['icon']; ?>"></i>
                        </div>
                        <div>
                            <h5 class="text-[18px] font-black text-yellow-50"> <?= $service['title']; ?></h5>
                            <p class="text-gray-400 font-medium pr-2"><?= $service['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- portfolio -->
        <section id="portfolio" class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <h4 class="text-base lg:text-xl font-bold text-[#8CC090] text-center" style="font-style: italic;">Portfolio
                Showcase
            </h4>
            <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1 text-center"
                style="font-style: italic;">My Recent Best Works</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10 gap-6">

                <?php
                foreach ($portfolios as $portfolio) :
                ?>
                    <div class="relative overflow-hidden group">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-[rgba(20,20,20,0.5)] flex items-end text-white opacity-0 transition-all duration-700 ease-in-out group-hover:opacity-100">
                            <div
                                class="-translate-y-5 transition-all duration-700 ease-in-out mb-12 ml-12 md:ml-6 group-hover:translate-y-0">
                                <h4 class="text-[#8CC090] text-base font-bold"><?= $portfolio['title'] ?></h4>
                                <h2 class="text-yellow-100 text-2xl lg:text-3xl font-semibold"><?= $portfolio['subtitle'] ?></h2>
                                <div
                                    class="flex items-center gap-3 text-[#cdea0fa3] text-base font-bold hover:text-cyan-400 hover:text-[18px] duration-700">
                                    <a href="./dashboard/portfolios/single_portfolio.php?id=<?= $portfolio['id'] ?>" class="flex items-center gap-2">More Information<i class="fa-solid fa-arrow-right-long hover-right-icon text-2xl"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img class="rounded-lg  mx-auto h-[400px] lg:h-[620px] object-cover" src="./public/portfolio/<?= $portfolio['image']; ?>" alt="img">
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
        <!-- client -->
        <section id="client" class="shadow-2xl bg-[#1a2435] ">
            <div class="pt-10">
                <h4 class="text-base lg:text-xl font-bold text-[#8CC090] text-center" style="font-style: italic;">WHAT WE DO
                </h4>
                <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1 text-center"
                    style="font-style: italic;">Services and Solutions</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-between gap-5 xl:max-w-[1280px] mx-auto py-20 lg:pb-28 px-4 lg:px-0">

                <?php
                foreach ($feedbacks as $feedback) :
                ?>
                    <div class="text-center p-6 rounded-xl achievement-shape">
                        <div class="text-5xl text-[#8CC090] achievement-icon">
                            <i class="<?= $feedback['icon']; ?>"></i>
                        </div>
                        <h2 class="text-4xl text-yellow-100 font-semibold py-2"><?= $feedback['description']; ?></h2>
                        <p class="text-[#8B98AF] font-medium"><?= $feedback['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- testimonialSwiper -->
        <section id="testimonial" class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <div>
                <h4 class="text-sm md:text-xl font-bold text-[#8CC090] text-center uppercase"
                    style="font-style: italic;">testimonial
                </h4>
                <h3 class="text-xl md:text-4xl font-semibold lg:font-black text-yellow-50 my-1 text-center uppercase"
                    style="font-style: italic;">happy customer quotes</h3>
                <div class="mt-4">
                    <!-- Swiper -->
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($testimonials as $testimonial) :
                            ?>

                                <div class="swiper-slide">
                                    <div class="card w-11/12 md:w-5/6 mx-auto">
                                        <figure class="px-10 pt-10">
                                            <img src="./public/testimonials/<?= $testimonial['image'] ?>" alt="Shoes"
                                                class="rounded-full w-20 h-20 object-cover" />
                                        </figure>
                                        <div class="card-body items-center text-center">
                                            <h4 class="text-base md:text-xl font-normal md:font-medium text-[#D8D8DA]">
                                                <span class="text-[#8CC090] italic text-sm md:text-xl">" </span><?= $testimonial['description'] ?>
                                                <span class="text-[#8CC090] italic text-xl">"</span>
                                            </h4>
                                            <h3 class="text-yellow-50 text-xl font-bold uppercase mt-10"><?= $testimonial['title'] ?></h3>
                                            <h5 class="text-[#8CC090] text-base font-medium uppercase"><?= $testimonial['subtitle'] ?></h5>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next hover:bg-red-300 duration-700 service-nav"></div>
                        <div class="swiper-button-prev hover:bg-red-300 duration-700 service-nav"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
        <section id="contact" class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row justify-between gap-10">
                <div class="w-full lg:w-6/12">
                    <h4 class="text-sm md:text-base font-bold text-[#8CC090] uppercase" style="font-style: italic;">
                        information
                    </h4>
                    <h3 class="text-xl md:text-3xl font-semibold lg:font-black text-yellow-50 my-1 uppercase"
                        style="font-style: italic;">Contact Information</h3>
                    <p class="text-gray-400 font-medium py-8">I am a PHP & Laravel Developer with a strong focus on clean coding. Software Development seeks to attract, inspire, create desires, and motivate people to respond to messages, with the aim of making a favorable impact.</p>
                    <h4 class="text-sm md:text-base font-bold text-white uppercase pb-4" style="font-style: italic;">
                        OFFICE IN <span class="text-sm md:text-base font-bold text-[#8CC090] uppercase">Dhaka</span>
                    </h4>
                    <div class="space-y-1">
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-location-dot pr-2 text-[#8CC090]"></i> <b class="uppercase text-sm">Address :</b> <span>Nawabganj, Dhaka, Bangladesh</span> </h4>
                        </div>
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-phone pr-2 text-[#8CC090]"></i>
                                <b class="uppercase text-sm">Phone :</b> <span>+880 193-165-4590</span>
                            </h4>
                        </div>
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-envelope pr-2 text-[#8CC090]"></i> <b class="uppercase text-sm">e-mail
                                    :</b> <span>anikmondol558363@gmail.com</span> </h4>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-6/12">
                    <form action="./dashboard/email/action.php" method="post">
                        <div class="pb-6">
                            <input name="name" type="text" placeholder="Your Name *"
                                class="w-full py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]" />
                        </div>
                        <div class="pb-6">
                            <input name="email" type="email" placeholder="Your Email *"
                                class="w-full py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]" />
                        </div>
                        <div class="pb-6">
                            <textarea name="body" id="" placeholder="Your Message *"
                                class="w-full h-[170px] py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]"></textarea>
                        </div>
                        <div>
                            <button name="email_sender" class="py-2 font-medium px-8 border-[1px] text-yellow-50 hover:bg-slate-500 duration-1000 hover:border-slate-500"> Send </button>
                        </div>
                    </form>
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