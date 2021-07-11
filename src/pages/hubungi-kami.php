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
        <div class="col-md-8 top-1 start-0 ps-5 mt-3">
          <!-- START CODE -->
          <div class="row align-middle">
            <div class="col-1 my-3 ps-4">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="col-2 my-3 m">
              <p class="p-0 m-0">Alamat Kantor</p>
            </div>
            <div class="col-9 my-3"><!-- 
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.53585951585657!2d107.60665363244992!3d-6.941435738795081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87efa30ef29%3A0x32ec20403fe5c6ba!2sJl.%20Kangkung%20Kidul%20No.18%2C%20Lkr.%20Sel.%2C%20Kec.%20Lengkong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040263%2C%20Indonesia!5e0!3m2!1sid!2sus!4v1624851400427!5m2!1sid!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
            <div class="col-1 my-3 ps-4">
              <i class="far fa-phone-alt"></i>
            </div>
            <div class="col-4 my-3">
              <p class="p-0 m-0">Contact Person</p>
            </div>
            <div class="col-7 my-3">
              
            </div>
            <div class="col-1 my-3 ps-4">
              <span class="material-icons-outlined">message</span>
            </div>
            <div class="col-4 my-3">
              <p class="p-0 m-0">Kirim Pesan:</p>
            </div>
            <div class="col-12 ps-4">
              <textarea class="form-control rounded shadow" placeholder="Ketik Pesan" rows="3"></textarea>   
            </div>
            <div class="d-flex flex-row-reverse mt-3">
              <button class="btn btn-outline-danger" style="color:navy;">Simpan</button>
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
