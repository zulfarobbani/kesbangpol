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
  <title>Pengumuman</title>
</head>

<body>
<?php include(__DIR__ . '/../../mobilemenu.php') ?>
<?php include(__DIR__ . '/../../mobilenav.php') ?>
  <?php include(__DIR__ . '/../../navbar.php') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 mb-3">
      <div class="card rounded-3 mt-5 px-3">
        <div class="card-body">
        <?php include(__DIR__ . '/../../navtabsinformasi.php') ?>
        <!-- START CODE -->
        <div class="row">
          <div class="card-group">
            <?php foreach ($datas as $key => $value) { ?>
              <div class="card mt-2">
                <a href="/informasi/pengumuman/<?= $value['idPengumuman'] ?>">
                  <img class="img-fluid" src="/assets/media/<?= $value['pathMedia'] ?>" alt="Gambar Berita">
                  <div class="card-body text-dark">
                    <h5 class="card-title text-dark"><?= $value['namaPengumuman'] ?></h5>
                    <p class="card-text"><?= html_entity_decode(nl2br($value['deskripsiPengumuman'])) ?></p>
                    <p class="card-text"><small class="text-muted"><?= $value['dateCreate'] ?></small></p>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
        </div>
      </div>
      </div>

      <?php include(__DIR__ . '/../../sidebar.php') ?>
    </div>
    <?php include(__DIR__ . '/../../footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>