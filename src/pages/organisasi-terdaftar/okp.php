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
  <title></title>
</head>

<body style="background-color : #EEEEEE; color: navy;">
<?php include(__DIR__ . '/../mobilemenu.php') ?>
<?php include(__DIR__ . '/../mobilenav.php') ?>
  <?php include(__DIR__.'/../navbar.php' )?>
  <div class="container-fluid">   
      <div class="row">  
        <div class="col-md-8 mb-3">
          <div class="container-fluid p-1 mt-4">  
            <div class="input-group">
              <span class="input-group-text bg-body border-0 text-muted"><span class="material-icons-outlined align-middle">search</span></span>
              <input type="text" class="form-control border-0" placeholder="Cari OKP">
            </div>
          </div>
          <?php include(__DIR__.'/../navtabsorganisasi.php' )?>
          <!-- START CODE -->
          <h4>OKP Terdaftar</h4>

          <div class="col-12">
            <table class="table mt-3" style="color: navy;">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th class="col-3">No. AHU</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <td></td>   
                </tr>
              </thead>
              <?php foreach($data_okp as $key => $values) { ?>
              <tbody>
                <tr>

                  <td><?=$key+=1?></td>
                  <td><?= $values['idOrsospol']?></td>
                  <td><?= $values['namaOrsospol']?></td>
                  <td><?= $values['alamatOrsospol']?></td>
                  <!-- <td class="float-end">
                    <a href="regulasi/edit/<?= $values['idRegulasi'];?>">EDIT</a> 
                    <a href="regulasi/delete/<?= $values['idRegulasi'];?>">HAPUS</a>
                  </td> -->
                            
                  </tr>
              </tbody>
              <?php }?>
            </table>
          </div>

          </div>
        <?php include(__DIR__.'/../sidebar.php' )?>
      </div>
      <?php include(__DIR__.'/../footer.php' )?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>
