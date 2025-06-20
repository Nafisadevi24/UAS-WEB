<?php
include "cek_session.php";
include "koneksi.php";

$artikel = $conn->query("SELECT * FROM artikel ORDER BY tanggal DESC");
$res = $conn->query("SELECT a.*, k.id_kategori FROM artikel a 
    JOIN kontributor k ON a.id_artikel = k.id_artikel 
    ORDER BY a.tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef3f7;
            font-family: 'Segoe UI', sans-serif;
        }
        .header-title {
            font-weight: 600;
            color: #0d6efd;
        }
        .navbar-custom {
            background-color: #0d6efd;
        }
        .navbar-custom .navbar-brand, .navbar-custom .nav-link {
            color: white;
        }
        .table thead {
            background-color: #0d6efd;
            color: white;
        }
        .btn-custom {
            margin-right: 8px;
        }
        .card-shadow {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 12px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div class="d-flex">
            <a href="logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </div>
</nav>

<div class="container mb-5">
    <h2 class="header-title mb-4">Selamat datang, Admin 👋</h2>

    <div class="mb-3">
        <a href="artikel_tambah.php" class="btn btn-primary btn-custom">+ Tambah Artikel</a>
        <a href="kategori.php" class="btn btn-secondary btn-custom">Kelola Kategori</a>
    </div>

    <form class="mb-4 d-flex" action="artikel_cari.php" method="get">
        <input type="text" name="q" class="form-control me-2" placeholder="Cari judul artikel..." required>
        <button type="submit" class="btn btn-outline-primary">Cari</button>
    </form>

    <!-- Artikel Terbaru -->
    <div class="card mb-5 card-shadow">
        <div class="card-header bg-primary text-white">
            <strong>Artikel Terbaru</strong>
        </div>
        <div class="card-body p-0">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $artikel->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['judul']) ?></td>
                        <td><?= date('d M Y, H:i', strtotime($row['tanggal'])) ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Daftar Semua Artikel -->
    <div class="card card-shadow">
        <div class="card-header bg-success text-white">
            <strong>Daftar Artikel & Aksi</strong>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $res->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['judul']) ?></td>
                        <td>
                            <?php
                            $kat = $conn->query("SELECT nama_kategori FROM kategori WHERE id_kategori=" . $row['id_kategori'])->fetch_assoc();
                            echo htmlspecialchars($kat['nama_kategori']);
                            ?>
                        </td>
                        <td>
                            <a href="artikel_edit.php?id=<?= $row['id_artikel'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="artikel_hapus.php?id=<?= $row['id_artikel'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
