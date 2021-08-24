<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://t.me/forumorsospol/3">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title></title>
</head>

<body>
<?php include(__DIR__ . '/mobilemenu.php') ?>
<?php include(__DIR__ . '/mobilenav.php') ?>
  <?php include(__DIR__ . '/navbar.php') ?>
  <div class="container-fluid" style="margin-bottom: 150px;">
    <div class="row">
      <div class="col-md-8 mb-3">
      <div class="card rounded-3 px-3 mt-3">
        <div class="card-body">
        <?php include(__DIR__ . '/navtabsforum.php') ?>
        <!-- START CODE -->
        <h4>Forum Private</h4>
        <em class="d-block d-md-none mb-2" style="font-size:0.7rem;">Klik tombol di sebelah kiri untuk memulai percakapan</em>
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
            <script id="intergram" type="text/javascript" src="/assets/js/intergram.js"></script>


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