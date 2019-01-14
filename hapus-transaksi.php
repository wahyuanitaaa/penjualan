<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'");

header('location:transaksi.php');

?>