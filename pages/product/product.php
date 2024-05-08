<!-- Start block -->
<?php
include "koneksi.php";
$data_product = mysqli_query($connect, "select * from tbl_produk");

?>
<section class=" my-auto sm:p-5 antialiased">
    <div class="mx-auto max-w-screen-2xl h-screen px-4 lg:px-12">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4">
                <div class="w-full md:w-1/2">
                    <div class="flex-1 flex items-center space-x-2">
                        <h5 class="text-xl font-bold">
                            Data Produk
                        </h5>
                    </div>

                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="?page=add_product" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 " type="button">
                        <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </a>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 " type="button">
                            Actions
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow :bg-gray-700 :divide-gray-600">
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 :hover:bg-gray-600 :text-gray-200 :hover">Delete all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 ">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 :focus:ring-primary-600 :ring-offset-gray-800 focus:ring-2 :bg-gray-700 ">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col truncate overflow-hidden" class="p-4">Produk</th>
                            <th scope="col truncate overflow-hidden" class="p-4">Merk</th>
                            <th scope="col-4 truncate overflow-hidden" class="p-4">Deskripsi</th>
                            <th scope="col truncate overflow-hidden" class="p-4">Harga</th>
                            <th scope="col truncate overflow-hidden" class="p-4">Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($x = mysqli_fetch_array($data_product)):?>
                        <tr class="border-b">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 :focus:ring-primary-600 :ring-offset-gray-800 focus:ring-2 :bg-gray-700 ">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 truncate ">
                                <div class="flex items-center mr-3">
                                    <img <?php echo"src='./src/images/foto-produk/{$x['foto']}' "?> class="h-8 w-auto mr-3">
                                    <?php echo"$x[nama_produk]" ?> 
                                </div>
                            </th>
                            <td class="px-4 py-3">
                                <span class="bg-gray-300 text-primary-800 text-xs font-medium px-2 py-0.5 rounded"><?php echo"$x[merk]" ?> </span>
                            </td>
                            <td class="col-2 px-4 py-3 font-medium text-gray-900 text-ellipsis overflow-hidden"><?php echo"$x[deskripsi]" ?> </td>
                            <td class="px-4 py-3 font-medium text-gray-900 truncate "><?php echo"$x[harga]" ?> </td>

                            <td class="px-4 py-3 font-medium text-gray-900 truncate ">
                                <div class="flex items-center space-x-4">
                                    <a type="button" <?php echo"href='?page=edit_product&&id=" . $x['id_produk'] . " '" ?> class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                        Edit
                                    </a>
                                    <a onclick="javascript: return confirm('apakah anda ingin menghapus data ini')" <?php echo"href='?page=delete_product&&id=" . $x['id_produk'] . " ' "  ?> type="button" class="flex items-center text-red-700 hover:text-gray-100 hover border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
        </div>
    </div>
</section>