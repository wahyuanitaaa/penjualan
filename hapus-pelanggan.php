<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");

header('location:pelanggan.php');

?>
