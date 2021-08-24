<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= $detail['namaPengumuman'] ?></title>
</head>

<body>
    <?php include(__DIR__ . '/../../mobilemenu.php') ?>
    <?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card rounded-3 px-3 mt-3">
                    <div class="card-body">
                        <!-- START CODE -->
                        <h6 class="fw-normal mt-2"><a href="/informasi/pengumuman" class="btn btn-sm btn-outline-danger"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp; Pengumuman</h6>
                        <div class="row g-4">
                            <div class="col-12">
                                <h5 class="fw-bold mt-3 mb-4"><?= $detail['namaPengumuman'] ?></h5>
                                <img class="w-100" src="/assets/media/<?= $detail['pathMedia'] ?>" alt="Gambar Berita">
                                <p class="mt-4 teksjustify"><?= html_entity_decode(nl2br($detail['deskripsiPengumuman'])) ?></p>
                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-2 text-center text-grey">
                                        <a href="/likePengumuman/<?= $detail['idPengumuman'] ?>/store" class="text-dark text-decoration-none">
                                            <i class="<?= count($likepengumuman) > 0 ? 'fas' : 'far' ?> fa-thumbs-up"></i>
                                        </a>
                                        <span><?= $detail['countlikePengumuman'] ?></span> Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <a href="/dislikePengumuman/<?= $detail['idPengumuman'] ?>/store" class="text-dark text-decoration-none">
                                            <i class="<?= count($dislikepengumuman) > 0 ? 'fas' : 'far' ?> fa-thumbs-up" style="-ms-transform: rotate(180deg);transform: rotate(180deg);"></i>
                                        </a>
                                        <span><?= $detail['countdislikePengumuman'] ?></span> Tidak Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <a href="#" class="text-dark text-decoration-none btn-sosmed" data-bs-toggle="modal" data-bs-target="#modalSosmed" data-bs-url="<?= $site_url ?>/informasi/berita/<?= $detail['idPengumuman'] ?>" data-bs-idPengumuman="<?= $detail['idPengumuman'] ?>">
                                            <i class="fas fa-share-alt"></i>
                                            <span><?= $detail['countsharePengumuman'] ?></span> Bagikan
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include(__DIR__ . '/../../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../../footer.php') ?>

    <!-- Modal -->
    <div class="modal fade" id="modalSosmed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Share Berita</h5>
                    <button type="button" class="btn btn-outline-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-2 mb-3">
                            <a href="" class="whatsapp" target="_blank"><img src="/assets/icon/sosmed/whatsapp.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Whatsapp</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="instagram" target="_blank"><img src="/assets/icon/sosmed/instagram.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Instagram</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="telegram" target="_blank"><img src="/assets/icon/sosmed/telegram.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Telegram</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="facebook" target="_blank"><img src="/assets/icon/sosmed/facebook.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Facebook</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="twitter" target="_blank"><img src="/assets/icon/sosmed/twitter.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Twitter</p>
                            </a>
                        </div>
                        <!-- <div class="col-2 mb-3">
                  <a href="" class="googleplus" target="_blank"><img src="/assets/icon/sosmed/google-plus.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Google +</span></a>
                </div> 
                <div class="col-2 mb-3">
                  <a href="" class="reddit" target="_blank"><img src="/assets/icon/sosmed/reddit.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Reddit</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="linkedin" target="_blank"><img src="/assets/icon/sosmed/linkedin.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>LinkedIn</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="pinterest" target="_blank"><img src="/assets/icon/sosmed/pinterest.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Pinterest</span></a>
                </div> -->
                        <div class="col-2 mb-3">
                            <a href="" class="email" target="_blank"><img src="/assets/icon/sosmed/email.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Email</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
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

            // modal.find('.facebook').prop('href', 'http://www.facebook.com/sharer.php?u=' + btn.attr('data-bs-url'));
            modal.find('.facebook').prop('href', 'https://id-id.facebook.com/login/web/');
            // modal.find('.twitter').prop('href', 'http://twitter.com/share?url=' + btn.attr('data-bs-url'));
            modal.find('.twitter').prop('href', 'https://twitter.com/login?lang=id');
            // modal.find('.googleplus').prop('href', 'https://plus.google.com/share?url='+btn.attr('data-bs-url'));
            modal.find('.instagram').prop('href', 'https://www.instagram.com/accounts/login');
            modal.find('.reddit').prop('href', 'http://reddit.com/submit?url=' + btn.attr('data-bs-url'));
            modal.find('.pinterest').prop('href', 'http://pinterest.com/pin/create/button/?url=' + btn.attr('data-bs-url'));
            // modal.find('.whatsapp').prop('href', 'http://pinterest.com/pin/create/button/?url=' + btn.attr('data-bs-url'));
            modal.find('.whatsapp').prop('href', 'https://web.whatsapp.com');
            modal.find('.telegram').prop('href', 'https://web.telegram.org/');
            modal.find('.email').prop('href', 'mailto:?Subject=Berita Kesbangpol&Body=Klik%20link%20untuk%20melihat%20berita%20%20 ' + btn.attr('data-bs-url'));
        });
    </script>
</body>

</html>