<?php
include "cek_session.php";
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $ket = $_POST['keterangan'];
    $conn->query("INSERT INTO kategori(nama_kategori, keterangan) VALUES('$nama', '$ket')");
    header("Location: kategori.php");
}

$kategori = $conn->query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin-top: 60px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">
        <h3 class="mb-4 text-primary text-center">Kelola Kategori Artikel</h3>

        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Tambah Kategori</button>
        </form>

        <h5 class="mb-3">Daftar Kategori</h5>
        <table class="table table-bordered table-striped">
            <thead class="table-secondary">
                <tr>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $kategori->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                    <td><?= htmlspecialchars($row['keterangan']) ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="text-end">
            <a href="dashboard.php" class="btn btn-outline-secondary mt-3">← Kembali ke Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>
