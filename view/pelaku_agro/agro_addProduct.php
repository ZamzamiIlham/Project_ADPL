<?php include 'html.php'; ?>
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