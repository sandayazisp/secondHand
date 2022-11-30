<?php require "header.php"; ?>
<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/bg-banner.webp');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;
    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3 class="text-uppercase">Tentang Kami</h3>
            <p>Beranda > <a href="#">Tentang Kami</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pt-4 pb-4">
    <div class="row no-gutter">
        <div class="col-sm-8 text-justify">
            <h4 class="text-center text-uppercase">secondhand Thrift</h4>
            <p>Sebuah website penjualan online untuk para penjual baju thrift. Dimana website tersebut akan mempermudah penjual maupun pembeli dalam menjual dan membeli produk tanpa harus menunggu adanya event dan kesusahan dalam mencari toko. Website ini dapat diakses kapanpun, dimanapun,dan oleh siapapun.</p>
            <p>Thrift merupakan berbagai produk seken atau bekas baik lokal maupun impor. Biasanya, barang-barang ini ditawarkan dengan harga yang sangat murah. System ini membuka dan menyediakan berbagai jenis baju thrift mulai dari kemeja, hoodie, kaos, sweater, dan lain lain.</p>           
        </div>
        <div class="col-sm-4">
            <img src="assets/img/banner-thrift.jpg" height="300px" width="100%">
        </div>
    </div>
</div>
<?php require "footer.php"; ?>