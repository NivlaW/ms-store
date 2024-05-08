<!-- Start block -->
<section class=" my-auto sm:p-5 antialiased">
    <div class="mx-auto max-w-screen-2xl h-screen px-4 lg:px-12">
        <div class="bg-white relative shadow-md sm:rounded-xl overflow-hidden p-4">
            <div
                class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between pb-2 border-b">
                <div class="w-full md:w-1/2">
                    <div class="flex-1 flex items-center space-x-2">
                        <h5 class="text-xl font-bold">
                            Tambah Data Product
                        </h5>
                    </div>

                </div>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="overflow-x-auto pt-2">

                    <div class="grid grid-cols-1 gap-y-4">

                        <div class="">
                            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Foto
                                Produk</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input aria-describedby="file_input_help" id="file_input" type="file" name="foto"
                                    class="block w-full rounded-md border-0 text-sm px-1 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    placeholder="Masukkan nama Produk">

                            </div>
                        </div>
                        <div class="">
                            <label for="nama_produk" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Produk</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text" name="nama_produk" id="nama_produk"
                                    class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Masukkan nama Produk">
                            </div>
                        </div>
                        <div class="">
                            <label for="merk" class="block text-sm font-medium leading-6 text-gray-900">Merk
                                Produk</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text" name="merk" id="merk"
                                    class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Merk Produk">
                            </div>
                        </div>
                        <div class="">
                            <label for="deskripsi"
                                class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <textarea
                                    class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="">
                            <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input type="text" name="harga" id="harga"
                                    class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Harga Produk">
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="w-full md:w-auto flex flex-col pt-4 md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a type="button" href="?page=data_product"
                        class="w-full md:w-auto flex items-center justify-center py-2 px-7 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                        Kembali
                    </a>
                    <button type="submit" name="submit"
                        class="w-full md:w-auto flex items-center justify-center py-2 px-7 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";

    $nama = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $n_random = rand(1, 9999);
    $nama_baru = $n_random . '-' . $nama;
    $folder = "./src/images/foto-produk";

    move_uploaded_file($file_tmp, $folder . $nama_baru);

    $query = mysqli_query($connect, "INSERT INTO tbl_produk (nama_produk, merk, deskripsi, foto, harga) values ('$_POST[nama_produk]', '$_POST[merk]', '$_POST[deskripsi]', '$nama_baru', '$_POST[harga]')");

    echo "<script language='JavaScript'>
            alert('Data Berhasil Ditambahkan');
            document.location='?page=data_product';
        </script>";
}
?>