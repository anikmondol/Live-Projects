<?php

session_start();

require "../../config/database.php";

if (!isset($_SESSION['auth_id'])) {
    header("location: ../../authetication/login.php");
}

$explode = explode('/', $_SERVER['PHP_SELF']);

$link = end($explode);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="avatar online placeholder ">
                    <div class="bg-cyan-200 text-neutral-content w-10 rounded-full ">
                        <span class="text-xl text-purple-500">
                            <?php
                            $string = ucfirst($_SESSION['auth_name']);
                            $firstTwoChars = substr($string, 0, 2);
                            echo $firstTwoChars;
                            ?>
                        </span>
                    </div>
                </div>
                <div class="pl-3">
                    <h2 class="text-xl font-medium">
                        <?= ucfirst($_SESSION['auth_name']); ?>
                    </h2>
                </div>
            </div>
            <div class="flex flex-col flex-auto gap-4 md:gap-5 mx-3">
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
                <div class="p-3 px-5 <?= ($link == '') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6  text-green-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">Home</h1>
                    </div>
                </div>
                <div class="p-3 px-5 <?= ($link == '') ? 'bg-slate-200 hover:bg-slate-200' : '' ?> hover:bg-green-200 rounded">
                    <div class="flex flex-row space-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6  text-green-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                        </svg>
                        <h1 class="font-normal text-gray-700 text-sm lg:text-xl">Scrives</h1>
                    </div>
                </div>


            </div>

        </nav>
        <!-- nav component end here -->

        <!-- main component start here -->
        <main class="md:w-4/6 lg:w-5/6">
            <div class="flex-auto">
                <div class="flex flex-col">