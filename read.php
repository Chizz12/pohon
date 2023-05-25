<!DOCTYPE html>
<html>
<head>
    <title>Contoh Layout dengan Tombol Post dan Get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }

        .button-container {
            margin-top: 20px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <h1>Ambil Pesan</h1>
                <?php
                include 'config.php';

                // Menampilkan data secara acak
                if (isset($_POST['get'])) {
                    // Mengambil data secara acak dari database
                    $sql = "SELECT * FROM tabel_data ORDER BY RAND() LIMIT 1";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        echo "<h4>Judul: " . $row['judul'] . "</h4>";
                        echo "<p>Isi: " . $row['isi'] . "</p>";
                    } else {
                        echo "Tidak ada data yang ditemukan.";
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary <?php if (isset($_POST['get'])) { echo 'hidden'; } ?>" name="get">Get</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
