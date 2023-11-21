<?php
require"functions.php";

$id = $_GET["id"];

$goods = query("SELECT * FROM inventory WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if(edit($_POST) > 0){
        echo "
            <script>
                alert('barang berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('barang gagal diubah');
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
    <title>Ubah Barang</title>
</head>
<body>
    <h1>Ubah Barang</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden" name="id" value="<?= $goods["id"] ?>">
            <li><label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" value="<?= $goods["nama"] ?>" >
            </li>
            <li><label for="merek">Merek :</label>
            <input type="text" name="merek" id="merek" value="<?= $goods["merek"]; ?>" >
            </li>
            <li><label for="serial_number">Serial Number :</label>
            <input type="text" name="serial_number" id="serial_number" value="<?= $goods["serial_number"] ?>" >
            </li>
            <li><label for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" id="jumlah" value="<?= $goods["jumlah"] ?>" >
            </li>
            <li><button type="submit" name="submit" >ubah</button></li>
        </ul>
    </form>
</body>
</html>