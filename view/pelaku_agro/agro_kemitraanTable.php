<?php
include 'html.php'
?>
<body>
<section class="kemitraan__section container">
    <div class="back__tombol">
        <i class="ri-arrow-left-circle-fill"></i>
        <a href="agro_kemitraan.php">
            <h1>Halaman Kemitraan</h1>
        </a>
    </div>
    <div class="kemitraan__table">
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengaju</th>
                    <th>Detail</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Bapak Katman</td>
                    <td>
                    <a href="agro_kemitraanDetail.php">
                        <div class="td__detail">
                            <p class="td__">DETAIL</p>
                        </div>
                    </td>
                    </a>
                    <td>
                        <div class="td__status">
                            <p class="td__setuju">SETUJU</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bapak Katman</td>
                    <td>
                    <a href="">
                        <div class="td__detail">
                            <p class="td__">DETAIL</p>
                        </div>
                    </td>
                    </a>
                    <td>
                        <div class="td__status">
                            <p class="td__batal">BATAL</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bapak Katman</td>
                    <td>
                    <a href="">
                        <div class="td__detail">
                            <p class="td__">DETAIL</p>
                        </div>
                    </td>
                    </a>
                    <td>
                        <div class="td__status">
                            <p class="td__">PROSES</p>
                        </div>
                    </td>
                </tr>
                <tbody>
            </table>
        </div>
    </div>
</section>
</body>