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
                                <h5 class="mt-4">Kantin PalComTech</h5>

                                <!-- <a href="#" data-toggle="modal" data-target="#pesananTempatModal">Pesan Tempat</a> -->
                                <a href="#" data-toggle="modal" data-target="#pesananTempatModal" class="btn btn-primary">Pesan Tempat</a>
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
                                        "Menu 1",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                    [
                                        "Menu 2",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                    [
                                        "Menu 3",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                    [
                                        "Menu 4",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                    [
                                        "Menu 5",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                    [
                                        "Menu 6",
                                        "../img/menu.png",
                                        "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.",
                                        "Rp. 25,000", // Perkiraan Harga
                                        "Jl. Contoh No. 123", // Lokasi
                                    ],
                                ];
                                ?>

                                <div class="row">
                                    <?php foreach ($areas as $area) { ?>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <a href="konsumen_pay.php"> 
                                                <img class="img-fluid card-img-top" src="<?php echo $area[1]; ?>" alt="Card image cap">
                                                </a>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $area[0]; ?></h5>
                                                    <p class="card-text"><?php echo $area[2]; ?></p>
                                                    <p class="card-text"><strong>Perkiraan Harga:</strong> <?php echo $area[3]; ?></p>
                                                    <div class="d-flex border-top">
                                                        <small class="flex-fill text-center border-end py-2">
                                                            <i class="fa fa-plus text-primary me-2"></i>
                                                        </small>
                                                        <small class="flex-fill text-center border-end py-2">
                                                            <i class="fa fa-minus text-primary me-2"></i>
                                                        </small>
                                                        <small class="flex-fill text-center border-end py-2">

                                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                                        </small>
                                                        
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

<!-- Modal Pesanan Tempat -->
<div class="modal fade" id="pesananTempatModal" tabindex="-1" role="dialog" aria-labelledby="pesananTempatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pesananTempatModalLabel">Pesan Tempat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Pilihan Meja -->
                <div class="mb-3">
                    <label for="pilihanMeja">Pilih Meja:</label>
                    <select class="form-control" id="pilihanMeja">
                        <option value="meja1">Meja 1</option>
                        <option value="meja2">Meja 2</option>
                        <option value="meja3">Meja 3</option>
                        <!-- Tambahkan pilihan meja lainnya sesuai kebutuhan -->
                    </select>
                </div>

                <!-- Form Pilihan Jam -->
                <div class="mb-3">
                    <label for="pilihanJam">Pilih Jam:</label>
                    <select class="form-control" id="pilihanJam">
                        <option value="jam1">09:00 - 11:00</option>
                        <option value="jam2">11:00 - 13:00</option>
                        <option value="jam3">13:00 - 15:00</option>
                        <!-- Tambahkan pilihan jam lainnya sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Pesan</button>
            </div>
        </div>
    </div>
</div>

<?php
include "inc/konsumen_footer.php" ;
?>
