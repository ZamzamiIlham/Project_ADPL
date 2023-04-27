<?php include 'html.php' ?>
<body>
    <section class="formKemitraan container">
        <div class="back__tombol">
            <i class="ri-arrow-left-circle-fill"></i>
            <a href="mitra_kemitraanDetail.php">
                <h1>Halaman Kemitraan</h1>
            </a>
        </div>
        <div class="formKemitraangrid grid">
            <div class="formleft grid">
                <div class="formNama">
                    <p>Nama</p>
                    <input type="text" placeholder="Masukan Namamu">
                </div>
                <div class="formNik">
                    <p>NIK</p>
                    <input type="text" placeholder="NIK 16 Digit">
                </div>
                <div class="formAlasan">
                    <p>Alasan Bermitra</p>
                    <input type="text" placeholder="Berikan Alasanmu">
                </div>
            </div>
            <div class="formCenter grid">
                <div class="formUsaha">
                        <p>Nama Usaha</p>
                        <input type="text" placeholder="Masukan Nama Usaha">
                    </div>
                    <div class="formAlamat">
                        <p>Alamat</p>
                        <input type="text" placeholder="Masukan Alamat">
                    </div>
                    <div class="formDeskripsi">
                        <p>Deskripsi Usaha</p>
                        <input type="text" placeholder="Berikan Deskripsi singkat">
                    </div>
                </div>
            <div class="formRight grid">
                <div class="formTelepom ">
                        <p>No Telepon</p>
                        <input type="text" placeholder="No Handphone">
                    </div>
                    <div class="formNik">
                        <p>Kode Pos</p>
                        <input type="text" placeholder="Kode Pos">
                    </div>
                    <div class="formAlasan">
                        <p>Permintaan Suply</p>
                        <input type="text" placeholder="Apa yang kamu butuhkan">
                    </div>
                </div>
            </div>
            <div class="buttonForm">
                <button  class="formMitra button" onclick="location.href='#'" >
                Kirim
                </button> 
            </div>
        </div>
    </section>
</body>
