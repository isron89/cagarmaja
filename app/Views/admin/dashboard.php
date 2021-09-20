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
                    <li class="active"><a href="/admin">Admin</a></li>
                    <li class="get-started"><a href="/logout">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->

<!-- <div class="container" style="padding-top: 100px;"> -->
<div class="mx-auto bg-grey-lightest" style="padding-top: 120px;">
    <div style="padding-left: 50px;" class="container2">
        <div class="section-title">
            <h2>Data Cagar Budaya</h2>
        </div>
    </div>
    <!--Screen-->
    <div class="min-h-screen flex flex-col">

        <!--Main-->
        <main class="bg-white-500 flex-1 p-3 overflow-hidden">

            <!--Grid Form-->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div style="padding-left: 10px;" class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        <div class="row-cols-lg-3">
                            <a class="bg-teal-dark cursor-pointer rounded p-1 mx-1 text-white-medium" href="/admin/create">
                                <!-- <i class="fas fa-edit"></i> -->Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="p-3">
                        <table class="table-responsive w-full rounded">
                            <thead>
                                <tr>
                                    <th class="border w-1/8 px-4 py-2">Nomor</th>
                                    <th class="border w-1/5 px-4 py-2">Nama Cagar Budaya</th>
                                    <th class="border w-1/8 px-4 py-2">Kode Pengelolaan</th>
                                    <th class="border w-1/5 px-4 py-2">Alamat</th>
                                    <th class="border w-1/8 px-4 py-2">Desa</th>
                                    <th class="border w-1/8 px-4 py-2">Kecamatan</th>
                                    <th class="border w-1/8 px-4 py-2">Kabupaten</th>
                                    <th class="border w-1/5 px-4 py-2">Provinsi</th>
                                    <th class="border w-1/3 px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($cagar as $cag) : ?>
                                    <tr>
                                        <td class="border px-4 py-2"><?= $no; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['nama_cagar']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['kode_pengelolaan']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['alamat']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['desa']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['kecamatan']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['kabupaten']; ?></td>
                                        <td class="border px-4 py-2"><?= $cag['provinsi']; ?></td>
                                        <!-- <td class="border px-4 py-2">
                                    <i class="fas fa-check text-green-500 mx-2"></i>
                                </td> -->
                                        <td class="border px-4 py-2">
                                            <!-- <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                            <i class="fas fa-eye"></i>Lihat
                                        </a> -->
                                            <a href="/admin/edit/<?= $cag['id_cagar']; ?>" class="bg-teal-dark cursor-pointer rounded p-1 mx-1 text-white-medium">
                                                <!-- <i class="fas fa-edit"></i> -->Edit
                                            </a>
                                            <form action="/admin/<?= $cag['id_cagar']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="bg-red-500 cursor-pointer rounded p-1 mx-1 text-white-medium" onclick="return confirm('Apakah anda yakin?')" ; ">Hapus</button>
                                            </form>
                                            <!-- <a href=" /admin/delete/" class="bg-red-500 cursor-pointer rounded p-1 mx-1 text-white-medium">
                                                    <i class="fas fa-trash"></i>Hapus
                                                    </a> -->
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/Grid Form-->
        </main>
    </div>
    <!--/Main-->
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