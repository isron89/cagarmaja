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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- JSDelivr CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/admin/styles.css">
    <link rel="stylesheet" href="/assets/css/admin/all.css">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>

    <?= $this->renderSection('dashboard2'); ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- JSDelivr JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="/assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/php-email-form/validate.js"></script>
    <script type="text/javascript" src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/counterup/counterup.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/venobox/venobox.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="/assets/js/main2.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/datatable-bootstrap.js"></script>

    <script>
        function preview() {
            const foto = document.querySelector('#foto');
            const labelFoto = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            labelFoto.textContent = foto.files[0].name;

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>