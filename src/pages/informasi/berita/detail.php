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
    <title><?= $detail['namaBerita'] ?></title>
</head>

<body>
    <?php include(__DIR__ . '/../../mobilemenu.php') ?>
    <?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row" style="background-color: #f7f7f7;">
            <div class="col-md-8 mb-3">
                <div class="card rounded-3 px-3 mt-3">
                    <div class="card-body">
                        <!-- START CODE -->
                        <h6 class="fw-normal mt-2"><a href="/informasi/berita" class="btn btn-sm btn-outline-danger"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp; Informasi Terkini</h6>
                        <div class="row g-4" style="font-size:10pt;">
                            <div class="col-12">
                                <h5 class="fw-bold mt-3 mb-4"><?= $detail['namaBerita'] ?></h5>
                                <img class="w-100" src="/assets/media/<?= $detail['pathMedia'] ?>" alt="Gambar Berita">
                                <p class="mt-4"><?= html_entity_decode(nl2br($detail['deskripsiBerita'])) ?></p>
                                <?php foreach ($tagberita as $tag) { ?>
                                    <span class="badge bg-danger fs-6"><?= $tag['namaTag'] ?></span>
                                <?php } ?>
                                <div class="row">
                                    <h4 class="my-3">Tim Editor</h4>
                                    <div class="col-1">
                                        <img src="/assets/media/<?= $authorberita['pathMedia'] ?>" width="50px" height="50px" class="img rounded-circle">
                                    </div>
                                    <div class="col-2 ps-3">
                                        <h5><?= $authorberita['namaPegawai'] ?><br><span class="text-muted" style="font-size: 13px;">Writer</span></h5>
                                        <button class="btn btn-sm btn-danger btnProfil" data-bs-toggle="modal" data-bs-target="#modalProfil" data-bs-idPegawai="<?= $authorberita['idPegawai'] ?>">Profil</button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Profil Pegawai</b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="row mb-3">
                                                                <div class="col">
                                                                    <img src="" width="80px" height="80px" class="img imgPegawai rounded-circle" style="margin-left: 50px;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col" style="padding-left: 50px;">
                                                                    <!-- <label for="">Nama Pegawai</label> -->
                                                                    <h5 class="namaPegawai"></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <h6>Jabatan</h6>
                                                                    </td>
                                                                    <td style="padding: 0 20px 0 20px;">:</td>
                                                                    <td>
                                                                        <h5 class="jabatanPegawai"></h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6>NIP</h6>
                                                                    </td>
                                                                    <td style="padding: 0 20px 0 20px;">:</td>
                                                                    <td>
                                                                        <h5 class="nipPegawai"></h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6>Email</h6>
                                                                    </td>
                                                                    <td style="padding: 0 20px 0 20px;">:</td>
                                                                    <td>
                                                                        <h5 class="emailPegawai"></h5>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php foreach ($timeditorberita as $data) { ?>
                                        <div class="col-1">
                                            <img src="/assets/media/<?= $data['pathMedia'] ?>" width="50px" height="50px" class="img rounded-circle">
                                        </div>
                                        <div class="col-2 ps-3 mb-4">
                                            <h5><?= $data['namaPegawai'] ?><br><span class="text-muted" style="font-size: 13px;">Editor</span></h5>
                                            <button class="btn btn-sm btn-danger btnProfil" data-bs-toggle="modal" data-bs-target="#modalProfil" data-bs-idPegawai="<?= $data['idPegawai'] ?>">Profil</button>
                                        </div>
                                    <?php } ?>
                                </div>
                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-2 text-center text-grey">
                                        <a href="/likeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                            <i class="<?= count($likeBerita) > 0 ? 'fas' : 'far' ?> fa-thumbs-up"></i>
                                        </a>
                                        <span><?= $detail['countlikeBerita'] ?></span> Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <a href="/dislikeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                            <i class="<?= count($dislikeBerita) > 0 ? 'fas' : 'far' ?> fa-thumbs-up" style="-ms-transform: rotate(180deg);transform: rotate(180deg);"></i>
                                        </a>
                                        <span><?= $detail['countdislikeBerita'] ?></span> Tidak Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <i class="far fa-comment"></i>
                                        <span><?= $detail['countcommentBerita'] ?></span> Komentar
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <a href="#" class="text-dark text-decoration-none btn-sosmed" data-bs-toggle="modal" data-bs-target="#modalSosmed" data-bs-url="<?= $site_url ?>/informasi/berita/<?= $detail['idBerita'] ?>" data-bs-idBerita="<?= $detail['idBerita'] ?>">
                                            <i class="fas fa-share-alt"></i>
                                            <span><?= $detail['countshareBerita'] ?></span> Bagikan
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($idRole != null) { ?>
                    <div class="card my-2 p-4">
                        <?php if (count($msgSuccess) > 0) { ?>
                            <?php foreach ($msgSuccess as $msg) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?= $msg ?></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <form action="/comment/<?= $detail['idBerita']; ?>/store" method="POST">
                            <textarea class="form-control" rows="5" name="commentText" placeholder="Silahkan tuliskan komentarmu...."></textarea>
                            <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-danger rounded mt-3">Kirim</button>
                            </div>
                        </form>
                    </div>
                <?php } ?>
                <div class="card my-2 p-4">
                    <!-- <nav>
                        <div class="nav nav-tabs" id="nav-tab">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-semua" role="tab">Semua Komentar</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-populer" role="tab">Terpopuler</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-terbaru" role="tab">Terbaru</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-terdahulu" role="tab">Terdahulu</a>
                        </div>
                    </nav> -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active p-3" id="nav-semua" role="tabpanel">
                            <span><?= count($commentBerita) ?> Komentar</span>
                            <?php foreach ($commentBerita as $data) { ?>
                                <div class="row my-3">
                                    <div class="col-sm-2">
                                        <img src="/assets/media/<?= $data['pathMedia'] ?>" class="rounded-circle" width="80px" height="80px">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex">
                                            <h6 class="fw-bold"><?= $data['namaUser'] ?></h6>
                                            <!-- <span class="text-muted ps-3" style="font-size: 13px;">2 Bulan yang lalu</span> -->
                                        </div>
                                        <p class="text-grey">
                                            <?= $data['commentText'] ?>
                                        </p>
                                        <div class="row d-flex mb-2">
                                            <!-- <div class="col-2 text-center text-grey">
                                                <a href="/likeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                                    <i class="far fa-thumbs-up"></i>
                                                </a>
                                                <span style="font-size: 12px;"><span>0</span> Suka</span>
                                            </div>
                                            <div class="col-3 text-center text-grey">
                                                <a href="/dislikeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                                    <i class="far fa-thumbs-up" style="-ms-transform: rotate(180deg);transform: rotate(180deg);"></i>
                                                </a>
                                                <span style="font-size: 12px;"><span>0</span> Tidak Suka</span>
                                            </div> -->
                                            <div class="col-3 text-center text-grey">
                                                <a href="#" class="text-dark text-decoration-none" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $data['idCommentberita'] ?>" aria-expanded="false" aria-controls="collapseExample<?= $data['idCommentberita'] ?>">
                                                    <i class="far fa-comment"></i>
                                                </a>
                                                <span style="font-size: 12px;"><span><?= $data['countcommentComment'] ?></span> Komentar</span>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseExample<?= $data['idCommentberita'] ?>">
                                            <form action="/comment/reply/<?= $data['idCommentberita'] ?>" method="POST">
                                                <textarea name="commentText" id="" class="form-control" placeholder="Komentar"></textarea>
                                                <div class="d-flex flex-row-reverse">
                                                    <button type="submit" class="btn btn-danger rounded mt-3">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                        <?php if (count($data['reply']) > 0) { ?>
                                            <?php foreach ($data['reply'] as $key1 => $data1) { ?>
                                                <div class="card shadow my-2 p-2">
                                                    <span>Balasan</span>
                                                    <div class="row my-3">
                                                        <div class="col-sm-3">
                                                            <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/f970f73a-2f96-47f0-9de8-70ba736a287f.jpeg?w=750&q=90" class="rounded-circle" width="80px">
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="d-flex">
                                                                <h6><b><?= $data1['namaUser'] ?></b></h6>
                                                                <!-- <span class="text-muted ps-3" style="font-size: 13px;">2 Bulan yang lalu</span> -->
                                                            </div>
                                                            <p class="text-grey"><?= $data1['commentText'] ?></p>
                                                            <!-- <div class="row d-flex mb-2">
                                                                <div class="col-3 text-center text-grey">
                                                                    <a href="/likeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                                                        <i class="far fa-thumbs-up"></i>
                                                                    </a>
                                                                    <span style="font-size: 12px;"><span>0</span> Suka</span>
                                                                </div>
                                                                <div class="col-6 text-center text-grey">
                                                                    <a href="/dislikeBerita/<?= $detail['idBerita'] ?>/store" class="text-dark text-decoration-none">
                                                                        <i class="far fa-thumbs-up" style="-ms-transform: rotate(180deg);transform: rotate(180deg);"></i>
                                                                    </a>
                                                                    <span style="font-size: 12px;"><span>0</span> Tidak Suka</span>
                                                                </div>
                                                            </div> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="nav-populer" role="tabpanel">
                            <h4>Komentar Populer</h4>
                        </div>
                        <div class="tab-pane fade" id="nav-terbaru" role="tabpanel">
                            <h4>Komentar Terbaru</h4>
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
                            <a href="" class="shareberita whatsapp" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/whatsapp.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Whatsapp</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="shareberita instagram" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/instagram.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Instagram</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="shareberita telegram" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/telegram.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Telegram</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="shareberita facebook" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/facebook.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Facebook</p>
                            </a>
                        </div>
                        <div class="col-2 mb-3">
                            <a href="" class="shareberita twitter" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/twitter.svg" class="w-50 d-block mx-auto" alt="">
                                <p class="text-dark text-center" style="font-size: 12px"><br>Twitter</p>
                            </a>
                        </div>
                        <!-- <div class="col-2 mb-3">
                  <a href="" class="shareberita googleplus" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/google-plus.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Google +</span></a>
                </div> 
                <div class="col-2 mb-3">
                  <a href="" class="shareberita reddit" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/reddit.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Reddit</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="shareberita linkedin" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/linkedin.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>LinkedIn</span></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="shareberita pinterest" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/pinterest.svg" class="w-50" alt=""><span class="text-dark" style="font-size: 12px"><br>Pinterest</span></a>
                </div> -->
                        <div class="col-2 mb-3">
                            <a href="" class="shareberita email" dataidberita="" target="_blank"><img src="/assets/icon/sosmed/email.svg" class="w-50 d-block mx-auto" alt="">
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
            modal.find('.facebook').prop('dataidberita', 'asdasd');
            // modal.find('.twitter').prop('href', 'http://twitter.com/share?url=' + btn.attr('data-bs-url'));
            modal.find('.twitter').prop('href', 'https://twitter.com/login?lang=id');
            modal.find('.twitter').prop('idberita', $(this).attr('data-bs-idBerita'));
            // modal.find('.googleplus').prop('href', 'https://plus.google.com/share?url='+btn.attr('data-bs-url'));
            modal.find('.instagram').prop('href', 'https://www.instagram.com/accounts/login');
            modal.find('.instagram').prop('idberita', $(this).attr('data-bs-idBerita'));
            modal.find('.reddit').prop('href', 'http://reddit.com/submit?url=' + btn.attr('data-bs-url'));
            modal.find('.reddit').prop('idberita', $(this).attr('data-bs-idBerita'));
            modal.find('.pinterest').prop('href', 'http://pinterest.com/pin/create/button/?url=' + btn.attr('data-bs-url'));
            modal.find('.pinterest').prop('idberita', $(this).attr('data-bs-idBerita'));
            // modal.find('.whatsapp').prop('href', 'http://pinterest.com/pin/create/button/?url=' + btn.attr('data-bs-url'));
            modal.find('.whatsapp').prop('href', 'https://web.whatsapp.com');
            modal.find('.whatsapp').prop('idberita', $(this).attr('data-bs-idBerita'));
            modal.find('.telegram').prop('href', 'https://web.telegram.org/');
            modal.find('.telegram').prop('idberita', $(this).attr('data-bs-idBerita'));
            modal.find('.email').prop('href', 'mailto:?Subject=Berita Kesbangpol&Body=Klik%20link%20untuk%20melihat%20berita%20%20 ' + btn.attr('data-bs-url'));
            modal.find('.email').prop('idberita', $(this).attr('data-bs-idBerita'));
        });

        $(document).on('click', '.btnProfil', function() {
            var modal = $('#modalProfil');
            $.ajax({
                type: 'GET',
                url: '/pegawai-kesbangpol/' + $(this).attr('data-bs-idPegawai') + '/get'
            }).done(function(data) {
                modal.find('.imgPegawai').prop('src', '/assets/media/' + data.detail.pathMedia)
                modal.find('.namaPegawai').html(data.detail.namaPegawai)
                modal.find('.jabatanPegawai').html(data.detail.jabatanPegawai)
                modal.find('.nipPegawai').html(data.detail.nipPegawai)
                modal.find('.emailPegawai').html(data.detail.emailPegawai)
            })
        })

        $(document).on('click', '.shareberita', function() {
            $.ajax({
                type: 'POST',
                url: '/shareberita/' + $(this).attr('data-bs-idBerita') + '/get'
            })
        })
    </script>
</body>

</html>