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
  <title>Hubungi Kami</title>
</head>

<body style="background-color : #EEEEEE; color: navy;">

  <?php include(__DIR__ . '/navbar.php') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 top-1 start-0 ps-5 mt-3">
        <!-- START CODE -->
        <div class="row">
          <div class="col-12 my-3 ps-4">
            <i class="fas fa-map-marker-alt fa-2x"></i><h3 class="d-inline"> Jl. Rd. Demang Hardjakusumah Blok Jati, Cihanjuang</h3>
          </div>
          <div class="col-12 my-3 ps-4">
            <i class="far fa-phone-alt fa-2x d-inline"></i><h3 class="d-inline"> Contact Person</h3>
          </div>
          <div class="col-12 my-3 ps-4">
            <i class="fas fa-comment-dots fa-2x"></i><h3 class="d-inline"> Kirim Pesan:</h3>
          </div>
          <div class="col-12 ps-4">
            <textarea class="form-control rounded shadow" placeholder="Ketik Pesan" rows="3"></textarea>
          </div>
          <div class="d-flex flex-row-reverse mt-3">
            <button class="btn btn-outline-danger" style="color:navy;">Kirim</button>
          </div>
        </div>

      </div>
      <?php include(__DIR__ . '/sidebar.php') ?>
    </div>
    <?php include(__DIR__ . '/footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>