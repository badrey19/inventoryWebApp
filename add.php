<?php
require"functions.php";

if(isset($_POST["submit"])){
    if(add($_POST) > 0){
        echo "
            <script>
                alert('barang berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('barang gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>

    <form action="" method="post">
        <ul>
            <li><label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
            </li>
            <li><label for="merek">Merek :</label>
            <input type="text" name="merek" id="merek">
            </li>
            <li><label for="serial_number">Serial Number :</label>
            <input type="text" name="serial_number" id="serial_number">
            </li>
            <li><label for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" id="jumlah">
            </li>
            <li><button type="submit" name="submit" >tambah</button></li>
        </ul>
    </form>
</body>
</html>