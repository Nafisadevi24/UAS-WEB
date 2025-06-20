<?php
include("ceksession.php");
include("koneksi.php");

// Tambah artikel
if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "gambar/$gambar");

    $id_penulis = $_SESSION['id_penulis'];
    $id_kategori = $_POST['id_kategori'];

    $conn->query("INSERT INTO artikel (tanggal, judul, isi, gambar) VALUES (NOW(), '$judul', '$isi', '$gambar')");
    $id_artikel = $conn->insert_id;
    $conn->query("INSERT INTO kontributor (id_penulis, id_kategori, id_artikel) VALUES ($id_penulis, $id_kategori, $id_artikel)");

    header("Location: artikel.php");
}

$kategori = $conn->query("SELECT * FROM kategori");
$artikel = $conn->query("SELECT a.*, k.nama_kategori 
    FROM artikel a 
    JOIN kontributor c ON a.id_artikel = c.id_artikel 
    JOIN kategori k ON c.id_kategori = k.id_kategori
    WHERE c.id_penulis = " . $_SESSION['id_penulis']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah & Daftar Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        img {
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4 mb-4">
        <h3 class="mb-4 text-primary">Tambah Artikel Baru</h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Isi Artikel</label>
                <textarea class="form-control" name="isi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" name="id_kategori" required>
                    <option disabled selected>Pilih kategori</option>
                    <?php while ($kat = $kategori->fetch_assoc()) { ?>
                        <option value="<?= $kat['id_kategori'] ?>"><?= $kat['nama_kategori'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
            </div>
            <button type="submit" name="tambah" class="btn btn-success">Simpan Artikel</button>
        </form>
    </div>

    <div class="card p-4">
        <h4 class="mb-3">Daftar Artikel Anda</h4>
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 30%;">Judul</th>
                    <th style="width: 25%;">Kategori</th>
                    <th style="width: 45%;">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $artikel->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['judul']) ?></td>
                    <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                    <td><img src="gambar/<?= htmlspecialchars($row['gambar']) ?>" class="img-fluid rounded" style="max-height: 120px;"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
