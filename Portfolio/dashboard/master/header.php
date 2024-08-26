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
</head>

<body>


    <div class="flex flex-col md:flex-row">

        <!-- nav component start here -->
        <nav class="flex flex-col bg-gray-50 h-screen justify-between md:w-2/6 lg:w-1/6">
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
                    <i class="fa-solid fa-globe font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">
                            <a target="_blank" href="../../index.php">Web Site</a>
                        </h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'home.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="h-6 w-6  text-green-700">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                        </svg>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">
                            <a href="../../dashboard/home/home.php">Dashboard</a>
                        </h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == '') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <a href="../logout/logout.php">
                            <button class="font-normal text-gray-700 text-sm lg:text-xl"><i class="fa-solid fa-arrow-right-from-bracket h-6 w-6  text-green-700 font-light"> </i> Logout</button>
                        </a>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'profile.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-user-gear font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../profile/profile.php">Setting</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'links.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-link font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../links/links.php">Links</a></h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == 'services.php') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <i class="fa-solid fa-hand-holding-medical font-normal text-gray-500 text-sm lg:text-xl"></i>
                        <h1 class="font-normal text-green-7000 text-sm lg:text-xl"><a href="../services/services.php">Services</a></h1>
                    </div>
                </div>

            </div>

        </nav>
        <!-- nav component end here -->

        <!-- main component start here -->
        <main class="md:w-4/6 lg:w-5/6">
            <div class="flex-auto">
                <div class="flex flex-col">