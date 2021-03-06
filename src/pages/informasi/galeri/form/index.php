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

    <title>Gallery</title>
</head>

<body style="background-color : #EEEEEE; color:navy;">
    <?php include(__DIR__ . '/../../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 top-1 start-0 ps-5 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-sm btn-primary rounded-pill h-75 px-4 btnTambah" data-bs-toggle="modal" data-bs-target="#modaltambahproduct" id="btnIjo">
                                        <span class="material-icons-outlined">add_box</span>
                                        <span class="align-top">Tambah Gallery</span></button>
                                </div>
                            </div>

                            <div class="table-responsive">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Gallery</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $key => $data) { ?>
                                            <tr>
                                                <td><?= $data['namaGallery'] ?></td>
                                                <td><?= date('d M Y', strtotime($data['dateCreate'])) ?></td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn px-2 py-1 me-1 text-dark btnEdit" id="btnBiru" data-bs-toggle="modal" data-bs-target="#modalubahproduct" data-bs-id="<?= $data['idGallery'] ?>"><i class="fa fa-edit"></i></button>

                                                    <button type="button" class="btn px-2 py-1 me-1 text-dark btnHapus" id="btnMerah" data-bs-toggle="modal" data-bs-target="#modalhapusproduct" data-bs-id="<?= $data['idGallery'] ?>"><i class="fa fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-muted">Showing <?= $pagination['page_first_result'] + 1 ?> to <?= count($datas) ?> of <?= $pagination['countRows'] ?> entries</h6>
                                </div>
                                <div class="col-6">
                                    <ul class="pagination float-end">
                                        <li class="page-item <?= $pagination['current_page'] - 1 == 0 ? 'disabled' : '' ?>"><a class="page-link" href="?page=<?= intval($pagination['current_page']) - 1 ?>"><i class="fas fa-angle-left"></i></a></li>
                                        <?php for ($page = 1; $page <= $pagination['number_of_page']; $page++) { ?>
                                            <li class="page-item <?= $pagination['current_page'] == $page ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $page ?>"><?= $page ?></a></li>
                                        <?php } ?>
                                        <li class="page-item <?= $pagination['current_page'] + 1 > $pagination['number_of_page'] ? 'disabled' : '' ?>"><a class="page-link" href="?page=<?= intval($pagination['current_page']) + 1 ?>"><i class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ==================== MODAL ====================  -->
                    <!-- Modal Tambah Product -->
                    <div class="modal fade" id="modaltambahproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/informasi-kesbangpol/gallery/store" method="post" enctype="multipart/form-data" class="formDetail">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-1">
                                                        <label for="">Nama Gallery</label>
                                                        <input type="text" class="form-control namaGallery" name="namaGallery" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-1">
                                                        <label for="">Cover Gallery</label>
                                                        <input type="file" class="form-control coverGallery" name="coverGallery" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label for="">Deskripsi Gallery</label>
                                                        <textarea name="deskripsiGallery" id="" class="form-control deskripsiGallery"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <p><b>Detail Gallery</b></p>
                                            <div class="row">
                                                <div class="transaksiProduk">
                                                    <div class="listProduk" id="listproduk_1">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <label for="Foto">Foto</label>
                                                                        <input type="file" class="form-control fotoDetail" name="fotoDetail[]" required>
                                                                        <span>Maksimal ukuran file : <b>1.5 MB</b></span>
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <label for="">Nama</label>
                                                                        <input type="text" class="form-control namaDetail" name="namaDetail[]">
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <label for="">Deskripsi</label>
                                                                        <textarea class="form-control deskripsiDetail" name="deskripsiDetail[]"></textarea>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="col-1">
                                                                <!-- <button type="button" class="btn btn-danger hapusList">Hapus</button> -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="button" class="btn rounded-pill px-3 btn-sm btn-success text-white mb-3 tambahDetail float-left" id="btnIjo"><i class="fas fa-plus-square"> Tambah Detail Gallery</i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn rounded-pill btn-sm text-white" id="btnMerah" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success btn-sm text-white btnSumbit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ubah Product -->
                    <div class="modal fade" id="modalubahproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Gallery</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="formDetail">
                                        <input type="hidden" name="idGallerydetail" class="idGallerydetail">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-1">
                                                        <label for="">Nama Gallery</label>
                                                        <input type="text" class="form-control namaGallery" name="namaGallery" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <img src="" alt="" class="img-fluid img-thumbnail coverfotoPortfolio">
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-1">
                                                                <label for="">Cover Gallery</label>
                                                                <input type="file" class="form-control coverGallery" name="coverGallery" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <label for="">Deskripsi Gallery</label>
                                                        <textarea name="deskripsiGallery" id="" class="form-control deskripsiGallery"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <p><b>Detail Gallery</b></p>
                                            <div class="row">
                                                <div class="transaksiProduk">
                                                    <div class="listProduk" id="listproduk_1">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col-6 mb-1">
                                                                        <label for="Foto">Foto</label>
                                                                        <input type="file" class="form-control fotoDetail" name="fotoDetail[]" required>
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <label for="">Deskripsi</label>
                                                                        <textarea class="form-control deskripsiDetail" name="deskripsiDetail[]"></textarea>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="col-1">
                                                                <!-- <button type="button" class="btn btn-danger hapusList">Hapus</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn rounded-pill px-3 btn-sm btn-success text-white mb-3 tambahDetail float-left" id="btnIjo"><i class="fas fa-plus-square"> Tambah Detail Gallery</i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn rounded-pill btn-sm text-white" id="btnMerah" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success btn-sm text-white btnSumbit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus Product-->
                    <div class="modal fade" id="modalhapusproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Hapus Gallery</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin mengahpus gallery ini?</p>
                                </div>
                                <div class="modal-footer"><button type="button" class="btn rounded-pill px-3 btn-sm text-white" id="btnMerah" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn rounded-pill px-3 btn-sm btn-danger text-white btnActionHapus" id="btnKuning">Hapus</button>
                                    <form action="" method="post" class="d-none formDetail"></form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/informasi/galeri"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../../../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../../../footer.php') ?>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="/assets/js/ajax/gallery.js"></script>
</body>

</html>












