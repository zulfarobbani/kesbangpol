<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>LOGIN</title>
  <style type="text/css">
    .form-control {
      border-radius: 7px;
    }
  </style>
</head>

<body style="background-color : #EEEEEE; color: navy;">
<?php include(__DIR__ . '/../mobilemenu.php') ?>
<?php include(__DIR__ . '/../mobilenav.php') ?>
  <?php include(__DIR__ . '/../navbar.php') ?>
  
  <div class="container-fluid content-main">
    <div class="row">
      <div class="col-md-8">
      <div class="card rounded-3 px-3 mt-3">
        <div class="card-body">
        <!-- START CODE -->
        <h4 class="mt-3">Pegawai</h4>
        <div class="mb-3 mt-2">
          <?php if (count($errors) > 0) { ?>
            <?php foreach ($errors as $error) { ?>
              <div class="alert alert-danger mx-auto alert-dismissible fade show" role="alert">
                <strong><?= $error ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-md-6 text-end mb-5">
            <h4 class="fw-light">Login</h4>
            <form action="/login-action-pegawai" method="POST">
              <input type="text" class="form-control shadow-sm mb-3" name="usernameUser" placeholder="Username">
              <input type="password" class="form-control shadow-sm mb-3" name="passwordUser" placeholder="Password">
              <button type="submit" class="btn btn-outline-danger"><span style="color: navy;">Masuk</span></button>
            </form>
          </div>
          <div class="col-md-6 text-end">
            <h4 class="fw-light">Register</h4>
            <form action="/register-pegawai" method="POST" enctype="multipart/form-data">
              <input type="text" class="form-control shadow-sm mb-3" name="namaUser" placeholder="Nama Pegawai" required>
              <input type="text" class="form-control shadow-sm mb-3" name="jabatanPegawai" placeholder="Jabatan Pegawai" required>
              <input type="text" class="form-control shadow-sm mb-3" name="nipPegawai" placeholder="NIP Pegawai" required>
              <input type="text" class="form-control shadow-sm mb-3" name="usernameUser" placeholder="Username" required>
              <input type="password" class="form-control shadow-sm mb-3" name="passwordUser" placeholder="Password" required>
              <input type="password" class="form-control shadow-sm mb-3" name="passwordKonfirmasi" placeholder="Konfirmasi Password" required>
              <input type="email" class="form-control shadow-sm mb-3" name="emailPegawai" placeholder="Email Pegawai" required>
              <input type="file" class="form-control shadow-sm mb-3" name="fotoPegawai" placeholder="Foto Pegawai" required>
              <input type="hidden" name="idRole" value="89wsnfsuweer">
              <button type="submit" class="btn btn-outline-danger"><span>Daftar</span></button>
            </form>
          </div>
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