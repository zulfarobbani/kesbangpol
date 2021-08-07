<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>Dashboard</title>
    <style type="text/css">
        a {
            text-decoration: none;
        }
        #menudepan h5{
            font-size:1rem;
        }
    </style>
</head>

<body>
<img class="w-100" src="../assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header">
    <div class="container">
    <div class="wrapper mt-3">
      <div class="carousel owl-carousel">
        <div class="card card-1">
        <img  src="/assets/image/kesbangpol1.png" class="card-img img-fluid" alt="..."></div>
<div class="card card-2">
<img  src="/assets/image/kesbangpol2.png" class="card-img img-fluid" alt="..."></div>
<div class="card card-3">
<img  src="/assets/image/kesbangpol3.png" class="card-img img-fluid" alt="..."></div>
</div>
</div>
        <h1 class="d-flex justify-content-center mt-2" style="color: #004080;">Selamat Datang</h1>
        <h3 class="d-flex justify-content-center text-center" style="color: #1a8cff; ">Di Situs Resmi Kantor Kesatuan Bangsa dan Politik Kota Cimahi</h3>

        <div class="row mt-5" id="menudepan">
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/beranda"><img src="/assets/icon/Beranda.png" class="d-block mx-auto" alt="home">
                    <h5 class="text-info text-center">Beranda</h5>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/struktur-organisasi"><img src="/assets/icon/Icon Profil dashboard.png" class="d-block mx-auto" alt="profil">
                    <h5 class="text-info text-center">Profil</h5>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/ormas" class="text-info text-center"><img src="/assets/icon/Organisasi terdaftar.png" class="d-block mx-auto" alt="Organisasi Terdaftar">
                    <h5>Organisasi<br>Terdaftar</h5>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/forum-umum" class="text-info text-center"><img src="/assets/icon/Forum orsospol.png" class="d-block mx-auto" alt="Forum Orsospol">
                    <h5>Forum<br>ORSOSPOL</h5>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href=""><img src="/assets/icon/Icon Layanan Dashboard.png" class="d-block mx-auto" alt="Layanan">
                    <h5 class="text-info text-center">Layanan</h5>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="https://linktr.ee/ardhin" target="_blank"><img src="/assets/icon/Contact us.png" class="d-block mx-auto" alt="Hubungi Kami">
                    <h5 class="text-info text-center">Hubungi<br>Kami</h5>
                </a>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/footer.php') ?>
    <style>
        footer{
            position:absolute;
            bottom: 0;
    width: 100%;
        }
    </style>



    <!-- <div class="position-absolute bottom-0 end-0" id="ko   pi-covid"></div>
<script>
  var f = document.createElement("iframe");
  f.src = "https://kopi.dev/widget-covid-19/";
  f.width = "100%";
  f.height = 240;
  f.scrolling = "no";
  f.frameBorder = 0;
  var rootEl = document.getElementById("kopi-covid");
  console.log(rootEl);
  rootEl.appendChild(f);
</script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0:{
            items:1,
            nav: false
          },
          600:{
            items:3,
            autoHeight:true,
            nav: false
          },
          1000:{
            items:3,
            nav: false
          }
        }
      });
    </script>
</body>

</html>