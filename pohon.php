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
        echo "Judul: " . $row['judul'] . "<br>";
        echo "Isi: " . $row['isi'] . "<br>";
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
    <title>Contoh Layout dengan Gambar Background dan Tombol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="assets/css/css.css" rel="stylesheet">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .background-image {
            background-image: url('assets/img/pohon.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 50px;
        }

        .button-container {
            margin-top: 20px;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            position: relative;
            max-width: 80px;
        }

        header ul {
            position: relative;
            display: flex;
        }

        header ul li {
            list-style: none;
        }

        header ul li a {
            display: inline-block;
            color: #fff;
            font-weight: 400;
            margin-left: 40px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <a href="#">
            <h1>Moodsly</h1>
        </a>
        <ul>
            <li><a href="pohon.php">Home</a></li>
            <li><a href="chats.php">Chats</a></li>
            <li><a href="#">Whats New</a></li>
            <li><a href="#">Settings</a></li>
        </ul>

    </header>
    <div class="background-image">
        <h1>Pohon Rahasia</h1>
        <h2>Utarakan semua yang masih mengganggu pikiranmu</h2>
        <h3>ataupun Anda ingin berbagi cerita yang baik/buruk kepada pohon ini</h3>
        <h3>dan juga Anda bisa membaca cerita dari teman-teman yang lain</h3>
        <div class="button-container">
            <a href="add2.php"><button class="btn btn-primary me-2">Buat Rahasia</button></a>
            <a href="read.php"><button class="btn btn-secondary">Melihat</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>