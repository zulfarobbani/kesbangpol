<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <!-- START CODE -->
        <h4 class="mt-3">ORSOSPOL</h4>
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
          <div class="col-md-6 text-end">
            <h4 class="fw-light">Login</h4>
            <form action="login" method="POST">
              <input type="text" class="form-control shadow-sm mb-3" name="usernameUser" placeholder="Username">
              <input type="password" class="form-control shadow-sm mb-3" name="passwordUser" placeholder="Password">
              <button type="submit" class="btn btn-outline-danger"><span style="color: navy;">Masuk</span></button>
            </form>
          </div>
          <div class="col-md-6 text-end">
            <h4 class="fw-light pt-5">Register</h4>
            <form action="register-orsospol" method="POST">
              <input type="text" class="form-control shadow-sm mb-3" name="namaOrsosopol" placeholder="Nama Orsospol" required>
              <input type="text" class="form-control shadow-sm mb-3" name="singkatanOrsospol" placeholder="Singkatan Orsospol" required>
              <input type="text" class="form-control shadow-sm mb-3" name="noAHU" placeholder="No AHU" required>
              <select name="idJenisorsospol" class="form-control shadow-sm mb-3">
                <option value="">-- Pilih Jenis Orsospol --</option>
                <?php foreach ($jenisorsospol as $key => $value) { ?>
                  <option value="<?= $value['idJenisorsospol'] ?>"><?= $value['namaJenisorsospol'] ?></option>
                <?php } ?>
              </select>
              <input type="text" class="form-control shadow-sm mb-3" name="namaUser" placeholder="Nama Lengkap Penanggung Jawab" required>
              <input type="text" class="form-control shadow-sm mb-3" name="usernameUser" placeholder="Username" required>
              <input type="password" class="form-control shadow-sm mb-3" name="passwordUser" placeholder="Password" required>
              <input type="password" class="form-control shadow-sm mb-3" name="passwordKonfirmasi" placeholder="Konfirmasi Password" required>
              <input type="email" class="form-control shadow-sm mb-3" name="emailUser" placeholder="Email Penanggung Jawab" required>
              <input type="hidden" name="idRole" value="zxc98djh232">
              <button type="submit" class="btn btn-outline-danger"><span style="color: navy;">Daftar</span></button>
            </form>
          </div>
        </div>
      </div>
      <?php include(__DIR__ . '/../sidebar.php') ?>
    </div>
    <?php include(__DIR__ . '/../footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>