<?php include 'agro_header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaku agro_dahsboard</title>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="agro_style.css">
</head>
<body>
<!---------------- HEADER ---------------->
<form action="" method="post" id="my form">
    <section class="dashboard section">
        <div class="dashboard__shape">
            <a href="agro_product.php">
                <div class="dashboard__info">
                    <i class="ri-dropbox-fill"></i>
                    <div class="info__produk">
                        <h1 class="produk__title">Jumlah Produk</h1>
                        <h1 class="produk__jumlah">10</h3>
                    </div>
                </div>
            </a>
       </div>
       <div class="dashboard__tambah">
            <i class="ri-add-circle-fill"></i>
            <a href="agro_addProduct.php">
                <h1>Tambah Produk</h1>
            </a>
       </div>
    </section>
</form>    
</body>
</html>