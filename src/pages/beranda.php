<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <title></title>
  <style>
        .text-elps-3 {
            -webkit-line-clamp: 3 !important;
        }

        .text-elps {
            display: -webkit-box !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
    </style>
</head>

<body style="background-color : #EEEEEE;">

  <?php include(__DIR__.'/navbar.php') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 top-1 start-0 ps-5 mb-3">
        <!-- START CODE -->
        <h4 class="fw-normal mt-5">Informasi KESBANG Terkini</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach ($datas as $key => $value) { ?>

            <div class="" style="width: 12rem;">
              <div class="d-flex card bg-light">
                <div class="flex-shrink-0 card-body">
                  <a href="informasi/berita/<?= $value['idBerita'] ?>" style="text-decoration: none;color: black;">
                    <img class="img-fluid" src="/assets/media/<?= $value['pathMedia'] ?>" alt="Gambar Berita">
                    <h6 class="card-title mt-2"><?= $value['namaBerita'] ?></h6>
                    <p class="card-text text-elps text-elps-3"><?= html_entity_decode(nl2br($value['deskripsiBerita'])) ?></p>
                    <p class="card-text" style="color: white;"><small class="text-muted"><?= $value['dateCreate'] ?></small>
                      <!-- <p class="text-mute"><?= $value['idRelation'] ?></p> -->
                    </p>
                  </a>

                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <?php include(__DIR__.'/sidebar.php') ?>
    </div>
    <?php include(__DIR__.'/footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>