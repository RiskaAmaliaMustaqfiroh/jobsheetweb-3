<?php

include 'koneksi.php';


$id =$_POST['id'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tanggal_lahir =$_POST['tanggal_lahir'];

mysqli_query($koneksi,"insert into biodata values('$id','$nama','$alamat','$tanggal_lahir')");


header("location:index.php");

?>