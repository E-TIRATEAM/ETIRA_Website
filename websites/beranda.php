<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisata Tirta Agung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Tirta Agung" name="keywords">
    <meta content="Tirta Agung merupakan destinasi wisata yang berlokasi di pedesaan, tepatnya di Sukosari Kidul..." name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start - Membuat animasi loading -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <!-- Fungsi container-fluid membuat layout lebih besar dari class container -->
    <div class="container-fluid position-relative p-0">
        <!-- Class navbar dibuat untuk membuat navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <!-- Class navbar-brand digunakan untuk menampung logo di navigation bar -->
            <a href="" class="navbar-brand p-0">
                <h2 class="text-primary m-0"><img src="../assets/img/logo.png" alt="Logo">&nbsp</i> Tirta Agung</h2>
            </a>
            <!-- Class navbar-toggler digunakan untuk memunculkan icon ketika layout mengecil - responsive mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <!-- Menampung data menu ke dalam navbar-toggler ketika dikecilkan -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="beranda.php" class="nav-item nav-link active">Beranda</a>
                    <a href="tentang.php" class="nav-item nav-link">Tentang</a>
                    <a href="destinasi.php" class="nav-item nav-link">Destinasi</a>
                    <!-- Membuat menu dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu m-0">
                            <a href="fasilitas.php" class="dropdown-item">Fasilitas</a>
                            <a href="paket.php" class="dropdown-item">Paket</a>
                            <a href="pemesanan.php" class="dropdown-item">Pemesanan</a>
                        </div>
                    </div>
                    <a href="kontak.php" class="nav-item nav-link">Kontak</a>
                </div>
                <a href="https://drive.google.com/drive/folders/1hYZxZ7pf1oYR_nZmxNfQF-hb2_C1OS8r?usp=sharing" class="btn btn-primary rounded-pill py-2 px-4">Download</a>
            </div>
        </nav>

        <!-- Fungsi container-fluid membuat layout lebih besar dari class container -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <!-- Fungsi container membuat layout lebih mengecil -->
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Nikmati Liburanmu di Wisata Tirta Agung</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Abadikan moment indah bersama keluarga dan kerabat anda di sini, nikmati kuliner dan suasana pedesaan yang asri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Tentang Start -->
    <!-- Fungsi container-xxl membuat layout menjadi lebih besar -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- col-lg, col-md untuk membuat grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../assets/img/aboutt.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Wisata</h6>=
                    <h1 class="mb-4">Selamat Datang di <span class="text-primary"> Wisata Tirta Agung </span></h1>
                    <p class="mb-4">Wisata Tirta Agung ini berlokasi di dusun Sokleh timur Desa Sukosari Kidul Kecamatan Sumber Wringin Kabupaten Bondowoso di bagian timur dekat dengan kawasan wisata kawah ijen dan kawah wurung. Karena tempatnya di desa yang sejuk dan masih alami, seringkali masyarakat luar kota menyebutnya kampung wisata Tirta Agung.</p>
                    <p>Kamu bisa berkunjung ke wisata eksotis ini di hari apa saja mulai senin sampai minggu, jam buka mulai pukul 07.00 sampai 21.00 wib namun untuk kolam renang dibuka sampai pukul 16.00 wib demi keselamatan wisatawan.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="tentang.php">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang End -->

    <!-- Service Start -->
    <!-- Fungsi container-xxl membuat layout menjadi lebih besar -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Fasilitas</h6>
                <h1 class="mb-5">Fasilitas Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-university text-primary mb-4"></i>
                            <h5>Gazebo Apung</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-swimming-pool text-primary mb-4"></i>
                            <h5>Kolam Renang</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-mosque text-primary mb-4"></i>
                            <h5>Musholla</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-bath text-primary mb-4"></i>
                            <h5>Kamar Mandi</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-coffee text-primary mb-4"></i>
                            <h5>Cafe Kala Senja</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-cloud text-primary mb-4"></i>
                            <h5>Beanbag</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5>Aula</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp text-center" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4"><a href="fasilitas.php">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h5>Flying Fox</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Packakge Start -->
    <!-- Fungsi container-xxl membuat layout menjadi lebih besar -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pilihan Paket</h6>
                <h1 class="mb-5">Paket Menarik <span class="text-primary text-uppercase">E-TIRA</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/room-1.jpeg" alt="">
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">AULA</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Di sini kami juga menyediakan aula yang bisa digunakan untuk berbagai macam keperluan, seperti pernikahan, meeting, acara ulang tahun, reuni, dan lain-lain.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4 center" href="paket.php">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/room-2.jpg" alt="">
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">KALA SENJA</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Ingin menikmati indahnya pemandangan area persawahan dengan indahnya matahari terbenam sambil menikmati hidangan kuliner lezat? 
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="paket.php">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../assets/img/room-3.jpeg" alt="">
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0 ">CAMPING GROUND</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Jika kamu ingin menikmati serunya momen bersama keluarga maupun sahabatmu. Kamu juga bisa camping di tempat ini.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="paket.php">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Testimonial Start -->
    <!-- Fungsi container-xxl membuat layout menjadi lebih besar -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Ulasan</h6>
                <h1 class="mb-5">Apa Kata Mereka Tentang Kami</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <!-- Kode PHP untuk menampilkan ulasan dari backend -->
                <?php
                    require "../koneksi.php";
                    $GetTable = mysqli_query($conn, "SELECT * FROM tb_ulasan ORDER BY id DESC LIMIT 15");
                    while ($GetData = mysqli_fetch_array($GetTable)) {
                        echo "
                            <div class='testimonial-item bg-white text-center border p-4'>
                                <img class='bg-white rounded-circle shadow p-1 mx-auto mb-3' 
                                src='../assets/img/user.png' style='width: 80px; height: 80px;'>
                                <h5 class='mb-0'>$GetData[nama]</h5>
                                <p>$GetData[email]</p>
                                <p class='mb-0'>$GetData[pesan]</p>
                            </div>
                        ";
                    }
                ?>
                <!-- End PHP -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="beranda.php"> 
                        <img src="../assets/img/logo.png" style="margin-left: 10%;" alt="logo tirta" width="80%">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Tirta Agung</h4>
                    <p> Tirta Agung merupakan destinasi wisata yang berlokasi di pedesaan, tepatnya di Sukosari Kidul. Destinasi wisata ini menyugukan pemandangan alam buatan yang tidak kalah menarik dengan keindahan alam lainnya. </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sukosari Kidul, Sumber Wringin, Kabupaten Bondowoso</p>
                    <a href="https://wa.me/+6282338906182" class="button-link"><p class="fa fa-phone-alt me-3 mb-3"></p> +62 823-3890-6182</a>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>tirtagung.official@gmail.com</p>
                    <div class="d-flex pt-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Ikuti Kami</h4>
                    <a href="https://www.facebook.com/tirta.agung.315428" class="button-link">
                        <button class="btn btn-outline-light" style="border-radius: 70%; width: 42px; height: 42px;">
                           <span class="fab fa-facebook-f"></span>
                        </button>
                        &nbsp Facebook
                    </a>
                    <br>
                    <a href="https://instagram.com/wisata.tirta_agung?utm_medium=copy_link" class="button-link">
                        <button class="btn btn-outline-light" style="border-radius: 70%; width: 42px; height: 42px;">
                           <span class="fab fa-instagram"></span>
                        </button>
                        &nbsp Instagram
                    </a>
                    <br>
                    <a href="https://youtube.com/channel/UCNQ01RIpzbjtguvGydBI1ww" class="button-link">
                        <button class="btn btn-outline-light" style="border-radius: 70%; width: 42px; height: 42px;">
                           <span class="fab fa-youtube"></span>
                        </button>
                        &nbsp Youtube
                    </a> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Coryright 2021</a>
                        Designed By <a class="border-bottom">E-TIRA Team</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="beranda.php">Beranda</a>
                            <a href="kontak.php">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>