<?php
include "koneksi.php";
$query = mysqli_query($connect, "select * from tbl_produk where id_produk = $_GET[id]");
$row = mysqli_fetch_array($query);

mysqli_query($connect, "delete from tbl_produk where id_produk = '$_GET[id]'");

unlink('./src/images/foto-produk/'.$row['foto']);

echo"<script language = 'Javascript'>
        alert('Data Berhasil Dihapus');
        window.location.href = '?page=data_product';
    </script>"

?>