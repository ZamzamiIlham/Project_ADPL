<?php include 'agro_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="agro_style.css">
</head>
<body>
    <section class="add__section container">
        <form action="" method="post">
        <div class="back__tombol">
            <i class="ri-arrow-left-circle-fill"></i>
            <a href="agro_dashboard.php">
            <h1>Halaman Produk</h1>
            </a>
        </div>
        <div class="add__input">
            <div class="add__form">
                <div class="input__box">
                    <span> Nama </span>
                    <input type="text" name="nama" require placeholder="Masukan nama produk">
                </div>
                <div class="input__box">
                    <span> Deskripsi </span>
                    <input type="text" name="nama" require placeholder="Masukan nama produk">
                </div>
                <div class="input__box">
                    <span> Gambar </span>
                    <input type="submit" value="add product" name="add_product" class="btn__image" accept="image/jpg, image/jpeg, image/png">
                </div>
                <div class="confirm">
                <div class="confirm__button">
                    <a href="agro_readProduct.php"><h4>TAMBAH</h4></a>
                </div>
                </div>
            </div>
        </div>
        </form>
    </section>
</body>
</html>