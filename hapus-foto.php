<?php

include 'db.php';

mysqli_query ($koneksi, "DELETE FROM foto WHERE id_foto='$_GET[id]'");

header('location:foto.php');

?>