<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Struktur Organisasi</title>
    <style>
        #toolbar #end {
            display: none;
        }
    </style>
</head>

<body style="background-color : #EEEEEE; color:navy;">
    <?php include(__DIR__ . '/../mobilemenu.php') ?>
    <?php include(__DIR__ . '/../mobilenav.php') ?>
    <?php include(__DIR__ . '/../navbar.php') ?>
    <div class="container-fluid content-main">
        <div class="row">
            <div class="col-md-8 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="strukturorganisasi-tab" data-bs-toggle="tab" data-bs-target="#strukturorganisasi" type="button" role="tab" aria-controls="strukturorganisasi" aria-selected="true">Struktur Organisasi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="visimisi-tab" data-bs-toggle="tab" data-bs-target="#visimisi" type="button" role="tab" aria-controls="visimisi" aria-selected="false">Visi Misi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tupoksi-tab" data-bs-toggle="tab" data-bs-target="#tupoksi" type="button" role="tab" aria-controls="tupoksi" aria-selected="false">TUPOKSI</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sakip-tab" data-bs-toggle="tab" data-bs-target="#sakip" type="button" role="tab" aria-controls="sakip" aria-selected="false">SAKIP</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="regulasi-tab" data-bs-toggle="tab" data-bs-target="#regulasi" type="button" role="tab" aria-controls="regulasi" aria-selected="false">Regulasi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="strukturorganisasi" role="tabpanel" aria-labelledby="strukturorganisasi-tab">
                                <div class="container mt-4">
                                    <form action="profile-kesbangpol/struktur-organisasi/store" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Gambar Struktur Organisasi</label>
                                            <div class="row">
                                                <div class="col-12 col-md-10">
                                                    <input type="file" class="form-control mb-2" id="exampleFormControlInput1" name="sotk">
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <?php if ($struktur_organisasi) { ?>
                                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-image="/assets/media/<?= $struktur_organisasi['pathMedia'] ?>" style="font-size:0.7rem;">
                                                            Lihat Struktur Organisasi
                                                        </button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="visimisi" role="tabpanel" aria-labelledby="visimisi-tab">
                                <div class="container mt-4">
                                    <form action="profile-kesbangpol/visi-misi/store" method="post">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Visi</label>
                                            <textarea name="visi" id="" class="form-control"><?= $profileKesbangpol['visi'] ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Misi</label>
                                            <textarea name="misi" id="" class="form-control"><?= $profileKesbangpol['misi'] ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tupoksi" role="tabpanel" aria-labelledby="tupoksi-tab">
                                <div class="container mt-4">
                                    <form action="profile-kesbangpol/tupoksi/store" method="post">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tugas Pokok</label>
                                            <textarea name="tugaspokok" id="" class="form-control"><?= $profileKesbangpol['tugaspokok'] ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Fungsi</label>
                                            <textarea name="fungsi" id="" class="form-control"><?= $profileKesbangpol['fungsi'] ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sakip" role="tabpanel" aria-labelledby="sakip-tab">
                                <div class="container mt-4">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                        Tambah
                                    </button>
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Berkas</td>
                                                    <td>Berkas</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($sakip as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $key += 1 ?></td>
                                                        <td><?= $value['namaSakip'] ?></td>
                                                        <td><?= $value['pathMedia'] ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success m-1" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-file="/assets/media/<?= $value['pathMedia'] ?>">
                                                                Lihat
                                                            </button>
                                                            <a href="/sakip/<?= $value['idSakip'] ?>/download" class="btn btn-sm btn-light m-1" target="_blank">Download</a>
                                                            <button type="button" class="btn btn-sm btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-namaSakip="<?= $value['namaSakip'] ?>" data-bs-idSakip="<?= $value['idSakip'] ?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-danger m-1" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idSakip="<?= $value['idSakip'] ?>">
                                                                Hapus
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="regulasi" role="tabpanel" aria-labelledby="regulasi-tab">
                                <div class="container mt-4">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModalRegulasi">
                                        Tambah
                                    </button>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Regulasi</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($regulasi as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key += 1 ?></td>
                                                    <td><?= $value['namaRegulasi'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-success m-1" data-bs-toggle="modal" data-bs-target="#detailModalRegulasi" data-bs-fileRegulasi="/assets/media/<?= $value['pathMedia'] ?>">
                                                            Lihat
                                                        </button>
                                                        <a href="/regulasi/<?= $value['idRegulasi'] ?>/download" class="btn btn-sm btn-light m-1" target="_blank">Download</a>
                                                        <button type="button" class="btn btn-sm btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#editModalRegulasi" data-bs-namaRegulasi="<?= $value['namaRegulasi'] ?>" data-bs-idRegulasi="<?= $value['idRegulasi'] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-danger m-1" data-bs-toggle="modal" data-bs-target="#hapusModalRegulasi" data-bs-idRegulasi="<?= $value['idRegulasi'] ?>">
                                                            Hapus
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <!-- Modal Detail Struktur Organisasi -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">File Regulasi</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="" alt="" class="img-fluid imageSotk">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ==================== MODAL SAKIP ====================  -->
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Tambah SAKIP</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="sakip/store" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Sakip</label>
                                                <input type="text" name="namaSakip" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Sakip</label>
                                                <input type="file" name="fileSakip" class="form-control">
                                                <span>Ekstensi file yang diperbolehkan : <b>.jpeg</b> / <b>.jpg</b> / <b>.png</b> / <b>.pdf</b></span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Edit SAKIP</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="sakip/store" method="post" enctype="multipart/form-data" class="formEdit">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Sakip</label>
                                                <input type="text" name="namaSakip" class="form-control namaSakip">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Sakip</label>
                                                <input type="file" name="fileSakip" class="form-control">
                                                <span>Ekstensi file yang diperbolehkan : <b>.jpeg</b> / <b>.jpg</b> / <b>.png</b> / <b>.pdf</b></span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detail -->
                        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">File SAKIP</h6>
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

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Hapus SAKIP</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus file tersebut?</p>
                                        <form action="" method="post" class="form-hapus"></form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-hapus">Hapus</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==================== END MODAL SAKIP ====================  -->

                        <!-- ==================== MODAL REGULASI ====================  -->
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModalRegulasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Tambah Regulasi</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="regulasi/store" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Regulasi</label>
                                                <input type="text" name="namaRegulasi" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Regulasi</label>
                                                <input type="file" name="fileRegulasi" class="form-control">
                                                <span>Ekstensi file yang diperbolehkan : <b>.jpeg</b> / <b>.jpg</b> / <b>.png</b> / <b>.pdf</b></span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModalRegulasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Edit Regulasi</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data" class="formEditRegulasi">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Regulasi</label>
                                                <input type="text" name="namaRegulasi" class="form-control namaRegulasi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Sakip</label>
                                                <input type="file" name="fileRegulasi" class="form-control">
                                                <span>Ekstensi file yang diperbolehkan : <b>.jpeg</b> / <b>.jpg</b> / <b>.png</b> / <b>.pdf</b></span>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detail -->
                        <div class="modal fade" id="detailModalRegulasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">File Regulasi</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="" alt="" class="img-fluid fileRegulasi">
                                        <iframe src="" frameborder="0" class="fileRegulasiPDF w-100" height="500px" toolbar="false"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModalRegulasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Hapus Regulasi</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus file tersebut?</p>
                                        <form action="" method="post" class="form-hapus-regulasi"></form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-hapus-regulasi">Hapus</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==================== END MODAL REGULASI ====================  -->
                </div>
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/struktur-organisasi"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script>
        var detailModalSotk = document.getElementById('exampleModal')
        detailModalSotk.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var image = button.getAttribute('data-bs-image')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var imageSotk = detailModalSotk.querySelector('.imageSotk')
            imageSotk.setAttribute('src', image)
        })

        // ======================== SAKIP ======================== 
        var editModal = document.getElementById('editModal')
        editModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var idSakip = button.getAttribute('data-bs-idSakip')
            var namaSakip = button.getAttribute('data-bs-namaSakip')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var inputnamaSakip = editModal.querySelector('.namaSakip')
            inputnamaSakip.value = namaSakip

            var formSakip = editModal.querySelector('.formEdit')
            formSakip.setAttribute('action', '/sakip/' + idSakip + '/update')
        })

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

        var hapusModal = document.getElementById('hapusModal')
        hapusModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var idSakip = button.getAttribute('data-bs-idSakip')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var formHapus = hapusModal.querySelector('.form-hapus')
            formHapus.setAttribute('action', '/sakip/' + idSakip + '/delete')
        })

        $('.btn-hapus').on('click', function() {
            $('.form-hapus').submit();
        })
        // ======================== END SAKIP ======================== 

        // ======================== Regulasi ======================== 
        var editModalRegulasi = document.getElementById('editModalRegulasi')
        editModalRegulasi.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var idRegulasi = button.getAttribute('data-bs-idRegulasi')
            var namaRegulasi = button.getAttribute('data-bs-namaRegulasi')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var inputnamaRegulasi = editModalRegulasi.querySelector('.namaRegulasi')
            inputnamaRegulasi.value = namaRegulasi

            var formRegulasi = editModalRegulasi.querySelector('.formEditRegulasi')
            formRegulasi.setAttribute('action', '/regulasi/' + idRegulasi + '/update')
        })

        var detailModalRegulasi = document.getElementById('detailModalRegulasi')
        detailModalRegulasi.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var fileRegulasi = button.getAttribute('data-bs-fileRegulasi')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var fileRegulasiContainerPDF = detailModalRegulasi.querySelector('.fileRegulasiPDF')
            var fileRegulasiContainer = detailModalRegulasi.querySelector('.fileRegulasi')
            if (fileRegulasi.split('.')[1] == "pdf") {
                fileRegulasiContainerPDF.setAttribute('src', fileRegulasi)
                fileRegulasiContainer.setAttribute('style', 'display: none');
                fileRegulasiContainerPDF.setAttribute('style', 'display: block');
            } else {
                fileRegulasiContainer.setAttribute('src', fileRegulasi)
                fileRegulasiContainerPDF.setAttribute('style', 'display: none');
                fileRegulasiContainer.setAttribute('style', 'display: block');
            }
        })

        var hapusModalRegulasi = document.getElementById('hapusModalRegulasi')
        hapusModalRegulasi.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var idRegulasi = button.getAttribute('data-bs-idRegulasi')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var formHapusRegulasi = hapusModalRegulasi.querySelector('.form-hapus-regulasi')
            formHapusRegulasi.setAttribute('action', '/regulasi/' + idRegulasi + '/delete')
        })

        $('.btn-hapus-regulasi').on('click', function() {
            $('.form-hapus-regulasi').submit();
        })
        // ======================== END SAKIP ======================== 
    </script>
</body>

</html>