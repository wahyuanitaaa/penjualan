<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM barang WHERE id_barang='$_GET[id]'");

header('location:barang.php');

?>