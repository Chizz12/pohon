<?php
include 'config.php';
// Mengatur tindakan saat tombol "Post" ditekan
if (isset($_POST['post'])) {
    // Mendapatkan data yang akan diinputkan (misalnya "nama" dan "email")
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Menyimpan data ke database
    $sql = "INSERT INTO tabel_data (judul, isi) VALUES ('$judul', '$isi')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan.";

        header("Refresh: 2; URL=pohon.php"); // Mengarahkan ke halaman pohon.php setelah 2 detik
    exit(); // Menghentikan eksekusi script setelah redirect
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

// Mengatur tindakan saat tombol "Get" ditekan
if (isset($_POST['get'])) {
    // Mengambil data secara acak dari database
    $sql = "SELECT * FROM tabel_data ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "Nama: " . $row['nama'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contoh Program PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-4HHHkx5JS0V0XmTySrrlO33cFA2AZbbSN2b2nSNSgEehx3qPDhGwJPF/0glNim9x" crossorigin="anonymous"></script>
    <style>
        .container {
            margin-top: 50px;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Berbagi Ceritamu</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary" name="post">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>