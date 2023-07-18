<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Barang</h2>
    <form action="simpan.php" method="post">
        <label for="">No</label>
        <input type="text" name="no" id="no">
        <br>
        <label for="">Nama Merek</label>
        <input type="text" name="nama_merek" id="nama_merek">
        <br>
        <label for="">Warna</label>
        <input type="text" name="warna" id="warna">
        <br>
        <label for="">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah">
        <br>
        <button type="submit">Simpan</button>
        <br>
        <button type="reset">ulangi</button>
        <br>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>