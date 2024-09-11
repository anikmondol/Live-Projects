<?php

session_start();

require "../../config/database.php";

if (!isset($_SESSION['auth_id'])) {
    header("location: ../../authetication/login.php");
}

$explode = explode('/', $_SERVER['PHP_SELF']);
$link = end($explode);

$id = $_SESSION['auth_id'];
$user_query = "SELECT * FROM users WHERE id='$id'";
$user_connect = mysqli_query($connect_db, $user_query);
$user = mysqli_fetch_assoc($user_connect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio_Dashboard</title>
    <link rel="shortcut icon" href="../../images/neptune.png" type="image/x-icon">


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

    <div class="flex flex-col md:flex-row">

        <!-- nav component start here -->
        <nav class="flex flex-col h-screen justify-between md:w-2/6 lg:w-1/6">
            <div class="py-2 px-5">
                <h2 class="flex justify-center md:justify-start items-center font-semibold text-gray-500 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="../../images/neptune.png" alt="logo">
                    Portfolio Web
                </h2>
            </div>
            <div class="py-2 px-5 mb-2 flex items-center ">
                <div class="avatar online">
                    <div class="w-12 rounded-full">
                        <?php if ($user['image'] == 'default.webp'): ?>
                            <img src="../../public/default/<?= $user['image'] ?>">
                        <?php else : ?>
                            <img src="../../public/profile/<?= $user['image'] ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="pl-3">
                    <?= $_SESSION['auth_name']; ?>
                </div>
            </div>
            <div class="flex flex-col flex-auto gap-4 md:gap-5 mx-3">
                <div class="p-3 px-5 hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-regular fa-eye font-normal"></i>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">
                            <a target="_blank" href="../../index.php">Web Site</a>
                        </h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'home.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-list"></i>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">
                            <a href="../../dashboard/home/home.php">Dashboard</a>
                        </h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == '') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <a href="../logout/logout.php">
                            <button class="font-normal text-gray-700 text-sm lg:text-xl">

                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Logout</button>
                        </a>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'profile.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../profile/profile.php">Setting</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'links.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-link"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../links/links.php">Links</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'services.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-briefcase-medical"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../services/services.php">Services</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'portfolio.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-address-book font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../portfolios/portfolio.php">Portfolios</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'educations.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../educations/educations.php">Educations</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'testimonials.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-users-viewfinder"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../testimonials/testimonials.php">Testimonials</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'feedbacks.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-message font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../feedbacks/feedbacks.php">Feedbacks</a></h1>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav component end here -->

        <!-- main component start here -->
        <main class="md:w-4/6 lg:w-5/6">
            <div class="flex-auto">
                <div class="flex flex-col">