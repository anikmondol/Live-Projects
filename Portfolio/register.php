<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- daisyUI link and tailwind css link -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- google font custom font style -->
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>




</head>

<body>
    <!-- hero section start -->

    <div class="h-[100vh] flex items-center justify-center w-full bg-gradient-to-r from-[#544d63] to-[#a4d4dd]">
        <div class="hero-content flex-col md:flex-row-reverse lg:gap-10">
            <div class="text-center w-[90%] lg:text-left md:w-[50%]">
                <h1 class="text-3xl md:text-5xl font-bold">Login now!</h1>
                <p class="py-6">
                    Provident cupiditates voluptatems et in. Quaerat fugiat At assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
            <div class="card bg-orange-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form action="register_post.php" method="post" class="card-body">
                    <!-- name input -->
                    <div class="input input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input name="username" type="text" class="grow" placeholder="Username" />
                    </div>
                    <!-- name error start -->
                     <?php
                     if(isset($_SESSION["name_error"])){
                     ?>
                     <p class="text-red-600"><?php echo $_SESSION["name_error"]; ?></p>
                     <?php } unset($_SESSION["name_error"]);?>
                    <!-- name error end -->

                    <div class="input input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input name="email" type="text" class="grow" placeholder="Email" />
                    </div>
                    <div class="input input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="" class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                        </svg>
                        <input name="password" type="password" placeholder="Password" class=" grow" />
                    </div>
                    <div class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-circle-check"></i>
                        <input name="confirm_password" type="password" placeholder="Confirm Password" class="grow " />

                    </div>
                    <div>
                        <button type="submit" name="submit_btn" class="btn btn-info text-blue-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- hero section end -->




</body>

</html>