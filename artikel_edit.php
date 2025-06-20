<?php
include 'ceksession.php';
include 'koneksi.php';

$id = $_GET['id'];
$res_kat = $conn->query("SELECT * FROM kategori");
$artikel = $conn->query("SELECT a.*, k.id_kategori FROM artikel a 
    JOIN kontributor k ON a.id_artikel = k.id_artikel 
    WHERE a.id_artikel = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];
    $id_kategori = $_POST['id_kategori'];

    $conn->query("UPDATE artikel SET judul='$judul', isi='$isi', gambar='$gambar' WHERE id_artikel=$id");
    $conn->query("UPDATE kontributor SET id_kategori=$id_kategori WHERE id_artikel=$id");

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
        }
        .container {
            max-width: 700px;
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h3 class="mb-4 text-center text-primary">Edit Artikel</h3>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($artikel['judul']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi</label>
                <textarea name="isi" class="form-control" rows="5" required><?= htmlspecialchars($artikel['isi']) ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama File Gambar</label>
                <input type="text" name="gambar" class="form-control" value="<?= htmlspecialchars($artikel['gambar']) ?>">
                <div class="form-text">Masukkan nama file dari folder <code>gambar/</code>, contoh: <code>ai-2023.jpg</code></div>
            </div>

            <div class="mb-4">
                <label class="form-label">Kategori</label>
                <select name="id_kategori" class="form-select" required>
                    <?php while ($k = $res_kat->fetch_assoc()): ?>
                        <option value="<?= $k['id_kategori'] ?>" <?= $k['id_kategori'] == $artikel['id_kategori'] ? 'selected' : '' ?>>
                            <?= $k['nama_kategori'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="text-end">
                <a href="dashboard.php" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
