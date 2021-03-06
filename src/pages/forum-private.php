<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="canonical" href="https://t.me/forumorsospol/3">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title></title>
</head>

<body>
<?php include(__DIR__ . '/mobilemenu.php') ?>
<?php include(__DIR__ . '/mobilenav.php') ?>
  <?php include(__DIR__ . '/navbar.php') ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 mb-3">
        <?php include(__DIR__ . '/navtabsforum.php') ?>
        <!-- START CODE -->
        <h4>Forum Diskusi ORSOSPOL</h4>

        <div class="card text-center">
          <div class="card-header">
            Private Chat
          </div>
          <div class="card-body">
            <script>
              window.intergramId = "986376907"
              window.intergramCustomizations = {
                titleClosed: 'Klik di sini untuk memulai percakapan bersama Admin KESBANGPOL',
                titleOpen: 'Kesatuan Bangsa dan Politik Pemerintah Kota Cimahi',
                introMessage: 'Hi! Ada yang bisa Kami Bantu?',
                autoResponse: 'Mohon tunggu, admin kami akan segera membalas pesan Anda',
                autoNoResponse: 'Hmm, sepertinya admin sedang sibuk, silakan tinggalkan pesan' +
                  'Baiklah, akan segera kami balas pesannya, terima kasih',
                mainColor: "#e88c4b", // Can be any css supported color 'red', 'rgb(255,87,34)', etc
                alwaysUseFloatingButton: false // Use the mobile floating button also on large screens
              };
            </script>
            <script id="intergram" type="text/javascript" src="/assets/js/intergram.js"></script> <em class="d-block d-md-none" style="font-size:0.75rem;position:absolute; right:5%; top:55%;">Klik tombol di sebelah kiri untuk memulai percakapan</em>

          </div>

        </div>


      </div>

      <?php include(__DIR__ . '/sidebar.php') ?>
    </div>
  </div>
  <?php include(__DIR__ . '/footer.php') ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>


</body>

</html>