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
          <!-- <li class="active"><a href="#header">Home</a></li> -->
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Peta</a></li>
          <li><a href="#portfolio">Data Cagar Budaya</a></li>
          <li><a href="#contact">Kontak Kami</a></li>
          </li>

          <li class="get-started"><a href="#header">Home</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div><!-- End Header Container -->
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Sistem Informasi Geografis</h1>
    <h1>Cagar Budaya</h1>
    <h2>Di Kabupaten Mojokerto</h2>
    <a href="#about" class="btn-get-started scrollto">Mulai</a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      <div class="row">

        <div class="col-md-12 col-lg-3 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" style="opacity: 0;">
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <h2>SIG CAGAR BUDAYA KABUPATEN MOJOKERTO</h2>
          <h3>Sistem informasi ini merupakan aplikasi pemetaan geografis cagar budaya di Kabupaten Mojokerto. Aplikasi ini memuat informasi dan lokasi dari cagar budaya di Mojokerto.</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <p>
            Dalam aplikasi pemetaan geografis cagar budaya ini memuat informasi dan lokasi dari cagar budaya di Mojokerto. Pemetaan diambil dari dokumen verifikasi dan validasi cagar budaya Kabupaten Mojokerto oleh Kementrian Pendidikan dan Kebudayaan serta data lokasi Google Maps. Aplikasi ini memuat sejumlah informasi mengenai :
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Informasi Detail Cagar Budaya</li>
            <li><i class="ri-check-double-line"></i> Informasi Lokasi Cagar Budaya</li>
          </ul>
          <p class="font-italic">
            Informasi dapat berubah sewaktu-waktu
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
          <span data-toggle="counter-up">232</span>
          <p>Cagar</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $verif; ?></span>
          <p>Cagar Budaya Terverifikasi</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up"><?= $notverif; ?></span>
          <p>Cagar Budaya Baru</p>
        </div>

        <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
          <span data-toggle="counter-up">15</span>
          <p>Cagar</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="text-center" data-aos="zoom-in">
        <h3>CAGAR MAJA</h3>
        <p> Detail cagar budaya di Kabupaten Mojokerto</p>
        <a class="cta-btn" href="#portfolio">Lihat Detail</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">
      <div class="text-center" data-aos="zoom-in">
        <h3 style="font-weight: bold; text-transform: uppercase;">Peta Cagar Budaya</h3>
      </div>
      <div class="panel-body" style="align-content: center;">
        <div id="map" style="width:100%;height:480px;"></div>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCSFa2gS3ZZN-UJR-47e8Rs1w6XKzcnjwI"></script>

        <script type="text/javascript">
          function initialize() {

            var mapOptions = {
              zoom: 12.5,
              center: new google.maps.LatLng(-7.261184839447646, 112.74293031897085),
              disableDefaultUI: false
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            setMarkers(map, officeLocations);

          }

          var officeLocations = [
            <?php foreach ($cagar as $cag) :
            ?>[<?= $cag['id_cagar']; ?>, '<?= $cag['nama_cagar'] ?>', '<?= $cag['desa'] ?>', <?= $cag['longitude'] ?>, <?= $cag['latitude'] ?>],
            <?php
            endforeach;
            ?>
          ];

          function setMarkers(map, locations) {
            var globalPin = 'img/marker.png';

            for (var i = 0; i < locations.length; i++) {

              var office = locations[i];
              var myLatLng = new google.maps.LatLng(office[4], office[3]);
              var infowindow = new google.maps.InfoWindow({
                content: contentString
              });

              var contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
                '<div id="bodyContent">' +
                '<a href=/cagar/' + office[0] + '>Info Detail</a>' +
                '</div>' +
                '</div>';

              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: office[1],
                icon: 'img/marker.png'
              });

              google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
            }
          }

          function getInfoCallback(map, content) {
            var infowindow = new google.maps.InfoWindow({
              content: content
            });
            return function() {
              infowindow.setContent(content);
              infowindow.open(map, this);
            };
          }

          initialize();
        </script>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Contact Section ======= -->
  <section id="portfolio" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-3" data-aos="fade-right">
          <div class="section-title">
            <h2>Data Cagar Budaya</h2>
            <p>Halaman ini memuat informasi Cagar Budaya di Kabupaten Mojokerto. </p>
          </div>
        </div>

        <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-12">
            <div class="panel panel-info panel-dashboard">
              <div class="panel-heading centered">
                <h2 class="panel-title"><strong> - Informasi Cagar Budaya - </strong></h2>
              </div>
              <div class="panel-body">
                <table class="table table-bordered table-striped table-admin">
                  <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th width="25%">Nama Cagar Budaya</th>
                      <th width="10%">Kode Pengelolaan</th>
                      <th width="20%">Desa</th>
                      <th width="20%">Kecamatan</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($cagar as $cag) : ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?= $cag['nama_cagar']; ?></td>
                        <td><?= $cag['kode_pengelolaan']; ?></td>
                        <td><?= $cag['desa']; ?></td>
                        <td><?= $cag['kecamatan']; ?></td>
                        <td class="ctr">
                          <div class="btn-get-started">
                            <a href="/cagar/<?= $cag['id_cagar']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top">
                              <i class="fa fa-map-marker"> </i> Detail</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <div class="section-title">
            <h2>Kontak Kami</h2>
            <p>Halaman ini memuat informasi pengembang serta masukan kritik dan saran dari pengguna apabila ditemukan masalah. </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

          <!-- <iframe style="border:0; width: 100%; height: 270px;" id="map-canvas"></iframe> -->
          <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Lokasi:</h4>
            <p>Jl. Candi Tikus no 9, Temon, Kec. Trowulan, Kab. Mojokerto, Indonesia 60231</p>
          </div>
          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>cagarbudaya@mojokerto.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Telepon:</h4>
                <p>+62 895 0987 6543</p>
              </div>
            </div>
          </div>

          <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Masukkan sedikitnya 4 karakter" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" data-rule="email" data-msg="Masukkan email yang valid" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Masukkan setidaknya 8 karakter" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Masukkan pesan untuk kami" placeholder="Pesan"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Memuat</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan anda telah terkirim. Terimakasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim pesan</button></div>
          </form>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

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
        &copy; Copyright <strong><span>SIG CAGAR BUDAYA MOJOKERTO</span></strong>.
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