<?php
include "inc/konsumen_header.php" ;
?>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper container">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-xl-12">
                                <h5 class="mt-4">Kantin Favorit berdasarkan lokasi Anda</h5>
                                <hr>
                                
                                <!-- Filter Order -->
                                <div class="btn-group mb-3">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Urutkan Berdasarkan
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="?order=terlaris">Terlaris</a>
                                        <a class="dropdown-item" href="?order=terdekat">Terdekat</a>
                                        <a class="dropdown-item" href="?order=termurah">Termurah</a>
                                    </div>
                                </div>

                                <!-- Form Pencarian -->
                                <form action="hasil_pencarian.php" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari..." name="keyword">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                </form>

                                <?php
                                $areas = [
                                    [
                                        "Kantin PalComTech",
                                        "../img/kantin/1.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Sehati Cafe",
                                        "../img/kantin/2.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Sederhana",
                                        "../img/kantin/3.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Bundo Kanduang",
                                        "../img/kantin/3.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Kantin Bude Sri",
                                        "../img/kantin/4.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Pecel Lele Pak de",
                                        "../img/kantin/5.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    [
                                        "Angkringan Simpang Lima",
                                        "../img/kantin/6.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                        ["Nasi Goreng", "Mie Goreng", "Ayam Goreng"] // 3 Menu
                                    ],
                                    // Tambahkan data lainnya sesuai kebutuhan
                                ];
                                ?>

                                <div class="row">
                                    <?php foreach ($areas as $area) { ?>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <a href="konsumen_kantin.php"> 
                                                <img class="img-fluid card-img-top" src="<?php echo $area[1]; ?>" alt="Card image cap">
                                                </a>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $area[0]; ?></h5>
                                                    <p class="card-text"><?php echo $area[2]; ?></p>
                                                    <p class="card-text"><strong>Perkiraan Harga:</strong> <?php echo $area[3]; ?></p>
                                                    <p class="card-text"><strong>Lokasi:</strong> <?php echo $area[4]; ?></p>
                                                    <div class="d-flex border-top">
                                                        <?php foreach ($area[5] as $menu) { ?>
                                                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-utensils text-primary me-2"></i><?php echo $menu; ?></small>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "inc/konsumen_footer.php" ;
?>
