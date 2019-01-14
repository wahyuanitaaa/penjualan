<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM transaksi_detail WHERE id_td='$_GET[id]'");

header('location:detail.php');

?>