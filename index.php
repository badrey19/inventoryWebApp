<?php
require"functions.php";

$goods = query("SELECT * FROM inventory");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Web App</title>
</head>
<body>
    <ul>
        <li><a href="add.php">tambah barang</a></li>
    </ul>

    <h1>Data Barang</h1>

    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Merek</th>
            <th>Serial Number</th>
            <th>Jumlah</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($goods as $good) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><a href="edit.php?id=<?= $good["id"];?>">ubah</a> | <a href="delete.php?id=<?= $good["id"]; ?>">hapus</a></td>
            <td><?= $good["nama"]; ?></td>
            <td><?= $good["merek"] ?></td>
            <td><?= $good["serial_number"] ?></td>
            <td><?= $good["jumlah"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>