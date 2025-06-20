<?php
include "koneksi.php";

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM artikel WHERE id_artikel=$id")->fetch_assoc();
$terkait = $conn->query("SELECT * FROM artikel WHERE id_artikel != $id ORDER BY tanggal DESC LIMIT 5");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul'] ?> - Blog Dinamis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .sidebar {
            border-left: 2px solid #dee2e6;
            padding-left: 20px;
        }
        .judul-artikel {
            font-size: 2rem;
            font-weight: bold;
        }
        .isi-artikel {
            line-height: 1.7;
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

<div class="container d-flex flex-wrap">
    <div class="col-md-8">
        <div class="mb-4">
            <h2 class="judul-artikel"><?= $data['judul'] ?></h2>
            <p class="text-muted">Dipublikasikan pada <?= date('d M Y, H:i', strtotime($data['tanggal'])) ?></p>
        </div>
        <?php if (!empty($data['gambar'])): ?>
            <img src="gambar/<?= $data['gambar'] ?>" class="img-fluid rounded mb-3" alt="Gambar Artikel">
        <?php endif; ?>
        <div class="isi-artikel">
            <p><?= nl2br($data['isi']) ?></p>
        </div>
    </div>

    <div class="col-md-4 sidebar mt-4 mt-md-0">
        <form action="artikel_cari.php" method="get" class="mb-4">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Cari judul...">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
        </form>

        <h5>Artikel Terkait</h5>
        <ul class="list-group list-group-flush">
            <?php while ($row = $terkait->fetch_assoc()): ?>
                <li class="list-group-item">
                    <a href="detail_artikel.php?id=<?= $row['id_artikel'] ?>">
                        <?= $row['judul'] ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>

<footer>
    &copy; <?= date('Y') ?> Blog Dinamis. All rights reserved.
</footer>

</body>
</html>
