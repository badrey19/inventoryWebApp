<?php
require"functions.php";

$id = $_GET["id"];

if(delete($id) > 0){
    echo "
            <script>
                alert('barang berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('barang gagal dihapus');
                document.location.href = 'index.php';
            </script>
        ";
}


?>