<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>KESBANGPOL</title>
</head>

<body>
<?php include(__DIR__ . '/mobilemenu.php') ?>
<?php include(__DIR__ . '/mobilenav.php') ?>
  <?php include(__DIR__ . '/navbar.php') ?>
  <div class="container-fluid">
    <div class="row pb-5" style="background-color : #EEEEEE;">
      <div class="col-md-8 top-1 start-0">
        <div class="container-fluid">
        <!-- START CODE -->
        <h4 class="fw-normal mt-5">Informasi KESBANG Terkini</h4>
        <div class="content-wrapper">
          <?php foreach ($datas as $key => $value) { ?>
            <div class="col-sm-2 col-md-4">
            <div class="card text-white bg-dark m-3" style="padding-right : 0!important; padding-left:0!important;">
              <img src="/assets/media/<?= $value['pathMedia'] ?>" class="card-img-top" alt="<?= $value['namaBerita'] ?>">
              <div class="card-body ">
                <h6 class="card-title text-elps text-elps-3" style="font-size: 13px;"><?= $value['namaBerita'] ?></h6>
                <!-- <em style="font-size: 12px;">Author : Admin</em><br> -->
                <!-- <div class="card-text text-elps text-elps-3" align="justify"><?= $value['deskripsiBerita'] ?></div> -->
                <!-- <span class="card-text" style="color: white;font-size: 12px;"><small class="text-light"><?= $value['dateCreate'] ?></small></span> -->
                <a href="informasi/berita/<?= $value['idBerita'] ?>" class="btn btn-sm btn-outline-light float-end mt-3">Selengkapnya...</a>
              </div>
            </div>
            </div>

            <div class="news-card">
    <a href="informasi/berita/<?= $value['idBerita'] ?>" class="news-card__card-link"></a>
    <img src="/assets/media/<?= $value['pathMedia'] ?>" alt="<?= $value['namaBerita'] ?>" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"><?= $value['namaBerita'] ?></h2>
      <div class="news-card__post-date"><?= $value['dateCreate'] ?></div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt"><?= $value['deskripsiBerita'] ?></p>
        <a href="informasi/berita/<?= $value['idBerita'] ?>" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <?php include(__DIR__ . '/sidebar.php') ?>
      <?php include(__DIR__ . '/footer.php') ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>