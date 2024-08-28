<?php

include 'koneksi.php';


$id = $_GET['id'];



mysqli_query($koneksi,"delete from biodata where id_anggota=$id");


header("location:index.php");

?>