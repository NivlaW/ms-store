<?php
include "koneksi.php";
$data_product = mysqli_query($connect, "select * from tbl_produk where id_produk='$_GET[id]'");
$data = mysqli_fetch_array($data_product);

$length = 16;
$string = md5(rand());
$randomString = substr($string, 0, $length);

?>
<!-- Start block -->
<div class="mx-auto max-w-screen-2xl h-screen px-4 lg:px-12">
    <div class="flex flex-col items-center justify-center mb-10">
        <h2 class="text-[4em] font-bold">MS Store</h2>
        <h5 class="text-lg font-semibold">
            Silahkan Isi Form
        </h5>
    </div>
    <div class="bg-white relative shadow-md sm:rounded-xl overflow-hidden p-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="overflow-x-auto pt-2">
                <div class="grid grid-cols-1 gap-y-4">
                    <div class="">
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="hidden" name="id_produk" id="id_produk" value="<?php echo "$_GET[id]"; ?>"
                                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Masukkan nama Produk">
                        </div>
                    </div>
                    <div class="">
                        <label for="no_transaksi" class="block text-sm font-medium leading-6 text-gray-900">No
                            Transaksi</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" name="no_transaksi" id="no_transaksi" value="<?php echo $randomString; ?>" readonly
                                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Merk Produk">
                        </div>
                    </div>
                    <div class="">
                        <label for="konsumen" class="block text-sm font-medium leading-6 text-gray-900">Nama
                            Pembeli</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" name="konsumen" id="konsumen"
                                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Nama Pembeli">
                        </div>
                    </div>
                    <div class="">
                        <label for="tgl" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                            Pembelian</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="date" name="tgl" id="tgl"
                                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Merk Produk">
                        </div>
                    </div>
                    <div class="">
                        <label for="jml_produk" class="block text-sm font-medium leading-6 text-gray-900">Total
                            Barang</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" name="jml_produk" id="jml_produk"
                                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Total Barang">
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="w-full md:w-auto flex flex-col pt-4 md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a type="button" href="?"
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
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  include "koneksi.php";

  $qty = $_POST['jml_produk'];
  $harga = $data['harga'];
  $total = $harga * $qty;

  $query = mysqli_query($connect, "INSERT INTO tbl_transaksi (id_produk, konsumen, no_transaksi, tgl, jml_produk, harga, total) values ('$_GET[id]', '$_POST[konsumen]', '$_POST[no_transaksi]', '$_POST[tgl]', '$_POST[jml_produk]', '$harga', '$total')");

  echo "<script language='JavaScript'>
            alert('Data Berhasil Ditambahkan');
            document.location='?page=data_transaksi';
        </script>";
}
?>