<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>KESBANGPOL</title>
</head>

<body>
  <?php include(__DIR__ . '/mobilemenu.php') ?>
  <?php include(__DIR__ . '/mobilenav.php') ?>
  <?php include(__DIR__ . '/navbar.php') ?>
  <div class="container-fluid">
    <div class="row pb-5" style="background-color : #EEEEEE;">
      <div class="col-md-8 top-1 start-0">
        <div class="container-fluid">
          <!-- START CODE -->
          <h4 class="fw-normal mt-5">Informasi KESBANG Terkini</h4>
          <div class="content-wrapper">
            <?php foreach ($datas as $key => $value) { ?>
              <div class="news-card">
    <img src="/assets/media/<?= $value['pathMedia'] ?>" alt="<?= $value['namaBerita'] ?>" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"><?= $value['namaBerita'] ?></h2>
      <div class="news-card__post-date"><?= $value['dateCreate'] ?></div>
      <div class="news-card__details-wrapper">
        <div class="text-elps text-elps-3">
        <p class="news-card__excerpt"><?= $value['deskripsiBerita'] ?></p>
        </div>
        <a href="#" class="float-end btn-sosmed d-inline" data-bs-toggle="modal" data-bs-target="#modalSosmed" data-bs-url="<?= $site_url ?>/informasi/berita/<?= $value['idBerita'] ?>">
                      <span class="material-icons-outlined fs-6 mr-3 mt-3" style="color: white;">more_vert</span>
                    </a>
        <a href="/informasi/berita/<?= $value['idBerita'] ?>" class="news-card__read-more d-inline">Read more <i class="fas fa-long-arrow-alt-right mt-3"></i></a>
      </div>
    </div>
  </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modalSosmed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Share Berita</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                <div class="col-2 mb-3">
                  <a href="" class="facebook" target="_blank"><img src="/assets/icon/sosmed/facebook.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Facebook</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="twitter" target="_blank"><img src="/assets/icon/sosmed/twitter.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Twitter</span></a>
                </div>
                <!-- <div class="col-2 mb-3">
                  <a href="" class="googleplus" target="_blank"><img src="/assets/icon/sosmed/google-plus.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Google +</span></a>
                </div> -->
                <div class="col-2 mb-3">
                  <a href="" class="reddit" target="_blank"><img src="/assets/icon/sosmed/reddit.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Reddit</span></a>
                </div>
                <!-- <div class="col-2 mb-3">
                  <a href="" class="linkedin" target="_blank"><img src="/assets/icon/sosmed/linkedin.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>LinkedIn</span></a>
                </div> -->
                <div class="col-2 mb-3">
                  <a href="" class="pinterest" target="_blank"><img src="/assets/icon/sosmed/pinterest.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Pinterest</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="email" target="_blank"><img src="/assets/icon/sosmed/email.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Email</span></a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <?php include(__DIR__ . '/sidebar.php') ?>
      <?php include(__DIR__ . '/footer.php') ?>
    </div>
  </div>
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>

  <script>
    $(document).on('click', '.btn-sosmed', function() {
      var btn = $(this);
      var modal = $('#modalSosmed');

      modal.find('.facebook').prop('href', 'http://www.facebook.com/sharer.php?u='+btn.attr('data-bs-url'));
      modal.find('.twitter').prop('href', 'http://twitter.com/share?url='+btn.attr('data-bs-url'));
      // modal.find('.googleplus').prop('href', 'https://plus.google.com/share?url='+btn.attr('data-bs-url'));
      modal.find('.reddit').prop('href', 'http://reddit.com/submit?url='+btn.attr('data-bs-url'));
      modal.find('.pinterest').prop('href', 'http://pinterest.com/pin/create/button/?url='+btn.attr('data-bs-url'));
      modal.find('.email').prop('href', 'mailto:?Subject=Berita Kesbangpol&Body=Klik%20link%20untuk%20melihat%20berita%20%20 '+btn.attr('data-bs-url'));
    })
  </script>
</body>

</html>