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
                <div class="card rounded-3 mt-5 px-3">
                    <div class="card-body">
                        <!-- START CODE -->
                        <h6 class="fw-normal mt-2"><a href="/informasi/pengumuman" class="btn btn-sm btn-outline-danger"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp; Pengumuman</h6>
                        <div class="row g-4">
                            <div class="col-12">
                                <h5 class="fw-bold mt-3 mb-4"><?= $detail['namaPengumuman'] ?></h5>
                                <img class="w-100" src="/assets/media/<?= $detail['pathMedia'] ?>" alt="Gambar Berita">
                                <p class="mt-4 teksjustify"><?= html_entity_decode(nl2br($detail['deskripsiPengumuman'])) ?></p>
                                <span class="badge bg-danger fs-6">Opini suara & publik</span>
                                <span class="badge bg-danger fs-6">Public Government</span>
                                <div class="row">
                                    <h4 class="my-3">Tim Editor</h4>
                                    <div class="col-1">
                                        <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/7384aef5-e918-48f0-a8da-36b99c78116d.jpeg?w=750&q=90" width="50px" height="50px" class="img rounded-circle">
                                    </div>
                                    <div class="col-4 ps-3">
                                        <h5>Gina Agustina<br><span class="text-muted" style="font-size: 11px;">Writer</span></h5>
                                        <button class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;Ikuti&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    </div>
                                    <div class="col-1">
                                        <img src="https://awsimages.detik.net.id/community/media/visual/2019/02/19/3fc2caf6-118c-457d-8a28-8868c1753fda.jpeg?w=750&q=90" width="50px" height="50px" class="img rounded-circle">
                                    </div>
                                    <div class="col-4 ps-3">
                                        <h5>Arya Aprian<br><span class="text-muted" style="font-size: 11px;">Editor</span></h5>
                                        <button class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;Ikuti&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-2 text-center text-grey">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>0</span> Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <i class="far fa-thumbs-up" style="-ms-transform: rotate(180deg);transform: rotate(180deg);"></i>
                                        <span>0</span> Tidak Suka
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <i class="far fa-comment"></i>
                                        <span>0</span> Komentar
                                    </div>
                                    <div class="col-2 text-center text-grey">
                                        <i class="fas fa-share-alt"></i>
                                        <span>0</span> Bagikan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2 p-4">
                    <textarea class="form-control" rows="5" placeholder="Silahkan tuliskan komentarmu...."></textarea>
                    <div class="d-flex flex-row-reverse">
                        <button class="btn btn-danger rounded mt-3">Kirim</button>
                    </div>
                </div>
                <div class="card my-2 p-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-semua" role="tab">Semua Komentar</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-populer" role="tab">Terpopuler</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-terbaru" role="tab">Terbaru</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-terdahulu" role="tab">Terdahulu</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active p-3" id="nav-semua" role="tabpanel">
                            <span>2 Komentar</span>
                            <div class="row my-3">
                                <div class="col-sm-2">
                                    <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/f970f73a-2f96-47f0-9de8-70ba736a287f.jpeg?w=750&q=90" class="rounded-circle" width="80px">
                                </div>
                                <div class="col-sm-9">
                                    <div class="d-flex">
                                        <h6>Johan Yudiono</h6>
                                        <span class="text-muted ps-3" style="font-size: 13px;">2 Bulan yang lalu</span>
                                    </div>
                                    <p class="text-grey">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                    </p>
                                    <span class="pe-2 text-lightgrey"><i class="far fa-thumbs-up"></i>2k</span>
                                    <span class="pe-2 text-lightgrey"><i class="far fa-thumbs-down"></i></i>50</span>
                                    <span class="pe-2 text-lightgrey"><i class="far fa-comment"></i>1</span>
                                    <div class="card shadow my-2 p-2">
                                        <span>Balasan</span>
                                        <div class="row my-3">
                                            <div class="col-sm-3">
                                                <img src="https://awsimages.detik.net.id/community/media/visual/2019/09/25/f970f73a-2f96-47f0-9de8-70ba736a287f.jpeg?w=750&q=90" class="rounded-circle" width="80px">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="d-flex">
                                                    <h6>Johan Yudiono</h6>
                                                    <span class="text-muted ps-3" style="font-size: 13px;">2 Bulan yang lalu</span>
                                                </div>
                                                <p class="text-grey">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                </p>
                                                <span class="pe-2 text-lightgrey"><i class="far fa-thumbs-up"></i>2k</span>
                                                <span class="pe-2 text-lightgrey"><i class="far fa-thumbs-down"></i></i>50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>