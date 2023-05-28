<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="assets/css/canvas.css">
    <script src="assets/js/1.js"></script>
    <style>
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
            color: #333;
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
    <canvas></canvas>
</body>

</html>