<?php 
include 'html.php';
?>
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