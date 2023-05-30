<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANGLONG</title>

    <link rel="shortcut icon" href="layout/assets/image/icon1.ico" type="image/x-icon">
    <link rel="stylesheet" href="layout/assets/css/style.css">
</head>
<body>
    <aside>
        <header>
            <a href="index.php">
            <img src="layout/assets/image/logo_baru.png" class="brand">
            </a>
            <div class="user">ALIF SAUM </div>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <img src="layout/assets/image/home.png" alt=""  class="icon"> HOME
                    </a>
                </li>
                <li>
                <a href="index.php?hal=cat_tampil">
                <img src="layout/assets/image/kat.png" alt=""  class="icon">KATEGORI PRODUK
                    </a>
                </li>
                <li>
                <a href="index.php?hal=jns_tampil">
                <img src="layout/assets/image/jenis.png" alt=""  class="icon">JENIS PRODUK
                    </a>
                </li>
                <li>
                <a href="index.php?hal=pr_tampil">
                <img src="layout/assets/image/barang.png" alt=""  class="icon">DAFTAR PRODUK
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        <article>
        <?php

        require_once "inc/Koneksi.php";

        if (isset($_GET['hal'])) {
        require $_GET['hal'] . ".php";
        }else {
            require "main.php";
        }
        ?>
        </article>
        <footer>
            Copyright &copy; 2023. Designed by Mr. Alif Saum
        </footer>
    </main>
</body>
</html>