<?php
include "koneksi.php";

if(isset($_POST["id_transaksi"])){
    foreach ($_POST["id_transaksi"] as $id) {
        $quey = mysqli_query($connect, "SELECT * FROM tbl_transaksi WHERE id_transaksi = '$id'");
        $data = mysqli_fetch_array($quey);

        $delete = "DELETE FROM tbl_transaksi WHERE id_transaksi = ?";
        $proses = $connect->prepare($delete);
        $proses->bind_param("i",$id);
        $proses->execute();
    }
    echo "<script language = 'JavaScript'>alert('Data Berhasil Dihapus');document.location='?page=data_transaksi'</script>";

}
?>