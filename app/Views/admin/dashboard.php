<?= $this->extend('layout/template'); ?>

<?= $this->section('dashboard'); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
                <h1 class="text-light"><a href=""><span>CAGAR MAJA</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="">Home</a></li>
                    <li class="get-started"><a href="/home">Kembali</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->

<div class="container" style="padding-top: 120px;">
</div>

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

<?= $this->endSection(); ?>