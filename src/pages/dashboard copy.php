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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <style type="text/css">
        html,
        body {
            overflow-x: hidden;
            font-family: 'Atkinson Hyperlegible', sans-serif;
        }

        a {
            text-decoration: none;
        }

        #menudepan h5 {
            font-size: 1rem;
        }

        .item-menu-dashboard {
            border: 2px solid #80808000;
            padding: 10px 0;
            border-radius: 10px;
            transition: border-color 0.5s, box-shadow 0.5s;
        }

        .item-menu-dashboard:hover {
            border: 2px solid #e88c4b;
            padding: 10px 0;
            -webkit-box-shadow: -1px 0px 5px 0px rgba(0, 0, 0, 0.12) !important;
            -moz-box-shadow: -1px 0px 5px 0px rgba(0, 0, 0, 0.12) !important;
            box-shadow: -1px 0px 5px 0px rgba(0, 0, 0, 0.12) !important;
        }

        .put {
            position: absolute !important;
            bottom: 0 !important;
        }

        .menu-depan {
            font-size: 1rem;
        }

        @media only screen and (max-width: 600px) {
            .menu-depan {
                font-size: 0.7rem;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .menu-depan {
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body style="background: #eeeeee;">
    <!-- <img class="w-100" src="/assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header"> -->
    <!-- <img class="w-100" src="/assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header"> -->
    <div class="bg-img-header" style="background: #d2d2d2;">
        <div class="img-header" style="height: 90px;background: url('/assets/image/header/ribbonbaru-02.png');background-repeat: no-repeat;background-position-x: center;background-position-y: center;background-size:cover;position:relative;">
            <img src="/assets/image/header/header-03.png" alt="" style="width: 150px;position:absolute;left: 50%;margin-left: -70px;top: 70%;margin-top: -50px;">
        </div>
    </div>
    <div class="container h-100">
        <div class="wrapper mt-3 mb-4">
            <div class="carousel owl-carousel">
                <?php foreach ($banner as $key => $value) { ?>
                    <!--<div class="card card-1" style="height: 170px;background: url(/assets/media/<?= $value['pathMedia'] ?>);background-size: 460px;background-position: center;background-repeat: no-repeat;">-->
                    <img src="/assets/media/<?= $value['pathMedia'] ?>" class="card-img img-fluid" alt="...">
                <?php } ?>
            </div>
        </div>



        <!-- <h3 class="d-flex justify-content-center mt-2" style="color: #adadad;margin: 0;">Selamat Datang</h3>
        <h6 class="d-flex justify-content-center text-center" style="color: #adadad;margin: 0;">di</h6>
        <h6 class="d-flex justify-content-center text-center" style="color: #adadad;margin: 0;">Situs Resmi</h6> -->
        <h3 class="d-flex justify-content-center mt-2" style="color: #adadad;margin: 0;">Selamat Datang</h3>
        <h6 class="d-flex justify-content-center text-center" style="color: #adadad;margin: 0;">di</h6>
        <h5 class="d-flex justify-content-center text-center" style="color: grey;margin: 0;">Situs Resmi</h5>
        <h3 class="d-flex justify-content-center text-center" style="color: grey;margin: 5px 0 5px 0;">Badan Kesatuan Bangsa dan Politik</h3>
        <h5 class="d-flex justify-content-center text-center" style="color: grey; ">Kota Cimahi</h5>

        <div class="row align-items-center mt-4" id="menudepan">
            <div class="col-6 col-md-4 col-lg my-3">
                <div class="menu-dashboard" style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a href="/beranda"><img src="/assets/icon/home.png" class="d-block mx-auto text-info" style="height:50px" alt="home">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Beranda</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg my-3 ">
                <div class="menu-dashboard " style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a href="/struktur-organisasi" class="menu-dashboard"><img src="/assets/icon/dashboard.png" class="d-block mx-auto text-info" style="height:50px" alt="profil">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Profil</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg my-3 ">
                <div class="menu-dashboard " style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a href="/ormas" class="menu-dashboard"><img src="/assets/icon/organization.png" class="d-block mx-auto" style="height:50px" alt="Organisasi Terdaftar">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Organisasi Terdaftar</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg my-3 ">
                <div class="menu-dashboard " style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a href="/forum-umum" class="menu-dashboard"><img src="/assets/icon/forum.png" class="d-block mx-auto" style="height:50px" alt="Forum Orsospol">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Forum Orsospol</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg my-3 ">
                <div class="menu-dashboard " style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a href="/layanan/pendataan" class="menu-dashboard"><img src="/assets/icon/service.png" class="d-block mx-auto" style="height:50px" alt="Layanan">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Layanan</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg my-3 ">
                <div class="menu-dashboard " style="box-sizing: border-box;padding: 0 0;">
                    <div class="item-menu-dashboard shadow-sm">
                        <a class="menu-dashboard" href="https://linktr.ee/ardhin" target="_blank"><img src="/assets/icon/contact.png" class="d-block mx-auto" style="height:50px" alt="Hubungi Kami">
                            <p class="text-center menu-depan fw-bold" style="color:#000099;margin:0;">Hubungi Kami</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include(__DIR__ . '/footer.php') ?>
    <style>
        footer {}
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