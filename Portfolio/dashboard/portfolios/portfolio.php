<?php
include "../../config/database.php";
include "../master/header.php";

$portfolio_query = "SELECT * FROM portfolios";
$portfolios = mysqli_query($connect_db, $portfolio_query);
$result = mysqli_fetch_assoc($portfolios);

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

<div class="min-h-screen bg-blue-50">

    <section class="flex flex-col bg-white py-4">
        <div class="flex flex-row space-x-3">
            <h3 class="font-bold text-gray-600 p-1 text-2xl">Service</h3>
        </div>

        <div>
            <?php if (isset($_SESSION['portfolio_update'])) :    ?>
                <div role="alert" class="alert px-2">

                    <i class="fa-solid fa-hourglass text-2xl text-green-300"></i>
                    <div>
                        <h5 class="text-base font-medium"> <?= $_SESSION['portfolio_update'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['portfolio_update']); ?>
        </div>

        <div>
            <?php if (isset($_SESSION['port_create'])) : ?>
                <div role="alert" class="alert px-2">
                    <i class="fa-solid fa-thumbs-up text-2xl text-green-300"></i>
                    <div>
                        <h5 class="text-base font-medium"><?= $_SESSION['port_create'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['port_create']); ?>
        </div>

        <div>
            <?php if (isset($_SESSION['port_error'])) : ?>
                <div role="alert" class="alert px-2">

                    <i class="fa-solid fa-skull-crossbones text-2xl text-red-300"></i>
                    <div>
                        <h5 class="text-base font-medium"> <?= $_SESSION['port_error'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['port_error']); ?>
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

        <div>
            <?php if (isset($_SESSION['delete_done'])) :    ?>
                <div role="alert" class="alert px-2">

                    <i class="fa-solid fa-skull-crossbones text-2xl text-red-300"></i>
                    <div>
                        <h5 class="text-base font-medium"> <?= $_SESSION['delete_done'] ?></h5>
                    </div>
                </div>

            <?php endif;
            unset($_SESSION['delete_done']); ?>
        </div>

    </section>


    <!-- table section start -->
    <section class="mt-3 p-3 w-full lg:w-11/12 mx-auto">
        <div style="overflow-y: scroll; height: 400px;">
            <div class="flex justify-between items-center">
                <h5 class="text-xl font-medium">Services</h5>
                <div>
                    <a href="./create.php">
                        <button type="submit" name="email_btn" class="btn btn-primary my-3"><i class="fa-solid fa-plus" style="color: #ffffff"></i>Create</button>
                    </a>
                </div>
            </div>
            <table class="table table-xs border border-gray-300">
                <thead>
                    <tr class="border-b border-gray-300 bg-cyan-300">
                        <th class="border text-base border-gray-300">#</th>
                        <th class="border text-base border-gray-300">Image</th>
                        <th class="border text-base border-gray-300">title</th>
                        <th class="border text-base border-gray-300">Status</th>
                        <th class="border text-base border-gray-300 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $number = 1;
                    if (empty($result)):
                    ?>
                        <tr>
                            <td colspan="5" class="text-center text-red-400 text-xl font-normal border py-1">No portfolios found!</td>
                        </tr>
                        <?php
                    else:
                        foreach ($portfolios as $portfolio):
                        ?>

                            <tr class="border-b border-gray-300">
                                <th class="border text-base border-gray-300">
                                    <?= $number++ ?>
                                </th>
                                <td class="border text-base border-gray-300">
                                    <img class="rounded-sm" src="../../public/portfolio/<?= $portfolio['image'] ?>" alt="portfolio image" style="width: 70px; height: 50px; object-fit: cover;">
                                </td>
                                <td class="border text-base border-gray-300">
                                    <?= $portfolio['title'] ?>
                                </td>
                                <td class="border text-base border-gray-300">
                                    <a href="store.php?status_id=<?= $portfolio['id'] ?>" class="p-1 rounded-sm text-white <?= ($portfolio['status'] == 'deactive') ? 'bg-red-400' : 'bg-green-400'; ?>">
                                        <?= $portfolio['status'] ?>
                                    </a>
                                </td>
                                <td class="border text-base border-gray-300">
                                    <div class="flex justify-evenly gap-2">
                                        <a href="./edit.php?edit_id=<?= $portfolio['id'] ?>">
                                            <i class="fa-2x fa-regular fa-pen-to-square text-cyan-500"></i>
                                        </a>
                                        <a href="./store.php?id_delete=<?= $portfolio['id'] ?>"
                                            <i class="fa-2x fa-regular fa-trash-can text-red-400"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                    <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- table section end -->






    <?php include "../master/footer.php";
    ?>