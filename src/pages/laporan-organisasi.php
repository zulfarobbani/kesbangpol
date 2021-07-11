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
  <title>LAPORAN ORGANISASI</title>
</head>

<body style="background-color : #EEEEEE; color: navy;">

  <?php include(__DIR__.'/navbar.php' )?>
  <div class="container-fluid">   
      <div class="row">  
        <div class="col-md-8 top-1 start-0 ps-5 mb-3">
          <?php include(__DIR__.'/navtabsinfoorganisasi.php' )?>
          <!-- START CODE -->
          <h4>Program Kerja Tahunan</h4>
          <div class="col-12">
            <table class="table mt-3">
              <thead>
                <th>Tahun</th>
                <th>Semester I</th>
                <th>Semester II</th>
              </thead>
              <tbody>
                <td></td>
                <td></td>
                <td class="float-end">
                  <a href="" style="color: navy;"><span class="material-icons-outlined px-2">file_upload</span></a>
                  <a href="" style="color: navy;"><span class="material-icons-outlined px-2">file_upload</span></a>
                </td>
              </tbody>
            </table>
            <div class="d-flex flex-row-reverse">
             <a href="" type="button" class="btn btn-outline-danger ms-3" style="color: navy;">Simpan</a>
             <a href="" type="button" class="btn btn-outline-danger" style="color: navy;">Ubah</a>
           </div>
          </div>

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
