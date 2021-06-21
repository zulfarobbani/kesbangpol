<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <title>Document</title>
</head>

<body style="background-color : #e9ecef;">

  <?php include(__DIR__.'/../navbar.php' )?>
  <div class="container-fluid">
    <div class="col-6 position-absolute top-1 start-0">
      <h5>Panduan SAKIP</h5>
      <span><a href="sakip/create">TAMBAH SAKIP</a></span>
      <div class="col-14">
        <table class="table">
          <thead>
            <tr>
              <td>Nama Berkas</td>
              <td>Aksi</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($datas as $key => $values) {?>
            <tr>
              <td><?= explode('.', $values['namaSakip'])[0] ?></td>
              <td>
                <a href="sakip/edit/<?= $values['idSakip'];?>">EDIT</a>
                <a href="sakip/delete/<?= $values['idSakip'];?>">HAPUS</a>
                <a href="sakip/download-berkas/<?= $values['idSakip'];?>">Download Berkas</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>