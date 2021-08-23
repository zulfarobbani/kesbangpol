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

    <title>Struktur Organisasi</title>
</head>

<body style="background-color : #EEEEEE; color:navy;">
<?php include(__DIR__ . '/../mobilemenu.php') ?>
<?php include(__DIR__ . '/../mobilenav.php') ?>
    <?php include(__DIR__ . '/../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="layanan-tab" data-bs-toggle="tab" data-bs-target="#layanan" type="button" role="tab" aria-controls="layanan" aria-selected="true">Layanan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="unduhan-tab" data-bs-toggle="tab" data-bs-target="#unduhan" type="button" role="tab" aria-controls="unduhan" aria-selected="false">Unduhan</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="layanan" role="tabpanel" aria-labelledby="layanan-tab">
                                <div class="container mt-4">
                                    <!-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                        Tambah
                                    </button> -->
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Layanan</td>
                                                <td>Judul Layanan</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($layanan as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key += 1 ?></td>
                                                    <td><?= $value['namaLayanan'] ?></td>
                                                    <td><?= $value['judulLayanan'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-success m-2" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idLayanan="<?= $value['idLayanan'] ?>">
                                                            Lihat
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-secondary m-2" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-idLayanan="<?= $value['idLayanan'] ?>">
                                                            Edit
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idLayanan="<?= $value['idLayanan'] ?>">
                                                    Hapus
                                                </button> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="unduhan" role="tabpanel" aria-labelledby="unduhan-tab">
                                <div class="container mt-4">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModalUnduhan">
                                        Tambah
                                    </button>
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
                                            <?php foreach ($unduhan as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $key += 1 ?></td>
                                                    <td><?= $value['namaLayananunduhan'] ?></td>
                                                    <td><?= $value['pathMedia'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-success m-2" data-bs-toggle="modal" data-bs-target="#detailModalUnduhan" data-bs-file="/assets/media/<?= $value['pathMedia'] ?>">
                                                            Lihat
                                                        </button>
                                                        <a href="/layanan-kesbangpol/unduhan/<?= $value['idLayananunduhan'] ?>/download" class="btn btn-sm btn-light" target="_blank">Download</a>
                                                        <button type="button" class="btn btn-sm btn-secondary m-2" data-bs-toggle="modal" data-bs-target="#editModalUnduhan" data-bs-namaLayananunduhan="<?= $value['namaLayananunduhan'] ?>" data-bs-idLayananunduhan="<?= $value['idLayananunduhan'] ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-danger m-2" data-bs-toggle="modal" data-bs-target="#hapusModalUnduhan" data-bs-idLayananunduhan="<?= $value['idLayananunduhan'] ?>">
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

                        <!-- ==================== MODAL LAYANAN ====================  -->
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Tambah Layanan</h6>
                                        <button type="button" class="btn-close btn-close-white" disabled aria-label="Close" data-bs-dismiss="modal" ></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="layanan-kesbangpol/store" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label>
                                                <input type="text" name="namaLayanan" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Icon Layanan</label>
                                                <input type="file" name="iconLayanan" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Judul Layanan</label>
                                                <input type="text" name="judulLayanan" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Deskripsi Layanan</label>
                                                <textarea name="deskripsiLayanan" id="" class="form-control"></textarea>
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
                                        <h6 class="modal-title" id="exampleModalLabel">Edit Layanan</h6>
                                        <button type="button" class="btn-close tomol" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data" class="formEdit">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label>
                                                <input type="text" name="namaLayanan" class="form-control namaLayanan" readonly>
                                            </div>
                                            <div class="row">
                                                <div class="col-1">
                                                    <img src="" alt="" class="img-fluid img-thumbnail iconLayanan">
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Icon Layanan</label>
                                                        <input type="file" name="iconLayanan" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Judul Layanan</label>
                                                <input type="text" name="judulLayanan" class="form-control judulLayanan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Deskripsi Layanan</label>
                                                <textarea name="deskripsiLayanan" id="" class="form-control deskripsiLayanan"></textarea>
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
                                        <h6 class="modal-title" id="exampleModalLabel">Detail Layanan</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <b>Nama Layanan</b>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img src="" alt="" class="img-fluid img-thumbnail iconLayanan" width="50">
                                                    </div>
                                                    <div class="col">
                                                        <p>
                                                        <h6 class="namaLayanan text-dark"></h6>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <b>Judul Layanan</b>
                                                <p>
                                                <h6 class="judulLayanan text-dark"></h6>
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <b>Deskripsi Layanan</b>
                                                <p>
                                                <h6 class="deskripsiLayanan text-dark"></h6>
                                                </p>
                                            </div>
                                        </div>
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
                                        <h6 class="modal-title" id="exampleModalLabel">Hapus Layanan</h6>
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
                        <!-- ==================== END MODAL LAYANAN ====================  -->

                        <!-- ==================== MODAL Unduhan ====================  -->
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModalUnduhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Tambah Unduhan</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="layanan-kesbangpol/unduhan/store" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Unduhan</label>
                                                <input type="text" name="namaLayananunduhan" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Unduhan</label>
                                                <input type="file" name="fileLayananunduhan" class="form-control">
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
                        <div class="modal fade" id="editModalUnduhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Edit Unduhan</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data" class="formEditUnduhan">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Unduhan</label>
                                                <input type="text" name="namaLayananunduhan" class="form-control namaLayananunduhan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Unduhan</label>
                                                <input type="file" name="fileLayananunduhan" class="form-control">
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
                        <div class="modal fade" id="detailModalUnduhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">File SAKIP</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="" alt="" class="img-fluid fileLayananunduhan">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModalUnduhan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Hapus Unduhan</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus file tersebut?</p>
                                        <form action="" method="post" class="form-hapus-unduhan"></form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-hapus-unduhan">Hapus</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==================== END MODAL Unduhan ====================  -->

                    </div>
                </div>
                <!-- end form -->
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/layanan/pendataan"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <?php include(__DIR__ . '/../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // ======================== Layanan ======================== 
            var editModalUnduhan = document.getElementById('editModalUnduhan')
            editModalUnduhan.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idLayananunduhan = button.getAttribute('data-bs-idLayananunduhan')
                var namaLayananunduhan = button.getAttribute('data-bs-namaLayananunduhan')

                var formLayanan = editModalUnduhan.querySelector('.formEditUnduhan')
                formLayanan.setAttribute('action', '/layanan-kesbangpol/unduhan/' + idLayananunduhan + '/update')

                var namaUnduhanContainer = editModalUnduhan.querySelector('.namaLayananunduhan')
                namaUnduhanContainer.value = namaLayananunduhan
            })

            var detailModalUnduhan = document.getElementById('detailModalUnduhan')
            detailModalUnduhan.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var fileUnduhan = button.getAttribute('data-bs-file')

                var fileLayananUnduhan = detailModalUnduhan.querySelector('.fileLayananunduhan')
                fileLayananUnduhan.setAttribute('src', fileUnduhan)
            })

            var hapusModalUnduhan = document.getElementById('hapusModalUnduhan')
            hapusModalUnduhan.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idLayananunduhan = button.getAttribute('data-bs-idLayananunduhan')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var formHapusunduhan = hapusModalUnduhan.querySelector('.form-hapus-unduhan')
                formHapusunduhan.setAttribute('action', '/layanan-kesbangpol/unduhan/' + idLayananunduhan + '/delete')
            })

            $('.btn-hapus-unduhan').on('click', function() {
                $('.form-hapus-unduhan').submit();
            })
            // ======================== END Layanan ======================== 
        })
    </script>
</body>

</html>