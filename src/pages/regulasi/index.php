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
  <title>REGULASI</title>
</head>

<body>
  <?php include(__DIR__ . '/../mobilemenu.php') ?>
  <?php include(__DIR__ . '/../mobilenav.php') ?>
  <?php include(__DIR__ . '/../navbar.php') ?>
  <div class="container-fluid content-main">
    <div class="row" style="background-color : #EEEEEE;">
      <div class="col-md-8 mb-3">
        <div class="card rounded-3 mt-5 px-3">
          <div class="card-body">
            <?php include(__DIR__ . '/../navtabsprofil.php') ?>
            <!-- START CODE -->
            <div class="d-block">
              <h4 class="d-inline">Regulasi</h4>
            </div>
            <!-- <span><a href="regulasi/create">TAMBAH REGULASI</a></span> -->
            <div class="col-12">
              <table class="table mt-3">
                <thead style="color: navy;">
                  <tr>
                    <!--<th class="col-1">No</th>-->
                    <th>Nama Regulasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($datas as $key => $values) { ?>
                    <tr>
                      <!--<td class="align-middle"><?= $key += 1 ?>.</td>-->
                      <!-- bere modal pratinjau regulasi d list ieu -->
                      <td class="align-middle hstack">
                        <?= $values['namaRegulasi'] ?>
                        <a class="btn btn-outline-danger navy ms-auto" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-file="/assets/media/<?= $values['pathMedia'] ?>"><i class=" fas fa-eye"></i> Pratinjau Berkas</a>
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
  </div>
  <?php include(__DIR__ . '/../footer.php') ?>

  <!-- Modal Detail -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">File Regulasi</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="" alt="" class="img-fluid fileSakip">
          <iframe src="" frameborder="0" class="fileSakipPDF w-100" height="500px" toolbar="false"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>
  <script>
    var detailModal = document.getElementById('detailModal')
    detailModal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var fileSakip = button.getAttribute('data-bs-file')
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.

      var fileSakipContainerPDF = detailModal.querySelector('.fileSakipPDF')
      var fileSakipContainer = detailModal.querySelector('.fileSakip')
      if (fileSakip.split('.')[1] == "pdf") {
        fileSakipContainerPDF.setAttribute('src', fileSakip)
        fileSakipContainer.setAttribute('style', 'display: none');
        fileSakipContainerPDF.setAttribute('style', 'display: block');
      } else {
        fileSakipContainer.setAttribute('src', fileSakip)
        fileSakipContainerPDF.setAttribute('style', 'display: none');
        fileSakipContainer.setAttribute('style', 'display: block');
      }
    })
  </script>
</body>

</html>