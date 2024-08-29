<?php

include "../../config/database.php";
include "../master/header.php";
include "../../fonts/fonts.php";


if (isset($_GET['edit_id'])) {
    $id =  $_GET['edit_id'];

    $select_query = "SELECT * FROM portfolios WHERE id='$id'";
    $connect = mysqli_query($connect_db, $select_query);
    $portfolio = mysqli_fetch_assoc($connect);

}




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
            <h3 class="font-bold text-gray-600 p-1 text-2xl">Portfolio Create</h3>
        </div>
    </section>

    <section>
        <div class="px-4 lg:px-0 py-4 w-full lg:w-3/5 mx-auto">
            <div class="card flex items-center p-4 justify-between bg-red-50 rounded shadow-lg">
                <div class="font-bold">
                    USER-PORTFOLIO
                </div>
                <div>
                <form action="store.php?edit_id=<?= $portfolio['id'] ?>" method="post" enctype="multipart/form-data">
                        <div class="lg:w-[800px]">
                            <div>
                                <label class="pb-4 font-medium">Project Title</label>
                                <br>
                                <div>
                                    <input type="text" name="title" placeholder="Type here" class="input input-bordered lg:w-[760px]  my-4"/ value="<?= $portfolio['title'] ?>">
                                </div>
                            </div>
                            <div>
                                <label class="pb-4 font-medium">Project Sub-Title</label>
                                <br>
                                <div>
                                    <input type="text" name="subtitle" placeholder="Type here" class="input input-bordered lg:w-[760px]  my-4" value="<?= $portfolio['subtitle'] ?>">
                                </div>
                            </div>
                            <div>
                                <label class="pb-4 font-medium">Description</label>
                                <br>
                                <textarea
                                    placeholder="description"
                                    class="textarea textarea-bordered textarea-lg lg:w-[760px]" name="description"><?= $portfolio['description'] ?></textarea>
                            </div>

                            <picture class="d-block my-4">
                                <img id="port_img" src="../../public/portfolio/<?= $portfolio['image'] ?>" alt="" style="width: 100%; height: 300px; object-fit:contain;">
                            </picture>

                            <div>
                                <label class="pb-4 font-medium">Image</label>
                                <br>
                                <input onchange="document.getElementById('port_img').src= window.URL.createObjectURL(this.files[0])" type="file" name="image" placeholder="Type here" class="input input-bordered lg:w-[760px]  my-4 pt-2" />
                            </div>
                            <div>
                                <button type="submit" name="update" class="btn btn-primary my-3"><i class="fa-solid fa-rotate-right" style="color: #ffffff;"></i>Update</button>
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