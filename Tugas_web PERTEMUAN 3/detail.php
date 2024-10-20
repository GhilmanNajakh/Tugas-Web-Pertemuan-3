<?php
include 'database.php';
$db = new Database();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->detailData($id);
} else {
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
          background-color: #f0f2f5;
      }
      .header {
          background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
          color: white;
          padding: 40px 0;
      }
      .header h1 {
          font-family: 'Arial', sans-serif;
          font-weight: bold;
          font-size: 3rem;
          margin-bottom: 0;
      }
      .profile-card {
          border-radius: 15px;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
          margin-top: 30px;
      }
      .profile-card img {
          border-radius: 50%;
          box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
          transition: transform 0.2s;
      }
      .profile-card img:hover {
          transform: scale(1.05);
      }
      .card-body {
          background-color: #ffffff;
          border-radius: 0 0 15px 15px;
          padding: 30px;
      }
      .card-body h5 {
          font-family: 'Verdana', sans-serif;
          font-weight: bold;
          color: #333;
      }
      .detail-section p {
          font-size: 1.1rem;
          line-height: 1.7;
      }
      .btn-outline-primary, .btn-outline-secondary {
          border-width: 2px;
          border-radius: 50px;
          padding: 12px 25px;
      }
      .text-center a:hover {
          background-color: #007bff;
          color: white;
          transition: background-color 0.3s ease;
      }
    </style>
  </head>
  <body>
    <!-- Header Section -->
    <div class="header text-center">
      <h1>Detail Pengguna</h1>
    </div>

    <div class="container mt-5">
      <?php if (!empty($dataUser)) { foreach($dataUser as $user) { ?>
      
      <!-- Profile Card -->
      <div class="card profile-card mx-auto" style="max-width: 600px;">
        <div class="text-center mt-4">
          <img src="file/<?= $user['foto']; ?>" class="rounded-circle img-thumbnail" alt="Foto Profil" style="width: 180px; height: 180px;">
          <div class="mt-3">
            <a href="profil.php?id=<?= $user['id']; ?>" class="btn btn-outline-secondary">Ubah Foto Profil</a>
          </div>
        </div>
        <div class="card-body text-center">
          <h5>Detail Identitas Pengguna</h5>
          <div class="detail-section mt-4">
            <p class="card-text">
              <strong>Nama          </strong> <?= $user['nama']; ?><br>
              <strong>Jenis Kelamin </strong> <?= $user['jeniskelamin']; ?><br>
              <strong>Alamat        </strong> <?= $user['alamat']; ?><br>
              <strong>No HP         </strong> <?= $user['nohp']; ?><br>
            </p>
          </div>
          
          <!-- Back Button -->
          <div class="text mt-4">
            <a href="index.php" class="btn btn-outline-primary">Kembali</a>
          </div>
        </div>
      </div>

      <?php } } else { ?>
        <p class="text-center text-danger mt-5">Data pengguna tidak ditemukan.</p>
      <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
