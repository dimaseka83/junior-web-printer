<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Merek</th>
            <th>Warna</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM printer");
        foreach($data as $d){
            echo "<tr>
            <td>$no</td>
            <td>".$d['nama_merek']."</td>
            <td>".$d['warna']."</td>
            <td>".$d['jumlah']."</td>
            </tr>";            
        }
        ?>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>