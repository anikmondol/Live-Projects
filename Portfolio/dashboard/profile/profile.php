<?php
include "../../config/database.php";
?>

<?php include "../master/header.php";
?>


<!-- content start -->

<!-- first grid stars here -->
<section>
    <div class="grid lg:grid-cols-3 sm-grid-cols gap-[25px] px-[18px] py-4">
        <div class="flex items-center p-4 justify-between bg-red-50 rounded shadow-lg">
            <div>
                <p class="text-sm font-medium">Check in Today</p>
                <h3 class="flex items-center pt-3 text-3xl font-semibold"> 34 </h3>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 p-2 text-yellow-100 bg-red-400 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </div>
        <div class="flex items-center p-4 justify-between bg-red-50 rounded shadow-lg">
            <div>
                <p class="text-sm font-medium">Check in Today</p>
                <h3 class="flex items-center pt-3 text-3xl font-semibold"> 34 </h3>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 p-2 text-yellow-100 bg-red-400 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
        </div>
        <div class="flex items-center p-4 justify-between bg-red-50 rounded shadow-lg">
            <div>
                <p class="text-sm font-medium">Check in Today</p>
                <h3 class="flex items-center pt-3 text-3xl font-semibold"> 34 </h3>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 p-2 text-yellow-100 bg-red-400 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
        </div>
    </div>
</section>
<!-- first grid end here -->


<div class="min-h-screen bg-blue-50 rounded">
    <section class="flex flex-col bg-white p-4">
        <div class="flex flex-row space-x-3">
            <h3 class="font-bold text-gray-600 p-1 text-2xl">Setting Page</h3>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] px-[18px] py-4">
            <!-- name update -->
            <div class="card flex items-center p-4 justify-between bg-red-50 rounded shadow-lg" style="overflow-y: scroll; height: 280px;">
                <div class="font-bold">
                    USER-NAME
                </div>
                <div>
                    <form action="update.php" method="post">
                        <div>
                            <label class="pb-4 font-medium">UserName</label>
                            <input type="text" name="name" placeholder="Type here" class="input input-bordered w-full max-w-xs my-4" />
                            <!-- name error start -->
                            <?php if (isset($_SESSION["name_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-3"><?= $_SESSION["name_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["name_error"]); ?>
                            <!-- name error end -->
                            <!-- name update start -->
                            <?php if (isset($_SESSION["name_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-3"><?= $_SESSION["name_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["name_update"]); ?>
                            <!-- name update end -->
                            <div>
                                <button type="submit" name="name_btn" class="btn btn-primary my-3"><i class="fa-solid fa-rotate-right" style="color: #ffffff;"></i>Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- email update -->
            <div class="card flex items-center p-4 justify-between bg-red-50 rounded shadow-lg" style="overflow-y: scroll; height: 280px;">
                <div class="font-bold">
                    USER-EMAIL
                </div>
                <div>
                    <form action="update.php" method="post">
                        <div>
                            <label class="pb-4 font-medium">UserEmail</label>
                            <input type="text" name="email" placeholder="Type here" class="input input-bordered w-full max-w-xs my-4" />
                            <!-- name error start -->
                            <?php if (isset($_SESSION["email_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-3"><?= $_SESSION["email_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["email_error"]); ?>
                            <!-- name error end -->
                            <!-- name update start -->
                            <?php if (isset($_SESSION["update_email"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-3"><?= $_SESSION["update_email"] ?></div>
                            <?php endif;
                            unset($_SESSION["update_email"]); ?>
                            <div>
                                <button type="submit" name="email_btn" class="btn btn-primary my-3"><i class="fa-solid fa-rotate-right" style="color: #ffffff;"></i>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- password update -->
            <div class="card flex items-center p-4 justify-between bg-red-50 rounded shadow-lg" style="overflow-y: scroll; height: 280px;">
                <div class="font-bold mb-16">
                    USER-PASSWORD
                </div>
                <div>
                    <form action="update.php" method="post">
                        <div>
                            <label class="pb-4 font-medium">Old Password</label>
                            <br>
                            <input type="text" name="old_password" placeholder="Type here" class="input input-bordered w-full max-w-xs my-4" />
                            <!-- old_pass_error start -->
                            <?php if (isset($_SESSION["old_pass_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-2"><?= $_SESSION["old_pass_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["old_pass_error"]); ?>
                            <!-- old_pass_error end -->
                            <!-- old_password_update start -->
                            <?php if (isset($_SESSION["old_password_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-2"><?= $_SESSION["old_password_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["old_password_update"]); ?>
                            <!-- old_password_update end -->
                            <br>
                            <label class="pb-4 font-medium">New Password</label>
                            <br>
                            <input type="text" name="new_password" placeholder="Type here" class="input input-bordered w-full max-w-xs my-4" />
                            <!-- new_pass_error start -->
                            <?php if (isset($_SESSION["new_pass_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-2"><?= $_SESSION["new_pass_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["new_pass_error"]); ?>
                            <!-- new_pass_error end -->
                            <!-- new_password_update start -->
                            <?php if (isset($_SESSION["new_password_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-2"><?= $_SESSION["new_password_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["new_password_update"]); ?>
                            <!-- new_password_update end -->
                            <label class="pb-4 font-medium">Confirm Password</label>
                            <br>
                            <input type="text" name="confirm_password" placeholder="Type here" class="input input-bordered w-full max-w-xs my-4" />
                            <!-- confirm_error start -->
                            <?php if (isset($_SESSION["confirm_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-2"><?= $_SESSION["confirm_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["confirm_error"]); ?>
                            <!-- confirm_error end -->
                            <!-- confirm_update start -->
                            <?php if (isset($_SESSION["confirm_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-2"><?= $_SESSION["confirm_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["confirm_update"]); ?>
                            <!-- confirm_update end -->
                            <div>
                                <button type="submit" name="password_btn" class="btn btn-primary my-3"><i class="fa-solid fa-rotate-right" style="color: #ffffff;"></i>Update</button>
                            </div>
                            <!-- password_update start -->
                            <?php if (isset($_SESSION["pass_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-2"><?= $_SESSION["pass_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["pass_error"]); ?>
                            <!-- password_update end -->
                            <!-- password_update_error start -->
                            <?php if (isset($_SESSION["pass_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-2"><?= $_SESSION["pass_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["pass_update"]); ?>
                            <!-- password_update_error end -->
                        </div>
                    </form>
                </div>
            </div>

            <!-- Image update -->
            <div class="card flex items-center p-4 justify-between bg-red-50 rounded shadow-lg" style="overflow-y: scroll; height: 280px;">
                <div class="font-bold">
                    USER-IMAGE
                </div>
                <div>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label class="pb-4 font-medium">UserImage</label>
                            <input type="file" name="image" class="input input-bordered w-full max-w-xs my-4 pt-2" />

                            <!-- image error start -->
                            <?php if (isset($_SESSION["image_error"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-red-400 text-base mt-3"><?= $_SESSION["image_error"] ?></div>
                            <?php endif;
                            unset($_SESSION["image_error"]); ?>
                            <!-- image error end -->

                            <!-- image update start -->
                            <?php if (isset($_SESSION["image_update"])) :
                            ?>
                                <div id="emailHelp" class="form-text text-success text-base mt-3"><?= $_SESSION["image_update"] ?></div>
                            <?php endif;
                            unset($_SESSION["image_update"]); ?>
                            <!-- image update start -->
                            <div>
                                <button type="submit" name="image_btn" class="btn btn-primary my-3"><i class="fa-solid fa-rotate-right" style="color: #ffffff;"></i>Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>










</div>






<?php include "../master/footer.php";
?>