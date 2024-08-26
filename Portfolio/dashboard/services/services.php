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


 <!-- table section start -->
 <section class="mt-3 p-3">
        <div style="overflow-y: scroll; height: 300px;">
            <table class="table table-xs border border-gray-300">
                <thead>
                    <tr class="border-b border-gray-300">
                        <th class="px-4 py-2 border border-gray-300">Id</th>
                        <th class="px-4 py-2 border border-gray-300">Name</th>
                        <th class="px-4 py-2 border border-gray-300">Email</th>
                        <th class="px-4 py-2 border border-gray-300">company</th>
                    </tr>
                </thead>
                <tbody>
                   
                    
                        <tr class="border-b border-gray-300">
                            <th class="px-4 py-2 border border-gray-300"></th>
                            <td class="px-4 py-2 border border-gray-300"></td>
                            <td class="px-4 py-2 border border-gray-300"></td>
                            <td class="px-4 py-2 border border-gray-300">Littel, Schaden and Vandervort</td>
                        </tr>
                </tbody>

            </table>
        </div>
    </section>
    <!-- table section end -->






<?php include "../master/footer.php";
?>