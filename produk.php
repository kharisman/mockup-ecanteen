<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Canteen - Food & Drink</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/logo_top.png" alt="Icon" style="width: 60px; ">
                    </div>
                    <h1 class="m-0 text-primary">E CANTEEN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Produk Kami</a>
                        
                        <a href="#" class="nav-item nav-link">Pesanan

                            <span class="badge bg-primary text-white" id="cart-badge">0</span>
                        </a>
                    </div>
                    <a href="app/index.php" class="btn btn-primary px-3 d-none d-lg-flex">Anda Punya Kantin ?</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->




        


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/kantin/1.png">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Kantin PalComTech  </h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href=""> <i class="fab fa-whatsapp"></i> Hubungi Pengelola Kantin</a>
                    </div>
                </div>
            </div>
        </div> 
        <!-- About End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div id="cart" class="cart d-none ">
                    <h4>Your Cart</h4>
                    <ul id="cart-items" class="cart-items">
                        <!-- Cart items will be dynamically added here -->
                    </ul>
                    <p>Total: <span id="cart-total">Rp. 0</span></p>
                </div>
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Menu Tersedia</h1>
                            <!-- <p>Jelajahi berbagai pilihan makanan dan minuman lezat dari kantin-kantin favorit yang terletak dekat dengan lokasi Anda. Kami telah memilihkan Anda beberapa tempat makan populer untuk menikmati kuliner lokal dan internasional di sekitar Anda.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Pomo</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Terlaris</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">Termurah</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 20%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Kantin</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 1</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 30%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Cafe</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 2</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 20%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Rumah Makan Padang</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 3</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 30%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Kantin</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 4</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 20%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Angkringan</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 5</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/menu.png" alt=""></a>
                                        <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Diskon 30%</div>
                                        <!-- <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Angkringan</div> -->
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Rp. 10.000</h5>
                                        <a class="d-block h5 mb-2" href="">Lunch Paket 6</a>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2 increase-quantity"><i class="fa fa-plus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center border-end py-2 decrease-quantity"><i class="fa fa-minus text-primary me-2"></i></small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-check-circle text-primary me-2"></i><span class="item-quantity">0</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="">Lihat leibh banyak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.png" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Bayar Tagihan, Isi Pulsa, Semua Ada di E Canteen! </h1>
                                    <p>Di E Canteen juga tersedia pulsa, token PLN, PDAM, dan semua pembayaran</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-user-alt me-2"></i>Daftar Sekarang</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-download me-2"></i>Download Aplikasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Agents</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Apa Kata Mereka</h1>
                    <p>Yuk kita dengar langsung dari mereka. Berikut adalah beberapa pendapat dan pengalaman yang mereka bagikan:.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Pembeli</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Pemilik Kantin</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Konsumen</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan basuki Rahmat</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">Tentang Kami</a>
                        <a class="btn btn-link text-white-50" href="">Hubungi Kami</a>
                        <a class="btn btn-link text-white-50" href="">Produk Kami</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Ketikan Email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Berlangganan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">E Canteen</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuItems = document.querySelectorAll(".property-item");
        const cartItems = document.getElementById("cart-items");
        const cartTotal = document.getElementById("cart-total");

        let cartData = [];
        let totalOrderQuantity = 0;

        function updateCart() {
            cartItems.innerHTML = "";
            let total = 0;

            cartData.forEach((item) => {
                const cartItem = document.createElement("li");
                cartItem.innerHTML = `
                    ${item.name} - Rp. ${item.price} x ${item.quantity}
                    <button class="remove-item" data-name="${item.name}">Remove</button>
                `;
                cartItems.appendChild(cartItem);
                total += item.price * item.quantity;
            });

            cartTotal.textContent = `Rp. ${total}`;
            updateTotalOrderQuantity(); // Update the total order quantity
        }

        function addToCart(name, price) {
            const existingItem = cartData.find((item) => item.name === name);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cartData.push({ name, price, quantity: 1 });
            }
            updateCart();
        }

        function updateTotalOrderQuantity() {
            totalOrderQuantity = cartData.reduce((total, item) => total + item.quantity, 0);
        }

        menuItems.forEach((item) => {
            const itemName = item.querySelector("a").textContent;
            const itemPrice = parseInt(item.querySelector(".text-primary").textContent.split(" ")[1].replace(".", ""), 10);
            const addToCartButton = item.querySelector(".increase-quantity");
            const removeFromCartButton = item.querySelector(".decrease-quantity");
            const itemQuantityDisplay = item.querySelector(".item-quantity");

            let quantity = 0;

            // Function to update the quantity display
            function updateQuantity() {
                itemQuantityDisplay.textContent = quantity;
            }

            addToCartButton.addEventListener("click", () => {
                quantity++;
                updateQuantity();
                addToCart(itemName, itemPrice);
                // Show a toastr notification with the total order quantity
                toastr.success(`Added to cart. Total order quantity: ${totalOrderQuantity}`);
                $('#cart-badge').html(totalOrderQuantity);
            });

            removeFromCartButton.addEventListener("click", () => {
                if (quantity > 0) {
                    quantity--;
                    updateQuantity();
                }
            });
        });

        cartItems.addEventListener("click", (e) => {
            if (e.target.classList.contains("remove-item")) {
                const itemName = e.target.getAttribute("data-name");
                const itemIndex = cartData.findIndex((item) => item.name === itemName);
                if (itemIndex !== -1) {
                    cartData.splice(itemIndex, 1);
                    updateCart();
                }
            }
        });
    });
</script>



</body>

</html>