<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <h2>KELUARGA RISKA</h2>
    <br/>
    <br/>
    <h3>EDIT KELUARGA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data=mysqli_query($koneksi,"select * from biodata where id_anggota='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="proses_update_keluarga.php">
            <table>
                <tr>
                    <td>ID Anggota</td>
                    <td>
                        <input type="number" name="id" value="<?php echo $d['id_anggota']; ?>">
                     </td>
                 </tr>
                 <tr>
                    <td>Nama Anggota</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $d['nama_anggota']; ?>">
                     </td>
                 </tr>
                 <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                     </td>
                 </tr>
                 <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>">
                     </td>
                 </tr>
                 <tr>
                     <td></td>
                     <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
</body>
</html>