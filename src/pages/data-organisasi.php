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

  <?php include(__DIR__.'/navbar.php' )?>
  <div class="container-fluid">   
      <div class="row">  
        <div class="col-md-8 top-1 start-0 ps-5 mb-3">
          <?php include(__DIR__.'/navtabsinfoorganisasi.php' )?>
          <!-- START CODE -->
          <div class="row">
            <div class="col-md-5 m-0">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Nama Organisasi">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Akta Notaris">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Akta KEMENKUMHAM">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="NPWP">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Rekening Organisasi">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Alamat Sekretariat">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Alamat Email">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Website">
              <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Telepon">
            </div>
            <div class="col-md-3 text-center">
                <img src="https://posvice.com/wp-content/themes/posvice13/img/user.png" width="90%" height="auto">
                <p>Foto Ketua</p>
                <img src="https://posvice.com/wp-content/themes/posvice13/img/user.png" width="90%" height="auto">
                <p>Foto Sekertaris</p>
                <img src="https://posvice.com/wp-content/themes/posvice13/img/user.png" width="90%" height="auto">
                <p>Foto Bendahara</p>
            </div>
            <div class="col-md-4">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Nama Ketua">
             <input type="number" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="NIK KTP">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Alamat">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Telepon">
             <br>
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Nama Sekretaris">
             <input type="number" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="NIK KTP">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Alamat">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Telepon">
             <br>
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Nama Bendahara">
             <input type="number" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="NIK KTP">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="Alamat">
             <input type="text" class="form-control mb-2 rounded border-0 shadow-sm shadow" name="" placeholder="No. Telepon">
             <br>
           </div>
           <div class="d-flex flex-row-reverse">
             <a href="" type="button" class="btn btn-outline-danger ms-3" style="color: navy;">Simpan</a>
             <a href="" type="button" class="btn btn-outline-danger" style="color: navy;">Ubah</a>
           </div>
          </div>
          <hr>
          <h4 class="fw-light">Daftar Anggota Organisasi</h4>
          <table class="table mt-3">
            <thead>
              <th>No.</th>
              <th>NIA</th>
              <th class="col-2">Nama</th>
              <th>Jabatan</th>
              <th>Lahir</th>
              <th>Pendidikan</th>
              <th>Alamat</th>
            </thead>
          </table>

        </div>
        <?php include(__DIR__.'/sidebar.php' )?>
      </div>
      <?php include(__DIR__.'/footer.php' )?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>
