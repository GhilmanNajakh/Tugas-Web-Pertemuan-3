<?php
include "database.php";
$db = new Database;

// Retrieve data only once and store it in a variable
$dataUsers = $db->tampilData();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 15px;
            transition: transform 0.2s;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            font-size: 1.25rem;
        }
        .btn {
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .action-buttons {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <a href="input.php" class="btn btn-success btn-lg mb-3">Tambah Data</a>

        <div class="row">
            <?php
            foreach ($dataUsers as $dataUser) {
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <?php echo htmlspecialchars($dataUser['nama']); ?>
                    </div>
                    <div class="card-body">
                        <p><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($dataUser['jeniskelamin']); ?></p>
                        <p><strong>Alamat:</strong> <?php echo htmlspecialchars($dataUser['alamat']); ?></p>
                        <p><strong>No Hp:</strong> <?php echo htmlspecialchars($dataUser['nohp']); ?></p>
                        <div class="action-buttons">
                            <a href="edit.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="proses.php?id=<?php echo $dataUser['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            <a href="detail.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
