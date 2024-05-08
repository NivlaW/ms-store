<?php
include "koneksi.php";
$query = mysqli_query($connect, "select * from tbl_transaksi where id_transaksi = $_GET[id]");
$row = mysqli_fetch_array($query);

mysqli_query($connect, "delete from tbl_transaksi where id_transaksi = '$_GET[id]'");

unlink('./src/images/foto-produk/'.$row['foto']);

echo"<script language = 'Javascript'>
        alert('Data Berhasil Dihapus');
        window.location.href = '?page=data_transaksi';
    </script>"

?>