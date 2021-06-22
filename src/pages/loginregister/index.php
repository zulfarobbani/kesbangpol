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
  <title>LOGIN</title>
  <style type="text/css">
  	.form-control{
  		border-radius: 7px;
  	}
  </style>
</head>

<body style="background-color : #EEEEEE; color: navy;">

  <?php include(__DIR__.'/../navbar.php' )?>
  <div class="container-fluid">   
      <div class="row">  
        <div class="col-md-8 top-1 start-0 ps-5">
          <!-- START CODE -->
          <h4 class="mt-3">ORSOSPOL</h4>
          <div class="row">
          	<div class="col-md-6 text-end">
          		<h4 class="fw-light">Login</h4>
          		<input type="text" class="form-control shadow-sm mb-3" name="" placeholder="Username">
          		<input type="password" class="form-control shadow-sm mb-3" name="" placeholder="Password">
          		<button type="submit" class="btn btn-outline-danger"><span style="color: navy;">Masuk</span></button>
          	</div>
          	<div class="col-md-6 text-end">
          		<h4 class="fw-light">Register</h4>
          		<input type="text" class="form-control shadow-sm mb-3" name="" placeholder="Nama Lengkap Penanggung Jawab">
          		<input type="text" class="form-control shadow-sm mb-3" name="" placeholder="Username">
          		<input type="password" class="form-control shadow-sm mb-3" name="" placeholder="Password">
          		<input type="email" class="form-control shadow-sm mb-3" name="" placeholder="Email">
          		<button type="submit" class="btn btn-outline-danger"><span style="color: navy;">Daftar</span></button>
          	</div>
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
