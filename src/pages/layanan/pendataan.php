<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title></title>
</head>

<body>
  <?php include(__DIR__ . '/../mobilemenu.php') ?>
  <?php include(__DIR__ . '/../mobilenav.php') ?>
  <?php include(__DIR__ . '/../navbar.php') ?>
  <div class="container-fluid">
    <div class="row" style="background-color : #EEEEEE;">
      <div class="col-md-8 mb-3">
        <div class="card rounded-3 mt-5 px-3">
          <div class="card-body">
            <?php include(__DIR__ . '/../navtabslayanan.php') ?>
            <!-- START CODE -->
            <div>
              <h3 class="mb-4 mt-2" style="color: #004080;"><?= $layanan['judulLayanan'] ?></h3>
              <div class="fst-normal teksjustify paragraf">
                <?= $layanan['deskripsiLayanan'] ?>
              </div>

              <div class="mt-4">
                <a class="btn btn-danger btn-sm navy  float-end" href="/login-register">
                <span class="material-icons-outlined text-white" style="font-size: 17px;margin-right: 5px;">person_add_alt_1</span><span class="text-white">Daftarkan Organisasi Anda</span></a>
              </div>
              <!-- <div class="float-end"><button class="btn btn-outline-danger">Unduh</button></div> -->
            </div>
          </div>
        </div>
      </div>

      <?php include(__DIR__ . '/../sidebar.php') ?>
    </div>
  </div>
  <?php include(__DIR__ . '/../footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>