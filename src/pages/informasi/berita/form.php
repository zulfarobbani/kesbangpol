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

    <title>Berita</title>
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
                            <h4>Berita</h4>
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                                Tambah
                            </button>
                            <a href="/informasi-kesbangpol/berita/approval" class="btn btn-sm btn-success">Approval berita</a>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Judul Berita</td>
                                        <td>Tanggal Publish</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $key => $value) { ?>
                                        <tr>
                                            <td><?= $key += 1 ?></td>
                                            <td><?= $value['namaBerita'] ?></td>
                                            <!-- <td><?= $value['authorBerita'] ?></td> -->
                                            <td><?= $value['dateCreate'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success my-2" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idBerita="<?= $value['idBerita'] ?>">
                                                    Lihat
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary my-2" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-idBerita="<?= $value['idBerita'] ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger my-2" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idBerita="<?= $value['idBerita'] ?>">
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
                                    <form action="berita/store" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                                            <input type="text" name="namaBerita" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Cover Berita</label>
                                            <input type="file" name="coverBerita" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Jenis Berita</label>
                                            <select name="jenisBerita" class="form-control">
                                                <option value="">-- Jenis berita --</option>
                                                <option value="1">Berita Kesbangpol</option>
                                                <option value="2">Berita Orsospol</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Konten Berita</label>
                                            <textarea id="editor1" name="deskripsiBerita"></textarea>
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
                                            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                                            <input type="text" name="namaBerita" class="form-control judulBerita">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="" alt="" class="img-fluid img-thumbnail coverBerita">
                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlInput1" class="form-label">Cover Berita</label>
                                                    <input type="file" name="coverBerita" class="form-control coverBeritaInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Konten Berita</label>
                                            <textarea name="deskripsiBerita" class="kontenBerita" id="editor2"></textarea>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Detail Berita</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <b>Judul Berita</b>
                                            <p>
                                            <h6 class="judulBerita text-dark"></h6>
                                            </p>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <b>Cover Berita</b>
                                            <p>
                                                <img src="" alt="" class="img-fluid img-thumbnail coverBerita" width="200">
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <b>Konten Berita</b>
                                            <p>
                                            <h6 class="kontenBerita text-dark"></h6>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Hapus Berita</h6>
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
                var idBerita = button.getAttribute('data-bs-idBerita')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/berita/" + idBerita + "/get"
                }).done(function(response) {
                    var editForm = editModal.querySelector('.editForm')
                    editForm.setAttribute('action', '/informasi-kesbangpol/berita/' + idBerita + '/update')

                    var judulBerita = editModal.querySelector('.judulBerita')
                    judulBerita.value = response.data.namaBerita
                    var coverBerita = editModal.querySelector('.coverBerita')
                    coverBerita.setAttribute('src', '/assets/media/' + response.data.pathMedia)
                    var kontenBerita = editModal.querySelector('.kontenBerita')
                    kontenBerita.innerHTML = response.data.deskripsiBerita

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
                var idBerita = button.getAttribute('data-bs-idBerita')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/berita/" + idBerita + "/get"
                }).done(function(response) {
                    var judulBerita = detailModal.querySelector('.judulBerita')
                    judulBerita.innerHTML = response.data.namaBerita
                    var coverBerita = detailModal.querySelector('.coverBerita')
                    coverBerita.setAttribute('src', '/assets/media/' + response.data.pathMedia)
                    var kontenBerita = detailModal.querySelector('.kontenBerita')
                    kontenBerita.innerHTML = response.data.deskripsiBerita
                })
            })

            var hapusModal = document.getElementById('hapusModal')
            hapusModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idBerita = button.getAttribute('data-bs-idBerita')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var formHapusunduhan = hapusModal.querySelector('.form-hapus')
                formHapusunduhan.setAttribute('action', '/informasi-kesbangpol/berita/' + idBerita + '/delete')
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