<?php
include 'ceksession.php';
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM penulis WHERE id_penulis = $id");
}

header("Location: penulis.php");
exit;
