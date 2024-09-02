<?php

session_start();

if (isset($_SESSION['auth_id'])) {
    header("location: ../dashboard/home/home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <section>

        <div class=" bg-gradient-to-r from-red-100 to-blue-200  flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen">
            <p class="flex items-center mb-6 text-3xl font-semibold text-gray-500 dark:text-white">
                <img class="w-8 h-8 mr-2" src="../images/neptune.png" alt="logo">
                Portfolio Web
            <p class="text-center  lg:w-2/4 mb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptatum sed dolore, fuga quis expedita.Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptatum sed dolore, fuga quis expedita.</p>
            </p>

            <!-- register successful start  -->
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <!-- register successful start  -->
                    <?php
                    if (isset($_SESSION["register_success"])) {
                    ?>
                        <div role="alert" class="alert  mt-3 bg-green-300 text-white border-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg><span>
                                <?php echo $_SESSION["register_success"]; ?>
                            </span>
                        </div>

                    <?php }
                    unset($_SESSION["register_success"]); ?>

                    <!-- register register_success end  -->

                    <!-- login error start  -->
                    <?php
                    if (isset($_SESSION["login_error"])) {
                    ?>
                        <div role="alert" class="alert  mt-3 bg-red-400 text-white border-none">
                            <i class="fa-regular fa-circle-xmark text-2xl" style="color: #000000;"></i>
                            <span class="text-black text-base">
                                <?php echo $_SESSION["login_error"]; ?>
                            </span>
                        </div>

                    <?php }
                    unset($_SESSION["login_error"]); ?>

                    <!-- register error end  -->

                    <form class="space-y-4 md:space-y-6" action="login_post.php" method="post">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>

                            <input type="text" name="email" id="email" class=" border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  <?= (isset($_SESSION["email_error"])) ? "placeholder-red-600 border border-red-600" : ""; ?>" placeholder="name@company.com" value="<?= (isset($_SESSION["register_email"])) ? $_SESSION["register_email"] : "";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            unset($_SESSION["register_email"]); ?>">
                            <!-- email error start -->
                            <?php
                            if (isset($_SESSION["email_error"])) {
                            ?>
                                <p class="text-red-600 pt-2"><?php echo $_SESSION["email_error"]; ?></p>
                            <?php }
                            unset($_SESSION["email_error"]); ?>
                            <!-- email error end -->
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?= (isset($_SESSION["password_error"])) ? "placeholder-red-600 border border-red-600" : ""; ?>" value="<?= (isset($_SESSION["register_password"])) ? $_SESSION["register_password"] : "";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            unset($_SESSION["register_password"]); ?>">
                            <!-- password error start -->
                            <?php
                            if (isset($_SESSION["password_error"])) {
                            ?>
                                <p class="text-red-600 pt-2"><?php echo $_SESSION["password_error"]; ?></p>
                            <?php }
                            unset($_SESSION["password_error"]); ?>
                            <!-- password error end -->
                        </div>

                        <div>
                            <button name="submit_btn" class="btn btn-info text-yellow-50" type="submit">Submit</button>
                        </div>

                        <p class="text-base font-light text-gray-500 dark:text-gray-400">
                            Please enter your credentials to create an account.
                            Already have an account? <a href="./register.php" class="hover:underline hover:text-green-600 text-base font-semibold">Sign In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>