<?php
$conn = mysqli_connect("localhost", "root", "", "megadata");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data) {
    global $conn;
    $nama = $data["nama"];
    $merek = $data["merek"];
    $serial_number = $data["serial_number"];
    $jumlah = $data["jumlah"];

    $query = "
        INSERT INTO inventory VALUES (
            '', '$nama', '$merek', '$serial_number', '$jumlah'
        )
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM inventory WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $merek = $data["merek"];
    $serial_number = $data["serial_number"];
    $jumlah = $data["jumlah"];

    $query = "
        UPDATE inventory SET
            nama = '$nama',
            merek = '$merek',
            serial_number = '$serial_number',
            jumlah = '$jumlah'
        WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


?>