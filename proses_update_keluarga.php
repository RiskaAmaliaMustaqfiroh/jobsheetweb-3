<?php

include 'koneksi.php';


$id =$_POST['id'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tanggal_lahir =$_POST['tanggal_lahir'];


$edit = "UPDATE biodata SET id_anggota = '$id', nama_anggota = '$nama', alamat='$alamat', tanggal_lahir='$tanggal_lahir' where id_anggota=$id";
 $result = mysqli_query($koneksi, $edit);


header("location:index.php");
?>