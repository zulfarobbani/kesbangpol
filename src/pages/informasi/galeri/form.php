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

    <title>Struktur Organisasi</title>
</head>

<body style="background-color : #EEEEEE; color:navy;">
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 top-1 start-0 ps-5 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="container mt-4">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                Tambah
                            </button>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Judul Pengumuman</td>
                                        <!-- <td>Author Berita</td> -->
                                        <td>Tanggal</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $key => $value) { ?>
                                        <tr>
                                            <td><?= $key += 1 ?></td>
                                            <td><?= $value['namaPengumuman'] ?></td>
                                            <!-- <td><?= $value['authorBerita'] ?></td> -->
                                            <td><?= $value['dateCreate'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idPengumuman="<?= $value['idPengumuman'] ?>">
                                                    Lihat
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-idPengumuman="<?= $value['idPengumuman'] ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idPengumuman="<?= $value['idPengumuman'] ?>">
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
                                    <h6 class="modal-title" id="exampleModalLabel">Tambah Berita</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="pengumuman/store" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul Pengumuman</label>
                                            <input type="text" name="namaPengumuman" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Cover Pengumuman</label>
                                            <input type="file" name="coverPengumuman" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Konten Pengumuman</label>
                                            <textarea id="editor1" name="deskripsiPengumuman"></textarea>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Edit Berita</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="editForm">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul Pengumuman</label>
                                            <input type="text" name="namaPengumuman" class="form-control judulPengumuman">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="" alt="" class="img-fluid img-thumbnail coverPengumuman">
                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlInput1" class="form-label">Cover Pengumuman</label>
                                                    <input type="file" name="coverPengumuman" class="form-control coverPengumumanInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Konten Pengumuman</label>
                                            <textarea name="deskripsiPengumuman" class="kontenPengumuman" id="editor2"></textarea>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Detail Pengumuman</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <b>Judul Pengumuman</b>
                                            <p>
                                            <h6 class="judulPengumuman text-dark"></h6>
                                            </p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <b>Cover Pengumuman</b>
                                            <p>
                                                <img src="" alt="" class="img-fluid img-thumbnail coverPengumuman" width="200">
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <b>Konten Pengumuman</b>
                                            <p>
                                            <h6 class="kontenPengumuman text-dark"></h6>
                                            </p>
                                        </div>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Hapus Pengumuman</h6>
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
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/informasi/pengumuman"><i class="fas fa-check"></i> Selesai Ubah</a>
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
                var idPengumuman = button.getAttribute('data-bs-idPengumuman')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/pengumuman/" + idPengumuman + "/get"
                }).done(function(response) {
                    var editForm = editModal.querySelector('.editForm')
                    editForm.setAttribute('action', '/informasi-kesbangpol/pengumuman/' + idPengumuman + '/update')

                    var judulPengumuman = editModal.querySelector('.judulPengumuman')
                    judulPengumuman.value = response.data.namaPengumuman
                    var coverPengumuman = editModal.querySelector('.coverPengumuman')
                    coverPengumuman.setAttribute('src', '/assets/media/' + response.data.pathMedia)
                    var kontenPengumuman = editModal.querySelector('.kontenPengumuman')
                    kontenPengumuman.innerHTML = response.data.deskripsiPengumuman
                    
                    ClassicEditor
                        .create(document.querySelector('#editor2'), {
                            removePlugins: ['Heading']
                        })
                        .catch(error => {
                            console.error(error);
                        });
                })
            })

            var detailModal = document.getElementById('detailModal')
            detailModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idPengumuman = button.getAttribute('data-bs-idPengumuman')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/pengumuman/" + idPengumuman + "/get"
                }).done(function(response) {
                    var judulPengumuman = detailModal.querySelector('.judulPengumuman')
                    judulPengumuman.innerHTML = response.data.namaPengumuman
                    var coverPengumuman = detailModal.querySelector('.coverPengumuman')
                    coverPengumuman.setAttribute('src', '/assets/media/' + response.data.pathMedia)
                    var kontenPengumuman = detailModal.querySelector('.kontenPengumuman')
                    kontenPengumuman.innerHTML = response.data.deskripsiPengumuman
                })
            })

            var hapusModal = document.getElementById('hapusModal')
            hapusModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idPengumuman = button.getAttribute('data-bs-idPengumuman')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var formHapusunduhan = hapusModal.querySelector('.form-hapus')
                formHapusunduhan.setAttribute('action', '/informasi-kesbangpol/pengumuman/' + idPengumuman + '/delete')
            })

            $('.btn-hapus').on('click', function() {
                $('.form-hapus').submit();
            })
            // ======================== END Layanan ======================== 

            ClassicEditor
                .create(document.querySelector('#editor1'), {
                    removePlugins: ['Heading']
                })
                .catch(error => {
                    console.error(error);
                });

        })
    </script>
</body>

</html>