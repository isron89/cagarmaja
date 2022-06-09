<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo $_ENV['GMAPS_API_KEY']; ?>"></script>

<script type="text/javascript">
    function initialize() {
        var myLatlng = new google.maps.LatLng(<?= $cagar['latitude']; ?>, <?= $cagar['longitude']; ?>);
        var mapOptions = {
            zoom: 13,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading"><?php echo $cagar['nama_cagar']; ?></h1>' +
            '<div id="bodyContent">' +
            '<p><?= $cagar['desa']; ?></p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Maps Info',
            icon: '/img/marker.png'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CAGAR MAJA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/logo1.png" rel="icon">
    <link href="/assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" type="text/css">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light"><a href=""><span>CAGAR MAJA</span></a></h1>
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#portfolio">Deskripsi</a></li>
                        <li class="get-started"><a href="/">Kembali</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->

    <div class="container" style="padding-top: 110px;">
        <div class="row">

            <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
                <div class="panel panel-info panel-dashboard">
                    <div class="panel-heading centered">
                        <h2 class="panel-title" style="font-size: 36px;"><strong>Informasi Cagar Budaya </strong></h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">

                            <tr>
                                <th>Detail Informasi</th>
                            </tr>
                            <tr>
                                <td>Nama Cagar Budaya</td>
                                <td>
                                    <h5><?= $cagar['nama_cagar']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Kode Pengelolaan</td>
                                <td>
                                    <h5><?= $cagar['kode_pengelolaan']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                    <h5><?= $cagar['alamat']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Desa</td>
                                <td>
                                    <h5><?= $cagar['desa']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>
                                    <h5><?= $cagar['kecamatan']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td>
                                    <h5><?= $cagar['kabupaten']; ?></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>
                                    <h5><?= $cagar['provinsi']; ?></h5>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-5" data-aos="zoom-in">
                <div class="panel panel-info panel-dashboard">
                    <div class="panel-heading centered" style="padding-bottom: 20px;">
                        <h2 class="panel-title"><strong>Lokasi Cagar Budaya</strong></h4>
                    </div>
                    <div class="panel-body">
                        <div id="map-canvas" style="width:100%;height:380px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Deskripsi</h2>
                <p><?= $cagar['deskripsi']; ?></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Foto <?= $cagar['nama_cagar']; ?></li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php for ($s = 1; $s <= 3; $s++) { ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/assets/img/foto/<?= $cagar['nama_cagar']; ?><?= $s; ?>.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <!-- <h4>App 1</h4>
                            <p>App</p> -->
                                <div class="portfolio-links">
                                    <a href="/assets/img/foto/<?= $cagar['nama_cagar']; ?><?= $s; ?>.jpg" data-gall="portfolioGallery" class="venobox" title="<?= $cagar['nama_cagar']; ?>"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="" title="More Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="/assets/img/2.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                                <a href="" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>CAGAR MAJA</h3>
                        <p>
                            Jl. Candi Tikus no 9, Temon <br>
                            Trowulan, Mojokerto 61362<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 895 0987 6543<br>
                            <strong>Email:</strong> cagarbudaya@mojokerto.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link bantuan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat Penggunaan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Data</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Detail Cagar Budaya</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Lokasi Cagar Budaya</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Ikuti info terbaru</h4>
                        <p>Subscribe email</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>CAGAR MAJA</span></strong>.
                </div>
                <div class="credits">
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/php-email-form/validate.js" type="text/javascript"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/counterup/counterup.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/venobox/venobox.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/aos/aos.js" type="text/javascript"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap-hover-dropdown.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>
    <script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/js/datatable-bootstrap.js" type="text/javascript"></script>

</body>

</html>
