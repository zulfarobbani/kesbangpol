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
        <div class="col-12">
          <table class="table mt-3" style="color: navy;">
            <thead>
              <tr>
                <th>Nama Berkas</th>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($unduhan as $key => $value) { ?>
                <tr>
                  <td style="font-size: 20px"><?= $value['namaLayananunduhan'] ?></td>
                  <td>
                    <a href="/layanan-kesbangpol/unduhan/<?= $value['idLayananunduhan']; ?>/download" style="color: navy;" target="_blank"><span class="material-icons-outlined px-2 float-end">file_download</span></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
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