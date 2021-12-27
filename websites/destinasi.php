<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisata Tirta Agung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

    <link rel="stylesheet" href="../assets2/default.css" />
    <link rel="stylesheet" href="../assets2/component.css" />
    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>
<style>
    * {
        font-family: 'Nunito', sans-serif;
    }
</style>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h2 class="text-primary m-0"><img src="../assets/img/logo.png" alt="Logo">&nbsp</i>Tirta Agung</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="beranda.php" class="nav-item nav-link">Beranda</a>
                    <a href="tentang.php" class="nav-item nav-link">Tentang</a>
                    <a href="destinasi.php" class="nav-item nav-link active">Destinasi</a>
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

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Destinasi</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" class="text-primary">Beranda</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Destinasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Destinasi Start -->
    <section data-bs-version="5.1" class="header16 cid-sObnjUl2MS mbr-fullscreen mbr-parallax-background" id="header16-0">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destinasi</h6>
                <h1>Destinasi Terbaik</h1>
            </div>
			
			<div class="main">
				<ul id="og-grid" class="og-grid">
                    <?php

                    include_once '../koneksi.php';
                    $sql = "SELECT * FROM galeri";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_object($result)) {
                    ?>
					<li>
						<a href="javascript:void(0);" data-largesrc="../admin-panel/DataUpload/<?php echo $row->image; ?>" data-title="<?php echo $row->nama; ?>" data-description="<?php echo $row->description;?>">
							<img src="../admin-panel/DataUpload/<?php echo $row->image; ?>" style="width: 320px; height: 200px;" class="img-responsive" alt="img01"/>
						</a>
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div>
        </div>
    </div>
    <!-- Destinasi End --> 

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

    <!-- /container -->
		<script src="../assets2/jquery-1.11.3.min.js"></script>
        <script src="../assets2/modernizr.custom.js"></script>
		<script src="../assets2/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>