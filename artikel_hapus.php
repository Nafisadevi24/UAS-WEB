<?php
include 'ceksession.php';
include 'koneksi.php';

$id = $_GET['id'];

// Eksekusi penghapusan
$conn->query("DELETE FROM kontributor WHERE id_artikel = $id");
$conn->query("DELETE FROM artikel WHERE id_artikel = $id");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="card p-5 text-center">
    <h2 class="text-success mb-3">✅ Artikel berhasil dihapus</h2>
    <p class="mb-4">Artikel telah dihapus dari sistem beserta data kontributornya.</p>
    <a href="dashboard.php" class="btn btn-primary">Kembali ke Dashboard</a>
</div>

</body>
</html>
