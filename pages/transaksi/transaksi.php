
<section class="my-auto sm:p-5 antialiased">
    <div class="mx-auto max-w-screen-2xl h-screen px-4 lg:px-12">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4">
                <div class="w-full md:w-1/2">
                <div class="flex-1 flex items-center space-x-2">
                    <h5 class="text-xl font-bold">
                        Data Transaksi
                    </h5>
                </div>
                
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 :focus:ring-gray-700 :bg-gray-800   :hover :hover:bg-gray-700" type="button">
                    <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </button>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 :focus:ring-gray-700 :bg-gray-800   :hover :hover:bg-gray-700" type="button">
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
                            <th scope="col" class="p-4">No Transaksi</th>
                            <th scope="col" class="p-4">Konsumen</th>
                            <th scope="col" class="p-4">Produk</th>
                            <th scope="col" class="p-4">Tanggal Pemesanan</th>
                            <th scope="col" class="p-4">Jumlah Produk</th>
                            <th scope="col" class="p-4">Harga</th>
                            <th scope="col" class="p-4">Total Harga</th>
                            <th scope="col" class="p-4">Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 :focus:ring-primary-600 :ring-offset-gray-800 focus:ring-2 :bg-gray-700 ">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">a012392</td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">Rifqi maksum</td>
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                <div class="flex items-center mr-3">
                                    <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="iMac Front Image" class="h-8 w-auto mr-3">
                                    Apple iMac 27&#34;
                                </div>
                            </th>
                            <td class="px-4 py-3 font-medium text-gray-900 ">2 Desember 2023</td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">2</td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">Rp. 9.5555.000</td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">Rp. 18.5555.000</td>
                            <td class="px-4 py-3 font-medium text-gray-900 ">
                                <div class="flex items-center space-x-4">
                                    <a type="button" <?php echo"href='?page=edit_product&&id=" . $x['id_produk'] . " '" ?> class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                                        <svg class="h-4 w-4 mr-2 -ml-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                        </svg>

                                        View
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>