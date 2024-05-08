<?php
include "koneksi.php";

if(isset($_POST["id_produk"])){
    foreach ($_POST["id_produk"] as $id) {
        $quey = mysqli_query($connect, "SELECT * FROM tbl_produk WHERE id_produk = '$id'");
        $data = mysqli_fetch_array($quey);

        unlink('assets/img/' . $data['foto']);

        $delete = "DELETE FROM tbl_produk WHERE id_produk = ?";
        $proses = $connect->prepare($delete);
        $proses->bind_param("i",$id);
        $proses->execute();
    }
    echo "<script language = 'JavaScript'>alert('Data Berhasil Dihapus');document.location='?page=data_produk'</script>";

}
?>