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

        #menudepan h5 {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <img class="w-100" src="/assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header" style="height: 100px;">
    <!-- <img class="w-100" src="/assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header"> -->
    <!-- <div class="bg-img-header" style="background: #eeeeee;">
        <div class="img-header" style="height: 120px;background: url('/assets/image/Header kesbangpol Revisi ke 5-01.png');background-repeat: no-repeat;background-position: center;background-size:920px;">
        </div>
    </div> -->
    <div class="container-fluid">
        <div class="wrapper mt-3">
            <div class="carousel owl-carousel">
                <?php foreach ($banner as $key => $value) { ?>
                    <div class="card card-1" style="height: 170px;background: url(/assets/media/<?= $value['pathMedia'] ?>);background-size: 460px;background-position: center;background-repeat: no-repeat;">
                        <!-- <img src="/assets/media/<?= $value['pathMedia'] ?>" class="card-img img-fluid" alt="..."> -->
                    </div>
                <?php } ?>
            </div>
        </div>
        <h3 class="d-flex justify-content-center mt-2" style="color: grey;margin: 0;color: grey;">Selamat Datang</h3>
        <h6 class="d-flex justify-content-center text-center" style="color: #adadad;color: #adadad;margin: 0;">di</h6>
        <h6 class="d-flex justify-content-center text-center" style="color: #adadad;color: #adadad;margin: 0;">Situs Resmi</h6>
        <h3 class="d-flex justify-content-center text-center" style="color: #adadad;color: #adadad;margin: 5px 0 5px 0;">Badan Kesatuan Bangsa dan Politik</h3>
        <h5 class="d-flex justify-content-center text-center" style="color: #adadad; ">Kota Cimahi</h5>

        <div class="row mt-5" id="menudepan">
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/beranda"><img src="/assets/icon/Beranda_info.png" class="d-block mx-auto text-info" style="width: 40px;" alt="home">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Beranda</p>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/struktur-organisasi"><img src="/assets/icon/Icon_Profil_dashboard_info.png" style="width: 40px;" class="d-block mx-auto text-info" alt="profil">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Profil</p>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/ormas" class="text-info text-center"><img src="/assets/icon/Organisasi_terdaftar_info.png" style="width: 40px;" class="d-block mx-auto" alt="Organisasi Terdaftar">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Organisasi Terdaftar</p>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="/forum-umum" class="text-info text-center"><img src="/assets/icon/Forum_orsospol_info.png" style="width: 40px;" class="d-block mx-auto" alt="Forum Orsospol">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Forum Orsospol</p>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href=""><img src="/assets/icon/Icon_Layanan_Dashboard_info.png" style="width: 40px;" class="d-block mx-auto" alt="Layanan">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Layanan</p>
                </a>
            </div>
            <div class="col-4 col-md-4 col-lg-2">
                <a href="https://linktr.ee/ardhin" target="_blank"><img src="/assets/icon/Contact_us_info.png" style="width: 40px;" class="d-block mx-auto" alt="Hubungi Kami">
                    <p class="text-center fw-bold fs-5 mt-2" style="color:#000099;">Hubungi Kami</p>
                </a>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/footer.php') ?>
    <style>
        footer {
            position: absolute;
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
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    autoHeight: true,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        });
    </script>
</body>

</html>