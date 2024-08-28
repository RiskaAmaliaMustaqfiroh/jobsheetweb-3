<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>KELUARGA</h2>
        <br/>
        <br/>
        <br/>
        <h3>TAMBAH BIODATA</h3>
        <form method="post" action="proses_tambah_keluarga.php">
            <table>
                <tr>
                    <td>ID_Anggota</td>
                    <td><input type="number" name="id"></td>
                </tr>
                <tr>
                    <td>Nama_Anggota</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tanggal_Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
</body>
</html>