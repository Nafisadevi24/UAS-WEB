<?php
include "koneksi.php";

$id = $_GET['id'];
$kategori = $conn->query("SELECT * FROM kategori WHERE id_kategori=$id")->fetch_assoc();
$artikel = $conn->query("SELECT * FROM artikel 
    JOIN kontributor USING(id_artikel) 
    WHERE id_kategori=$id ORDER BY tanggal DESC");
$daftar_kategori = $conn->query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori: <?= $kategori['nama_kategori'] ?> - Blog Dinamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .judul-artikel {
            font-weight: bold;
            font-size: 1.25rem;
        }
        footer {
            margin-top: 50px;
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Blog Dinamis</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="row">
        <!-- Konten Utama -->
        <div class="col-md-8">
            <h2 class="mb-4">Kategori: <?= $kategori['nama_kategori'] ?></h2>
            <?php if ($artikel->num_rows > 0): ?>
                <?php while ($row = $artikel->fetch_assoc()): ?>
                    <div class="mb-4 p-3 border rounded bg-white shadow-sm">
                        <div class="judul-artikel mb-1">
                            <a href="detail_artikel.php?id=<?= $row['id_artikel'] ?>" class="text-decoration-none text-dark">
                                <?= $row['judul'] ?>
                            </a>
                        </div>
                        <small class="text-muted"><?= date('d M Y, H:i', strtotime($row['tanggal'])) ?></small>
                        <p class="mt-2"><?= substr(strip_tags($row['isi']), 0, 120) ?>...</p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-muted">Belum ada artikel dalam kategori ini.</p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Pencarian -->
            <div class="mb-4">
                <form action="artikel_cari.php" method="get" class="d-flex">
                    <input type="text" name="q" class="form-control me-2" placeholder="Cari judul...">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form>
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <h5>Kategori</h5>
                <div class="list-group">
                    <?php while ($row = $daftar_kategori->fetch_assoc()): ?>
                        <a href="kategori_artikel.php?id=<?= $row['id_kategori'] ?>" class="list-group-item list-group-item-action<?= $row['id_kategori'] == $id ? ' active' : '' ?>">
                            <?= $row['nama_kategori'] ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- Tentang -->
            <div class="card p-3 bg-light">
                <h6>Tentang</h6>
                <p class="mb-0">Blog artikel dinamis yang menyajikan tulisan berdasarkan kategori pilihan Anda.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    &copy; <?= date('Y') ?> Blog Dinamis - Semua Hak Dilindungi
</footer>

</body>
</html>
