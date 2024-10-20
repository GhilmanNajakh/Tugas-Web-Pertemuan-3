<?php
    include "database.php";
    $db = new Database;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $dataUser = $db->detailData($id);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data - CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
          background-color: #f7f9fc;
      }
      .container {
          margin-top: 50px;
          background-color: white;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }
      h1, h4 {
          font-family: 'Poppins', sans-serif;
          color: #333;
      }
      .form-label {
          font-weight: bold;
      }
      .btn-primary {
          background-color: #007bff;
          border-color: #007bff;
          border-radius: 50px;
      }
      .btn-primary:hover {
          background-color: #0056b3;
          border-color: #0056b3;
      }
      .text-center {
          margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Data</h1>
        <h4 class="text-center">CRUD OOP PHP</h4>
        <hr class="mt-0">
        <!-- Form Edit Data -->
        <form enctype="multipart/form-data" method="POST" action="proses.php?aksi=update">
            <?php
                foreach($db->detailData($id) as $dataUser) {
            ?>
            <input type="hidden" name="id" value="<?php echo $dataUser["id"]; ?>">
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser["nama"] ?>" required>

                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin" class="form-select" required>
                    <option value="" disabled <?php if(!$dataUser["jeniskelamin"]) echo 'selected'; ?>>Pilih jenis kelamin</option>
                    <option value="Laki-Laki" <?php if($dataUser["jeniskelamin"] == "Laki-Laki") echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($dataUser["jeniskelamin"] == "Perempuan") echo 'selected'; ?>>Perempuan</option>
                </select>

                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser["alamat"] ?>" required>

                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser["nohp"] ?>" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php
                }
            ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
