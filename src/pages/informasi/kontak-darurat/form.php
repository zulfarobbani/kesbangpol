<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">

    <title>Kontak Darurat</title>
</head>

<body style="background-color : #EEEEEE; color:navy;">
<?php include(__DIR__ . '/../../mobilemenu.php') ?>
<?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="container mt-4">
                            <h4>Kontak Darurat</h4>
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                Tambah
                            </button>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Kontak Darurat</td>
                                        <td>Isi Kontak Darurat</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $key => $value) { ?>
                                        <tr>
                                            <td><?= $key += 1 ?></td>
                                            <td><?= $value['namaKontakdarurat'] ?></td>
                                            <td><?= $value['isiKontakdarurat'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success my-1" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idKontakdarurat="<?= $value['idKontakdarurat'] ?>">
                                                    Lihat
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary my-1" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-idKontakdarurat="<?= $value['idKontakdarurat'] ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idKontakdarurat="<?= $value['idKontakdarurat'] ?>">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- ==================== MODAL LAYANAN ====================  -->
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Tambah Kontak Darurat</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/informasi/kontak-darurat/store" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Kontak Darurat</label>
                                            <input type="text" name="namaKontakdarurat" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Isi Kontak Darurat</label>
                                            <input type="text" name="isiKontakdarurat" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Edit Kontak Darurat</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="editForm">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Kontak Darurat</label>
                                            <input type="text" name="namaKontakdarurat" class="form-control namaKontakdarurat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Isi Kontak Darurat</label>
                                            <input type="text" name="isiKontakdarurat" class="form-control isiKontakdarurat">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Detail -->
                    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Detail Kontak Darurat</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Kontak Darurat</label>
                                        <input type="text" name="namaKontakdarurat" class="form-control namaKontakdarurat" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Isi Kontak Darurat</label>
                                        <input type="text" name="isiKontakdarurat" class="form-control isiKontakdarurat" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Hapus Kontak Darurat</h6>
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


                </div>
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/informasi/berita"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../../footer.php') ?>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="/assets/plugins/ckeditor5-build-classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            // ======================== Layanan ======================== 
            var editModal = document.getElementById('editModal')
            editModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idKontakdarurat = button.getAttribute('data-bs-idKontakdarurat')

                $.ajax({
                    type: "post",
                    url: "/informasi/kontak-darurat/" + idKontakdarurat + "/get"
                }).done(function(response) {
                    var editForm = editModal.querySelector('.editForm')
                    editForm.setAttribute('action', '/informasi/kontak-darurat/' + idKontakdarurat + '/update')

                    var namaKontakdarurat = editModal.querySelector('.namaKontakdarurat')
                    namaKontakdarurat.value = response.data.namaKontakdarurat
                    var isiKontakdarurat = editModal.querySelector('.isiKontakdarurat')
                    isiKontakdarurat.value = response.data.isiKontakdarurat
                })
            })

            var detailModal = document.getElementById('detailModal')
            detailModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idKontakdarurat = button.getAttribute('data-bs-idKontakdarurat')

                $.ajax({
                    type: "post",
                    url: "/informasi/kontak-darurat/" + idKontakdarurat + "/get"
                }).done(function(response) {
                    var namaKontakdarurat = detailModal.querySelector('.namaKontakdarurat')
                    namaKontakdarurat.value = response.data.namaKontakdarurat
                    var isiKontakdarurat = detailModal.querySelector('.isiKontakdarurat')
                    isiKontakdarurat.value = response.data.isiKontakdarurat
                })
            })

            var hapusModal = document.getElementById('hapusModal')
            hapusModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idKontakdarurat = button.getAttribute('data-bs-idKontakdarurat')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var formHapusunduhan = hapusModal.querySelector('.form-hapus')
                formHapusunduhan.setAttribute('action', '/informasi/kontak-darurat/' + idKontakdarurat + '/delete')
            })

            $('.btn-hapus').on('click', function() {
                $('.form-hapus').submit();
            })
            // ======================== END Layanan ======================== 

        })
    </script>
</body>

</html>