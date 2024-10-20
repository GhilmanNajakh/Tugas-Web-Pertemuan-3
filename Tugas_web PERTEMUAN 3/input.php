<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background: url('https://source.unsplash.com/1600x900/?nature,water') no-repeat center center fixed;
        background-size: cover;
        color: #fff;
      }
      .container {
        background: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        margin-top: 5rem;
      }
      h1, h4 {
        text-align: center;
        color: #007bff;
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s, transform 0.3s;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
      }
      .form-label {
        font-weight: bold;
      }
      .form-control {
        border-radius: 0.25rem;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }
      .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
      .mb-4 {
        margin-bottom: 1.5rem !important;
      }
      @media (max-width: 576px) {
        .container {
          margin: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <h4>Tambah Data</h4>
        <hr>

        <!-- Form Tambah Data -->
        <form enctype="multipart/form-data" method="POST" action="proses.php?aksi=tambah">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>

                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin" class="form-select" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>

                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan no hp" required>

                <label for="foto" class="form-label">Foto / Gambar</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
