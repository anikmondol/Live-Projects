<?php

include "../master/header.php";
include "../../config/database.php";

$users_query = "SELECT * FROM users";
$users = mysqli_query($connect_db, $users_query);

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
            <h3 class="font-bold text-gray-600 p-1 text-2xl">Dashboard</h3>
        </div>

        <div>
            <?php if (isset($_SESSION['team_name'])) :    ?>
                <div role="alert" class="alert">
                    <i class="fa-solid fa-user-check text-2xl text-red-300"></i>
                    <div>
                        <h5 class="text-xl font-medium">Welcome Mr. <?= $_SESSION['team_name'] ?></h5>
                        <p class="text-sm"> Your Email is <?= $_SESSION['auth_email'] ?></p>
                    </div>
                </div>
            <?php endif;
            unset($_SESSION['team_name']); ?>
        </div>

        <div>
            <?php if (isset($_SESSION['active_status'])) :    ?>
                <div role="alert" class="alert px-2">

                    <i class="fa-solid fa-bell text-2xl text-green-300"></i>
                    <div>
                        <h5 class="text-base font-medium"> <?= $_SESSION['active_status'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['active_status']); ?>
        </div>

        <div>
            <?php if (isset($_SESSION['deactive_status'])) :    ?>
                <div role="alert" class="alert px-2">

                    <i class="fa-solid fa-bell-slash text-2xl text-red-300"></i>
                    <div>
                        <h5 class="text-base font-medium"> <?= $_SESSION['deactive_status'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['deactive_status']); ?>
        </div>

    </section>

    <!-- table section start -->
    <section class="mt-3 p-3">
        <div style="overflow-y: scroll; height: 300px;">
            <table class="table table-xs border border-gray-300">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 border border-gray-300">Id</th>
                        <th class="px-4 py-2 border border-gray-300">Name</th>
                        <th class="px-4 py-2 border border-gray-300">Email</th>
                        <th class="px-4 py-2 border border-gray-300">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1;
                    $id = $_SESSION['auth_id'];
                    ?>
                    <?php foreach ($users as $user) {
                        if ($user['id'] == $id) {
                            continue;
                        }
                    ?>
                        <tr class="border-b border-gray-300">
                            <th class="px-4 py-2 border border-gray-300"><?= $number++ ?></th>
                            <td class="px-4 py-2 border border-gray-300"><?= $user["name"] ?></td>
                            <td class="px-4 py-2 border border-gray-300"><?= $user["email"] ?></td>
                            <td class="border text-base border-gray-300">
                                <a href="store.php?status_id=<?= $user['id'] ?>" class="p-1 rounded-sm text-white <?= ($user['status'] == 'deactive') ? 'bg-red-400' : 'bg-green-400'; ?>">
                                    <?= $user['status'] ?>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </section>
    <!-- table section end -->


</div>

<!-- content end-->

<?php

include "../master/footer.php";

?>