<?php

session_start();

require"./config/database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>

<body>
    <!-- hero section start -->
    

    <div class="h-[100vh] flex flex-col items-center justify-center w-full bg-gradient-to-r from-[#f8a5c2] to-[#a4d4dd]">
    <div>
    <div class="hero-content flex-col md:flex-row-reverse lg:gap-10">
            <div class="text-center  flex flex-col md:justify-start w-[90%] lg:text-left md:w-[50%]">

            
            <h2 class="flex justify-center md:justify-start  text-3xl font-semibold text-gray-500 dark:text-white">
                <img class="w-8 h-8 mr-2" src="./images/neptune.png" alt="logo">
                Portfolio Web</h2>
                
                
                <p class="text-center md:text-start text-[18px]">
                Please sign-in to your account and continue to the dashboard.
                Don't have an account? <a class="underline" href="./login.php">Sign Up</a>
                </p>
            </div>
            <div class="card bg-orange-100 w-full max-w-sm shrink-0 shadow-2xl py-1">
                <form action="register_post.php" method="post" class="card-body">
                    <h1 class="text-center text-2xl font-bold">Login Now</h1>
                    <!-- name input -->
                    <div class="input input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input name="username" type="text" class="grow" placeholder="Username"  value="<?= (isset($_SESSION["old_name"])) ?  $_SESSION["old_name"] : ""; unset($_SESSION["old_name"]); ?>" />
                    </div>
                    <!-- name error start -->
                    <?php
                    if (isset($_SESSION["name_error"])) {
                    ?>
                        <p class="text-red-600"><?php echo $_SESSION["name_error"]; ?></p>
                    <?php }
                    unset($_SESSION["name_error"]); ?>
                    <!-- name error end -->




                    <div class="input input-bordered flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input name="email" type="text" class="grow" placeholder="Email" value="<?= (isset($_SESSION["old_email"])) ?  $_SESSION["old_email"] : ""; unset($_SESSION["old_email"]); ?>" /> 
                    </div>
                    <!-- email error start -->
                    <?php
                    if (isset($_SESSION["email_error"])) {
                    ?>
                        <p class="text-red-600"><?php echo $_SESSION["email_error"]; ?></p>
                    <?php }
                    unset($_SESSION["email_error"]); ?>
                    <!-- email error end -->



                    <div>
                        <div class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="" class="h-4 w-4 opacity-70">
                                <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                            </svg>
                            <input id="myInput" name="password" type="password" placeholder="Password" class=" grow"  value="<?= (isset($_SESSION["old_password"])) ?  $_SESSION["old_password"] : "" ; unset( $_SESSION["old_password"]); ?>"/>

                        </div>
                        <input class="my-3 lead" type="checkbox" onclick="myFunction()"> Show Password
                    </div>
                    <!-- password error start -->
                    <?php
                    if (isset($_SESSION["password_error"])) {
                    ?>
                        <p class="text-red-600"><?php echo $_SESSION["password_error"]; ?></p>
                    <?php }
                    unset($_SESSION["password_error"]); ?>
                    <!-- password error end -->



                    <div class="input input-bordered flex items-center gap-2">
                        <i class="fa-solid fa-circle-check"></i>
                        <input name="confirm_password" type="password" placeholder="Confirm Password" class="grow " />
                    </div>
                    <!-- Confirm password error start -->
                    <?php
                    if (isset($_SESSION["c_password_error"])) {
                    ?>
                        <p class="text-red-600"><?php echo $_SESSION["c_password_error"]; ?></p>
                    <?php }
                    unset($_SESSION["c_password_error"]); ?>
                    <!-- Confirm password error end -->


                    <div>
                        <button type="submit" name="submit_btn" class="btn btn-info text-blue-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    </div>

    <!-- hero section end -->



    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>