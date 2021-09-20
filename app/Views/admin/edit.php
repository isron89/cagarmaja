<?= $this->extend('layout/template-admin'); ?>

<?= $this->section('dashboard2'); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
                <h1 class="text-light"><a href=""><span>CAGAR MAJA</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/admin">Kembali</a></li>
                    <li class="get-started"><a href="/logout">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->

<main id="main" style="padding-top: 50px;">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Ubah Data Cagar Budaya</h2>
                        <!-- <p>Halaman ini memuat informasi pengembang serta masukan kritik dan saran dari pengguna apabila ditemukan masalah. </p> -->
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                    <!-- <iframe style="border:0; width: 100%; height: 270px;" id="map-canvas"></iframe> -->

                    <form action="/admin/update/<?= $cagar['id_cagar']; ?>" method="post" class="php-email-form2 mt-4" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group" hidden>
                            <input type="number" name="id_cagar" id="id_cagar" value="<?= $cagar['id_cagar']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_cagar">
                                <span style="color: red;">*</span>Nama Cagar Budaya:
                            </label><br>
                            <input autofocus value="<?= (old('nama_cagar')) ? old('nama_cagar') : $cagar['nama_cagar']; ?>" type="text" class="form-control <?= ($validation->hasError('nama_cagar')) ? 'is-invalid' : ''; ?>" name="nama_cagar" id="nama_cagar" placeholder="Nama cagar budaya" data-rule="required" data-msg="Nama cagar budaya wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('nama_cagar'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="kode_pengelolaan">Kode Pengelolaan:</label><br>
                            <input value="<?= (old('kode_pengelolaan')) ? old('kode_pengelolaan') : $cagar['kode_pengelolaan']; ?>" type="text" class="form-control" name="kode_pengelolaan" id="kode_pengelolaan" placeholder="Nomor kode pengelolaan" />
                            <!-- <div class="validate"></div> -->
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">
                                <span style="color: red;">*</span>Deskripsi:
                            </label><br>
                            <input type="text" value="<?= (old('deskripsi')) ? old('deskripsi') : $cagar['deskripsi']; ?>" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" id="deskripsi" rows="5" data-rule="minlen:8" data-msg="Masukkan deskripsi setidaknya 8 karakter" placeholder="Deskripsi cagar budaya"></input>
                            <div class="invalid-feedback"><?= $validation->getError('deskripsi'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">
                                <span style="color: red;">*</span>Alamat:
                            </label><br>
                            <input value="<?= (old('alamat')) ? old('alamat') : $cagar['alamat']; ?>" type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" id="alamat" placeholder="Alamat cagar budaya" data-rule="required" data-msg="Alamat cagar budaya wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="desa">
                                <span style="color: red;">*</span>Desa:
                            </label><br>
                            <input value="<?= (old('desa')) ? old('desa') : $cagar['desa']; ?>" type="text" class="form-control <?= ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" name="desa" id="desa" placeholder="Nama desa" data-rule="required" data-msg="Desa wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('desa'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">
                                <span style="color: red;">*</span>Kecamatan:
                            </label><br>
                            <input value="<?= (old('kecamatan')) ? old('kecamatan') : $cagar['kecamatan']; ?>" type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" name="kecamatan" id="kecamatan" placeholder="Nama kecamatan" data-rule="required" data-msg="Kecamatan wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('kecamatan'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">
                                <span style="color: red;">*</span>Kabupaten:
                            </label><br>
                            <input value="<?= (old('kabupaten')) ? old('kabupaten') : $cagar['kabupaten']; ?>" type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" name="kabupaten" id="kabupaten" placeholder="Nama Kabupaten" data-rule="required" data-msg="Kabupaten wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('kabupaten'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="provinsi">
                                <span style="color: red;">*</span>Provinsi:
                            </label><br>
                            <input value="<?= (old('provinsi')) ? old('provinsi') : $cagar['provinsi']; ?>" type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" name="provinsi" id="provinsi" placeholder="Provinsi" data-rule="required" data-msg="Provinsi wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('provinsi'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="latitude">
                                <span style="color: red;">*</span>Latitude:
                            </label><br>
                            <input value="<?= (old('latitude')) ? old('latitude') : $cagar['latitude']; ?>" type="number" class="form-control <?= ($validation->hasError('latitude')) ? 'is-invalid' : ''; ?>" name="latitude" id="latitude" placeholder="Google maps latitude" data-rule="required" data-msg="Latitude wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('latitude'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="longitude">
                                <span style="color: red;">*</span>Longitude:
                            </label><br>
                            <input value="<?= (old('longitude')) ? old('longitude') : $cagar['longitude']; ?>" type="number" class="form-control <?= ($validation->hasError('longitude')) ? 'is-invalid' : ''; ?>" name="longitude" id="longitude" placeholder="Google maps longitude" data-rule="required" data-msg="Longitude wajib diisi!" />
                            <div class="invalid-feedback"><?= $validation->getError('longitude'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="foto">
                                <span style="color: red;">*</span>Foto:
                            </label><br>
                            <div class="col-sm-2">
                                <img src="/assets/img/foto/<?= $cagar['nama_cagar'] ?>1.jpg" alt="" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="form-control custom-custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="preview();">
                                    <div class="invalid-feedback"><?= $validation->getError('foto'); ?></div>
                                    <label class="custom-file-label" for="foto">Pilih foto cagar budaya</label>
                                </div>
                            </div>
                        </div>
                        <span style="color: red;">*required</span>
                        <!-- <div class="mb-3">
                            <div class="loading">Memuat</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Data telah ditambahkan</div>
                        </div> -->
                        <div style="padding-top: 10px;" class="text-center"><button type="submit">Ubah Data</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main>

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

                <!-- <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link bantuan</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat Penggunaan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div> -->

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Data</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Detail Cagar Budaya</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Lokasi Cagar Budaya</a></li>
                    </ul>
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