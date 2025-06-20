<?php 
include "koneksi.php";

$artikel = $conn->query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 7");
$kategori = $conn->query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Dinamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Artikel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-light text-center py-5">
    <div class="container">
        <h1 class="display-5 fw-bold">Selamat Datang di Blog Kami!</h1>
        <p class="lead">Blog Catatan Wisata dan Jalan-jalan</p>
    </div>
</header>

<div class="container my-4">
    <div class="row">
        <!-- Konten Utama -->
        <div class="col-md-8">
            <div class="row">
                <?php while ($row = $artikel->fetch_assoc()): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php
                            $gambarFile = $row['gambar'];
                            $gambarPath = 'gambar/' . $gambarFile;

                            if (!empty($gambarFile) && file_exists($gambarPath)) {
                                echo '<img src="' . $gambarPath . '" class="card-img-top" style="height:180px; object-fit:cover;" alt="Gambar">';
                            } else {
                                echo '<img src="gambar/default.jpg" class="card-img-top" style="height:180px; object-fit:cover;" alt="Gambar default">';
                            }
                        ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul'] ?></h5>
                            <p class="card-text"><?= substr(strip_tags($row['isi']), 0, 100) ?>...</p>
                            <a href="detail_artikel.php?id=<?= $row['id_artikel'] ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Pencarian -->
            <div class="mb-4">
                <h5>Pencarian</h5>
                <form action="artikel_cari.php" method="get" class="d-flex">
                    <input type="text" class="form-control me-2" name="q" placeholder="Tulis kata kunci...">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form>
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <h5>Kategori</h5>
                <div class="list-group">
                    <?php while ($row = $kategori->fetch_assoc()): ?>
                        <a href="kategori_artikel.php?id=<?= $row['id_kategori'] ?>" class="list-group-item list-group-item-action">
                            <?= $row['nama_kategori'] ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- Tentang -->
            <div>
                <h5>Tentang</h5>
                <p>Ini adalah blog dinamis sederhana yang dibuat menggunakan PHP dan MySQL. Menyediakan konten jalan-jalan dan wisata yang menarik untuk Anda baca.</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3">
    &copy; <?= date('Y') ?> Blog Dinamis - Artikel
</footer>

</body>
</html>
