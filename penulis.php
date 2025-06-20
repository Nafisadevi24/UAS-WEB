<?php
include("ceksession.php");
include("koneksi.php");

// Tambah penulis
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn->query("INSERT INTO penulis (nama_penulis, email, password) VALUES ('$nama', '$email', '$password')");
    header("Location: penulis.php");
}

// Hapus penulis
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM penulis WHERE id_penulis = $id");
    header("Location: penulis.php");
}

$data = $conn->query("SELECT * FROM penulis");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
        }
        .container {
            margin-top: 60px;
            max-width: 900px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">
        <h3 class="mb-4 text-primary text-center">Manajemen Data Penulis</h3>

        <form method="POST" class="row g-3 mb-4">
            <div class="col-md-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama Penulis" required>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-1 d-grid">
                <button name="tambah" class="btn btn-success">+</button>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th width="120">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama_penulis']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td>
                        <a href="penulis_edit.php?id=<?= $row['id_penulis'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?hapus=<?= $row['id_penulis'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus penulis ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="text-end mt-3">
            <a href="dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>
