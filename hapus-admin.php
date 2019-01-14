<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM admin WHERE id_admin='$_GET[id]'");

header('location:admin.php');

?>