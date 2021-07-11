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
  <title>Berita</title>
</head>

<body style="background-color : #EEEEEE;">

  <?php include(__DIR__ . '/../../navbar.php') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 top-1 start-0 ps-5 mb-3">
        <?php include(__DIR__ . '/../../navtabsinformasi.php') ?>
        <!-- START CODE -->
        <a class="btn btn-outline-danger d-block float-end navy" href="\informasi/pengumuman/create"><i class="fas fa-edit"></i> Edit</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach ($datas as $key => $values) { ?>
            <div class="card text-white bg-dark mb-3 mx-3" style="max-width: 540px;padding-left:0!important;padding-right:0!important;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="/assets/media/<?= $values['pathMedia'] ?>" class="img-fluid rounded-start" alt="<?= $values['namaBerita'] ?>">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                 <h5 class="card-title text-white"> <a href="informasi/berita/<?= $values['idBerita'] ?>" style="text-decoration:none;" class="text-white"><?= $values['namaBerita'] ?></a></h5>
                    <p class="card-text"><small class="text-light"><?= $values['dateCreate'] ?></small></p>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
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