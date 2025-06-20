<?php
include 'ceksession.php';
include 'koneksi.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_penulis'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conn->query("UPDATE penulis SET nama_penulis='$nama', email='$email', password='$pass' WHERE id_penulis=$id");
    header("Location: penulis.php");
}
$res = $conn->query("SELECT * FROM penulis WHERE id_penulis=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data Penulis</h4>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="nama_penulis" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" name="nama_penulis" id="nama_penulis" value="<?= $res['nama_penulis'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Penulis</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $res['email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Penulis</label>
                    <input type="text" class="form-control" name="password" id="password" value="<?= $res['password'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="penulis.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
