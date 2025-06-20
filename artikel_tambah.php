<?php
include "cek_session.php";
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $id_kategori = $_POST['id_kategori'];
    $id_penulis = 1;

    // Upload file
    $target = "gambar/";
    $nama_file = basename($_FILES["gambar"]["name"]);
    $target_file = $target . $nama_file;
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    $conn->query("INSERT INTO artikel (judul, isi, gambar) VALUES ('$judul', '$isi', '$nama_file')");
    $id_artikel = $conn->insert_id;
    $conn->query("INSERT INTO kontributor (id_penulis, id_kategori, id_artikel) VALUES ($id_penulis, $id_kategori, $id_artikel)");

    echo "<div class='alert alert-success text-center'>Artikel berhasil ditambahkan</div>";
}

$kategori = $conn->query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h3 class="mb-4 text-primary text-center">Tambah Artikel Baru</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" class="form-control" name="judul" id="judul" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Artikel</label>
                <textarea class="form-control" name="isi" id="isi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" class="form-control" name="gambar" id="gambar" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Pilih Kategori</label>
                <select class="form-select" name="id_kategori" id="kategori" required>
                    <option value="" disabled selected>-- Pilih Kategori --</option>
                    <?php while ($k = $kategori->fetch_assoc()): ?>
                        <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Simpan Artikel</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
