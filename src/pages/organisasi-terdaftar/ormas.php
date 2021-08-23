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
  <link rel="stylesheet" href="/assets/css/style.css">
  <title></title>
</head>

<body style="background-color : #EEEEEE; color: navy;">
  <?php include(__DIR__ . '/../mobilemenu.php') ?>
  <?php include(__DIR__ . '/../mobilenav.php') ?>
  <?php include(__DIR__ . '/../navbar.php') ?>
  <div class="container-fluid content-main">
    <div class="row">
      <div class="col-md-8 mb-3">
        <div class="card rounded-3 mt-5 px-3">
          <div class="card-body">
            <!-- <div class="container-fluid p-1 mt-4">
          <form action="" method="GET">
            <div class="input-group">
              <span class="input-group-text bg-body border-0 text-muted"><span class="material-icons-outlined align-middle">search</span></span>
              <input type="text" name="search" class="form-control border-0" placeholder="Cari ORMAS">
            </div>
          </form>
        </div> -->
            <?php include(__DIR__ . '/../navtabsorganisasi.php') ?>
            <!-- START CODE -->
            <h4>ORMAS Berbadan Hukum Terdaftar</h4>

            <div class="col-12">
              <table class="table table-bordered table-striped mt-3">
                <thead style="color: navy;">
                  <tr>
                    <th class="col-1">No</th>
                    <th class="col-3">No. AHU</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($datas as $key => $value) { ?>
                    <tr class="paragraf align-middle">

                      <td><?= $key += 1 ?></td>
                      <td><?= $value['noAHU'] ?></td>
                      <td><?= $value['namaOrsospol'] ?></td>
                      <td><?= $value['alamatOrsospol'] ?></td>
                      <!-- <td class="float-end">
                    <a href="regulasi/edit/<?= $value['idRegulasi']; ?>">EDIT</a> 
                    <a href="regulasi/delete/<?= $value['idRegulasi']; ?>">HAPUS</a>
                  </td> -->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>

              <div class="row">
                <div class="col-6">
                  <h6 class="text-muted">Showing <?= $pagination['page_first_result'] + 1 ?> to <?= count($datas) ?> of <?= $pagination['countRows'] ?> entries</h6>
                </div>
                <?php if ($pagination['number_of_page'] > 1) { ?>
                <div class="col-6">
                  <?php
                  $links = "<ul class=\"pagination float-end\">
            <li class=\"page-item " . ($pagination['current_page'] - 1 == 0 ? 'disabled' : '') . "\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . (intval($pagination['current_page']) - 1) . "\"><i class=\"fas fa-angle-left\"></i></a></li>";
                  if ($pagination['number_of_page'] >= 1 && $pagination['current_page'] <= $pagination['number_of_page']) {
                    $i = max(2, $pagination['current_page'] - 5);
                    $links .= "<li class=\"page-item " . ($pagination['current_page'] == ($i - 1) ? 'active' : '') . "\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=1\">1</a></li>";
                    if ($i > 2)
                      $links .= "<li class=\"page-item\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . ($i - 1) . "\"> ... </a></li>";
                    for (; $i < min($pagination['current_page'] + 6, $pagination['number_of_page']); $i++) {
                      $links .= "<li class=\"page-item " . ($pagination['current_page'] == $i ? 'active' : '') . "\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . $i . "\">" . $i . "</a></li>";
                    }
                    if ($i != $pagination['number_of_page'])
                      $links .= "<li class=\"page-item\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . $i . "\"> ... </a></li>";
                    $links .= "<li class=\"page-item " . ($pagination['current_page'] == $pagination['number_of_page'] ? 'active' : '') . "\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . $pagination['number_of_page'] . "\">" . $pagination['number_of_page'] . "</a></li>";
                  }
                  $links .= "<li class=\"page-item " . ($pagination['current_page'] + 1 > $pagination['number_of_page'] ? 'disabled' : '') . "\"><a class=\"page-link\" href=\"?data_per_page=" . $pagination['result_per_page'] . "&page=" . (intval($pagination['current_page']) + 1) . "\"><i class=\"fas fa-angle-right\"></i></a></li>
            </ul>";
                  echo $links;
                  ?>
                </div>
                <?php } ?>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <?php include(__DIR__ . '/../sidebar.php') ?>
    </div>
  </div>
  <?php include(__DIR__ . '/../footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
</body>

</html>