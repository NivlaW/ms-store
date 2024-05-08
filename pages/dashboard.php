<?php
include "koneksi.php";
$data_product = mysqli_query($connect, "select * from tbl_produk");

?>
<div class="mx-auto max-w-screen-2xl px-4 lg:px-12">
    <div class="flex flex-col items-center justify-center mb-10">
        <h2 class="text-[4em] font-bold">MS Store</h2>
        <h5 class="text-lg font-semibold">
            Menampilkan Produk Terfavorit
        </h5>
    </div>
    <div class="grid gap-x-5 gap-y-4 grid-cols-5">
        <?php
          while ($x = mysqli_fetch_array($data_product)):?>
        <div class="card mb-0 rounded-[20px] border-0 drop-shadow" style="width: 18rem;">
            <a href=<?php echo"?page=add_transaksi&&id=".$x['id_produk']?>
                class=" focus:ring-4 focus:ring-gray-200 rounded-[20px]">
                <img <?php echo "src='src/images/foto-produk/".$x['foto']."'"?> class="mt-4 card-img-top rounded-[20px]">
                <div class="card-body">
                    <h5 class="card-title font-reguler text-lg truncate overflow-hidden"><?php echo"$x[nama_produk]" ?> 
                    </h5>
                    <h5 class="card-title mb-0 font-bold text-lg"><?php echo"Rp. $x[harga]" ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
        </div>
        <?php endwhile ?>
    </div>

</div>