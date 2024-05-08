<?php
$connect = mysqli_connect('localhost', 'root', '', 'masoem');
// $connect = mysqli_connect('localhost', 'root', 'root', 'masoem');

if (mysqli_connect_error()) {
    echo "koneksi gagal" . mysqli_connect_error();
}
