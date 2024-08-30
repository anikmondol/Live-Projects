<?php

session_start();
include "./config/database.php";



// if (isset($_SESSION['auth_id'])) {
//     $id = $_SESSION['auth_id'];

    
// }

$user_query = "SELECT * FROM users ";
    $user_connect = mysqli_query($connect_db, $user_query);
    $user = mysqli_fetch_assoc($user_connect);

    $link_query = "SELECT * FROM links";
    $link_connect = mysqli_query($connect_db, $link_query);
    $link = mysqli_fetch_assoc($link_connect);

    $services_query = "SELECT * FROM services WHERE status='active'";
    $services = mysqli_query($connect_db, $services_query);

    $services_query = "SELECT * FROM portfolios WHERE status='active'";
    $portfolios = mysqli_query($connect_db, $services_query);



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


    <!-- flowbite css link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" /> -->


    <!-- flowbite js link -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles/index.css">

    <!--   Swiper Js css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body>
    <header id="header" class="shadow-2xl transition-all duration-500 top-0 left-0 right-0 z-10">
        <nav class="xl:max-w-[1280px] mx-auto">
            <div class="flex flex-wrap items-center justify-between py-4 mx-auto xl:max-w-[1280px] px-4 lg:px-0">
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
                        <img class="w-10 h-10 rounded-full" src="front_assets/blog/comment_avatar01.jpg"
                            alt="user photo">
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
                    <div class="absolute banner-man-image">
                        <img src="./front_assets/banner/banner_img.png" />
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
                        professional web developer with long time experience in this
                        field​. With a strong foundation in HTML, CSS, and JavaScript
                    </p>
                    <div class="my-8 flex gap-4">
                        <a href="<?= $link['facebook'] ?>" target="_blank">
                            <button type="button"
                                class="text-cyan-400 border-2 border-[#8CC090] hover:border-red-500 hover:text-white rounded-full px-4 py-3 text-center duration-500">
                                <i class="fa-brands fa-facebook text-2xl"></i>
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
                            class="btn text-base text-gray-500 hover:text-red-400 border-2 duration-1000 hover:border-cyan-400 hover:shadow-xl">SEE
                            PORTFOLIO </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section-->
        <section id="about" class="xl:max-w-[1280px] mx-auto py-20 lg:py-36 px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row-reverse gap-10 md:gap-0 justify-between ">
                <div class="lg:w-7/12 space-y-4 mt-4 md:mt-0">
                    <h4 class="text-base lg:text-xl font-bold text-[#8CC090]" style="font-style: italic;">Introduction
                    </h4>
                    <h3 class="text-2xl lg:text-4xl font-semibold lg:font-black text-yellow-50 my-1"
                        style="font-style: italic;">About Me</h3>
                    <p class=" text-gray-400 font-medium mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deseru
                        quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores
                        maxime blanditiis culpa vitae velit. Numquam!
                    </p>
                    <h5 class="text-[18px] font-black text-yellow-50">Education :</h5>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-5 space-y-2">
                        <h4 class="text-xl font-bold text-yellow-50">2020</h4>
                        <div class="w-10">
                            <hr>
                        </div>
                        <div>
                            <p class="text-gray-300 font-medium pr-2">PHD of Interaction Design & Animation</p>
                            <progress class="progress progress-success w-56" value="70" max="100"></progress>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-5 space-y-2">
                        <h4 class="text-xl font-bold text-yellow-50">2020</h4>
                        <div class="w-10">
                            <hr>
                        </div>
                        <div>
                            <p class="text-gray-300 font-medium pr-2">Master of Database Administration</p>
                            <progress class="progress progress-success w-56" value="80" max="100"></progress>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-5 space-y-2">
                        <h4 class="text-xl font-bold text-yellow-50">2020</h4>
                        <div class="w-10">
                            <hr>
                        </div>
                        <div>
                            <p class="text-gray-300 font-medium pr-2">Bachelor of Computer Engineering</p>
                            <progress class="progress progress-success w-56" value="50" max="100"></progress>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-5 space-y-2">
                        <h4 class="text-xl font-bold text-yellow-50">2010</h4>
                        <div class="w-10">
                            <hr>
                        </div>
                        <div>
                            <p class="text-gray-300 font-medium pr-2">Diploma of Computer</p>
                            <progress class="progress progress-success w-56" value="100" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="lg:w-5/12 relative md:flex md:justify-center items-center">
                    <div class="sipner-img mx-auto hidden md:flex">
                        <img class="" src="./front_assets/shape/dot_circle.png" alt="">
                    </div>
                    <div class="about-man-image md:absolute mx-auto">
                        <img src="./front_assets/banner/banner_img2.png" />
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
                            <h4 class="text-[#8CC090] text-base font-bold"><?= $portfolio['subtitle'] ?></h4>
                            <h2 class="text-yellow-100 text-2xl lg:text-3xl font-semibold"><?= $portfolio['subtitle'] ?></h2>
                            <div
                                class="flex items-center gap-3 text-[#8CC090] text-base font-bold hover:text-cyan-400 hover:text-[18px] duration-700">
                                <a href="./dashboard/portfolios/single_portfolio.php?id=<?= $portfolio['id'] ?>" class="flex items-center gap-2"><?= $portfolio['title'] ?><i class="fa-solid fa-arrow-right-long hover-right-icon text-2xl"></i></a>
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 justify-between gap-5 xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
                <div class="text-center p-6 rounded-xl achievement-shape">
                    <div class="text-5xl text-[#8CC090] achievement-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h2 class="text-4xl text-yellow-100 font-semibold py-2">245</h2>
                    <p class="text-[#8B98AF] font-medium">Feature Item</p>
                </div>
                <div class="text-center p-6 rounded-xl achievement-shape">
                    <div class="text-5xl text-[#8CC090] achievement-icon">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h2 class="text-4xl text-yellow-100 font-semibold py-2">345</h2>
                    <p class="text-[#8B98AF] font-medium">Active Products</p>
                </div>
                <div class="text-center p-6 rounded-xl achievement-shape">
                    <div class="text-5xl text-[#8CC090] achievement-icon">
                        <i class="fa-solid fa-medal"></i>
                    </div>
                    <h2 class="text-4xl text-yellow-100 font-semibold py-2">39</h2>
                    <p class="text-[#8B98AF] font-medium">Year Experience</p>
                </div>
                <div class="text-center p-6 rounded-xl achievement-shape">
                    <div class="text-5xl text-[#8CC090] achievement-icon">
                        <i class="fa-regular fa-face-smile-beam"></i>
                    </div>
                    <h2 class="text-4xl text-yellow-100 font-semibold py-2">3k</h2>
                    <p class="text-[#8B98AF] font-medium">Our Clients</p>
                </div>

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
                            <div class="swiper-slide">
                                <div class="card w-11/12 md:w-5/6 mx-auto">
                                    <figure class="px-10 pt-10">
                                        <img src="./front_assets/images/2.jpg" alt="Shoes"
                                            class="rounded-full w-20 h-20" />
                                    </figure>
                                    <div class="card-body items-center text-center">
                                        <h4 class="text-base md:text-2xl font-normal md:font-medium text-[#D8D8DA]">
                                            <span class="text-[#8CC090] italic text-sm md:text-2xl">"</span> An event is
                                            a message sent by an object to signal the occur rence of an action. The
                                            action can causd user interaction such as a button click, or it can result
                                            <span class="text-[#8CC090] italic text-2xl">"</span>
                                        </h4>
                                        <h3 class="text-yellow-50 text-xl font-bold uppercase mt-10">tony jackson</h3>
                                        <h5 class="text-[#8CC090] text-base font-medium uppercase">Head of idea</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card w-11/12 md:w-5/6 mx-auto">
                                    <figure class="px-10 pt-10">
                                        <img src="./front_assets/images/testi_avatar.png" alt="Shoes"
                                            class="rounded-full w-20 h-20" />
                                    </figure>
                                    <div class="card-body items-center text-center">
                                        <h4 class="text-base md:text-2xl font-normal md:font-medium text-[#D8D8DA]">
                                            <span class="text-[#8CC090] italic text-sm md:text-2xl">"</span> An event is
                                            a message sent by an object to signal the occur rence of an action. The
                                            action can causd user interaction such as a button click, or it can result
                                            <span class="text-[#8CC090] italic text-2xl">"</span>
                                        </h4>
                                        <h3 class="text-yellow-50 text-xl font-bold uppercase mt-10">tony jackson</h3>
                                        <h5 class="text-[#8CC090] text-base font-medium uppercase">Head of idea</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card w-11/12 md:w-5/6 mx-auto">
                                    <figure class="px-10 pt-10">
                                        <img src="./front_assets/images/testi_avatar.png" alt="Shoes"
                                            class="rounded-full w-20 h-20" />
                                    </figure>
                                    <div class="card-body items-center text-center">
                                        <h4 class="text-base md:text-2xl font-normal md:font-medium text-[#D8D8DA]">
                                            <span class="text-[#8CC090] italic text-sm md:text-2xl">"</span> An event is
                                            a message sent by an object to signal the occur rence of an action. The
                                            action can causd user interaction such as a button click, or it can result
                                            <span class="text-[#8CC090] italic text-2xl">"</span>
                                        </h4>
                                        <h3 class="text-yellow-50 text-xl font-bold uppercase mt-10">tony jackson</h3>
                                        <h5 class="text-[#8CC090] text-base font-medium uppercase">Head of idea</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card w-11/12 md:w-5/6 mx-auto">
                                    <figure class="px-10 pt-10">
                                        <img src="./front_assets/images/testi_avatar.png" alt="Shoes"
                                            class="rounded-full w-20 h-20" />
                                    </figure>
                                    <div class="card-body items-center text-center">
                                        <h4 class="text-base md:text-2xl font-normal md:font-medium text-[#D8D8DA]">
                                            <span class="text-[#8CC090] italic text-sm md:text-2xl">"</span> An event is
                                            a message sent by an object to signal the occur rence of an action. The
                                            action can causd user interaction such as a button click, or it can result
                                            <span class="text-[#8CC090] italic text-2xl">"</span>
                                        </h4>
                                        <h3 class="text-yellow-50 text-xl font-bold uppercase mt-10">tony jackson</h3>
                                        <h5 class="text-[#8CC090] text-base font-medium uppercase">Head of idea</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next service-nav"></div>
                        <div class="swiper-button-prev service-nav"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sponsorship -->
        <section id="sponsorship" class="hidden lg:flex shadow-2xl py-16 bg-[#1a2435] p-4">
            <!-- Swiper -->
            <div class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img01.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img02.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img03.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img04.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img05.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="md:bg-red-100 p-4 rounded">
                                <img src="./front_assets/brand/brand_img04.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact -->
        <section id="contact"  class="xl:max-w-[1280px] mx-auto py-20 lg:py-28 px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row justify-between gap-10">
                <div class="w-full lg:w-6/12">
                    <h4 class="text-sm md:text-base font-bold text-[#8CC090] uppercase" style="font-style: italic;">
                        information
                    </h4>
                    <h3 class="text-xl md:text-3xl font-semibold lg:font-black text-yellow-50 my-1 uppercase"
                        style="font-style: italic;">Contact Information</h3>
                    <p class="text-gray-400 font-medium py-8">Event definition is - somthing that happens occurre How
                        evesnt
                        sentence. Synonym when an unknown printer took a galley.</p>
                    <h4 class="text-sm md:text-base font-bold text-white uppercase pb-4" style="font-style: italic;">
                        OFFICE IN <span class="text-sm md:text-base font-bold text-[#8CC090] uppercase">New York</span>
                    </h4>
                    <div class="space-y-1">
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-location-dot pr-2 text-[#8CC090]"></i> <b class="uppercase text-sm">Address :</b> <span>Event Center park WT 22 New York</span> </h4>
                        </div>
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-phone pr-2 text-[#8CC090]"></i>
                                <b class="uppercase text-sm">Phone :</b> <span>+9 125 645 8654</span>
                            </h4>
                        </div>
                        <div class="flex gap-2 md:gap-3">
                            <h4 class="text-gray-400 md:font-medium"><i
                                    class="fa-solid fa-envelope pr-2 text-[#8CC090]"></i> <b class="uppercase text-sm">e-mail
                                    :</b> <span>info@exemple.com</span> </h4>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-6/12">
                    <form>
                        <div class="pb-6">
                            <input type="text" placeholder="Your Name *"
                                class="w-full py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]" />
                        </div>
                        <div class="pb-6">
                            <input type="email" placeholder="Your Email *"
                                class="w-full py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]" />
                        </div>
                        <div class="pb-6">
                            <textarea name="" id="" placeholder="Your Message *"
                                class="w-full h-[170px] py-5 pl-8 bg-[#19273E] text-[#9da5b3] outline-none text-[18px]"></textarea>
                        </div>
                        <div>
                            <button class="py-2 font-medium px-8 border-[1px] text-yellow-50 hover:bg-slate-500 duration-1000 hover:border-slate-500"> Send </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer-center bg-[#162239] text-gray-200 p-10 shadow-2xl">
        <p>Copyright &copy; <span id="year"></span> - All right reserved by Portfolio</p>
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