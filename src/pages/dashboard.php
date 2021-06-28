<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <title>Dashboard</title>
    <style type="text/css">
        a{
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color : #EEEEEE;">
<div class="container-fluid">
<img class="img-fluid"src="../assets/image/Header kesbangpol Revisi ke 5-01.png" alt="header" style="height: 200; width: 1284;">
    <h1 class="d-flex justify-content-center" style="color: #004080;">Selamat Datang</h1>
    <h3 class="d-flex justify-content-center" style="color: #1a8cff; ">Di Situs Resmi Kantor Kesatuan Bangsa dan Politik Kota Cimahi</h3>
    
        <div class="row img-fluid mt-5">
            <div class="col d-flex justify-content-center">
                <a href="/beranda"><img src="../assets/icon/Beranda.png" alt="home">
                    <h5 class="text-info text-center">Beranda</h5></a> 
            </div>
            <div class="col d-flex justify-content-center">
                <a href=""><img src="../assets/icon/Icon Profil dashboard.png" alt="profil">
                    <h5 class="text-info text-center">Profil</h5></a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="/ormas"  class="text-info text-center"><img src="../assets/icon/Organisasi terdaftar.png" alt="Organisasi Terdaftar">
                    <h5>Organisasi<br>Terdaftar</h5></a> 
            </div>
            <div class="col d-flex justify-content-center">
                <a href=""  class="text-info text-center"><img src="../assets/icon/Forum orsospol.png" alt="Forum Orsospol">
                    <h5>Forum<br>ORSOSPOL</h5></a>
            </div> 
            <div class="col d-flex justify-content-center">
                <a href=""><img src="../assets/icon/Icon Layanan Dashboard.png" alt="Layanan">
                    <h5 class="text-info text-center">Layanan</h5></a> 
            </div>
            <div class="col d-flex justify-content-center">
                <a href=""><img src="../assets/icon/Contact us.png" alt="Hubungi Kami">
                    <h5 class="text-info text-center">Hubungi<br>Kami</h5></a>   
            </div>
        </div>
        <?php include(__DIR__.'/footer.php' )?>
    </div>



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
</body>
</html>