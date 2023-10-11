<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mobil Porsche Inputan User</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
            font-size: 18px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body><header>
        <h1>List Mobil Porsche</h1>
        <h5>this page is under development - Sorry</h5>
    </header>


    <ul>
        <li><a class="Web1.html" href="Web1.html">Home</a></li>
        <li><a href="boutme.html">About Me</a></li>
    </ul>


    <div id="container">
        <form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $model = $_POST["model"];
                $harga = $_POST["harga"];
                $password = $_POST["password"];

                echo "<h2>Data yang Anda kirimkan:</h2>";
                echo "<p><strong>Model Mobil:</strong> $model</p>";
                echo "<p><strong>Harga Mobil:</strong> Rp $harga</p>";
                echo "<h4>Data yang Anda kirimkan akan kami masukkan di next update</h4>";
                echo "<h2>TERIMA KASIH</h2>";
            } else {
                echo "<p>Form ini harus disubmit melalui halaman sebelumnya.</p>";
            }
            ?>
        </form>
    </div>
    <footer>
        <p>Copyright &copy; 2023 List Mobil Porsche By Rangga</p>
    </footer>
</body>
</html>
