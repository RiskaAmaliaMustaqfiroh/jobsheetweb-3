<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>KELUARGA RISKA</h2>
        <br/>
    <a href="tambah_keluarga.php">TAMBAH DATA KELUARGA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NOMER</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from biodata");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_anggota']; ?></td>
                <td><?php echo $d['nama_anggota']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['tanggal_lahir']; ?></td>
                <td>
                    <a href="update_keluarga.php?id=<?php echo $d['id_anggota']; ?>">EDIT</a>
                    <a href="hapus_keluarga.php?id=<?php echo $d['id_anggota']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>