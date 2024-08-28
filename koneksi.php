<?php

$koneksi = mysqli_connect("localhost","root","","keluarga_riska");


if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>