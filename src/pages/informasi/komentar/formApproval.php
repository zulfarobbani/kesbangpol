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
                            <div class="d-flex">
                                <a href="./" class="btn btn-sm btn-primary" style="margin-right: 20px;"><span class="material-icons-outlined fs-5">arrow_back</span></a>
                                <h4>Approval Komentar Berita</h4>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Pembuat Komentar</td>
                                            <td>Komentar</td>
                                            <td>Status</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $key => $value) { ?>
                                            <tr>
                                                <td><?= $key += 1 ?></td>
                                                <td><?= $value['namaUser'] ?></td>
                                                <td><?= $value['commentText'] ?></td>
                                                <td><?= $value['approval'] == '1' ? 'Disetujui' : 'Ditolak' ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-success my-2" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idCommentberita="<?= $value['idCommentberita'] ?>">
                                                        Lihat
                                                    </button>
                                                    <?php if ($value['approval'] == '2') { ?>
                                                    <button type="button" class="btn btn-sm btn-primary my-2" data-bs-toggle="modal" data-bs-target="#approvalModal" data-bs-idCommentberita="<?= $value['idCommentberita'] ?>">
                                                        Approval
                                                    </button>
                                                    <?php } else { ?>
                                                    <button type="button" class="btn btn-sm btn-danger my-2" data-bs-toggle="modal" data-bs-target="#disapproveModal" data-bs-idCommentberita="<?= $value['idCommentberita'] ?>">
                                                        Hapus
                                                    </button>
                                                    <?php } ?>
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
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Approval -->
                    <div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Approval Komentar</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="approvalForm">
                                        <div class="row mb-3">
                                            <div class="col-12 mb-3">
                                                <b>Pembuat Komentar</b>
                                                <h6 class="pembuatKomentar text-dark"></h6>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <b>Komentar</b>
                                                <h6 class="komentar text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Disukai</b>
                                                <h6 class="countlike text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Tidak Disukai</b>
                                                <h6 class="countdislike text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Di Balas</b>
                                                <h6 class="countreply text-dark"></h6>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <b>Jenis Komentar</b>
                                                <h6 class="jeniskomentar text-dark"></h6>
                                            </div>
                                            <div class="col-12">
                                                <b>Berita yang dikomentari</b>
                                                <h6 class="namaberita text-dark"></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" style="margin-right:20px;" class="btn btn-primary" name="approvalKomentar" value="1">Setujui</button>
                                            <button type="submit" class="btn btn-danger" name="approvalKomentar" value="2">Tidak di setujui</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Disapprove -->
                    <div class="modal fade" id="disapproveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Hapus Komentar</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="approvalForm">
                                        <div class="row mb-3">
                                            <div class="col-12 mb-3">
                                                <b>Pembuat Komentar</b>
                                                <h6 class="pembuatKomentar text-dark"></h6>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <b>Komentar</b>
                                                <h6 class="komentar text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Disukai</b>
                                                <h6 class="countlike text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Tidak Disukai</b>
                                                <h6 class="countdislike text-dark"></h6>
                                            </div>
                                            <div class="col-2 mb-3">
                                                <b>Jumlah Di Balas</b>
                                                <h6 class="countreply text-dark"></h6>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <b>Jenis Komentar</b>
                                                <h6 class="jeniskomentar text-dark"></h6>
                                            </div>
                                            <div class="col-12">
                                                <b>Berita yang dikomentari</b>
                                                <h6 class="namaberita text-dark"></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-danger" name="approvalKomentar" value="2">Hapus</button>
                                        </div>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Detail Komentar</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <b>Pembuat Komentar</b>
                                            <h6 class="pembuatKomentar text-dark"></h6>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <b>Komentar</b>
                                            <h6 class="komentar text-dark"></h6>
                                        </div>
                                        <div class="col-2 mb-3">
                                            <b>Jumlah Disukai</b>
                                            <h6 class="countlike text-dark"></h6>
                                        </div>
                                        <div class="col-2 mb-3">
                                            <b>Jumlah Tidak Disukai</b>
                                            <h6 class="countdislike text-dark"></h6>
                                        </div>
                                        <div class="col-2 mb-3">
                                            <b>Jumlah Di Balas</b>
                                            <h6 class="countreply text-dark"></h6>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <b>Jenis Komentar</b>
                                            <h6 class="jeniskomentar text-dark"></h6>
                                        </div>
                                        <div class="col-12">
                                            <b>Berita yang dikomentari</b>
                                            <h6 class="namaberita text-dark"></h6>
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

    <script>
        $(document).ready(function() {
            // ======================== Layanan ======================== 
            var editModal = document.getElementById('approvalModal')
            editModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idCommentberita = button.getAttribute('data-bs-idCommentberita')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/komentar/approval/" + idCommentberita + "/get"
                }).done(function(response) {
                    var editForm = editModal.querySelector('.approvalForm')
                    editForm.setAttribute('action', '/informasi-kesbangpol/komentar/' + idCommentberita + '/approval')

                    var pembuatKomentar = editModal.querySelector('.pembuatKomentar')
                    pembuatKomentar.innerHTML = response.data.namaUser
                    var komentar = editModal.querySelector('.komentar')
                    komentar.innerHTML = response.data.commentText
                    var countlike = editModal.querySelector('.countlike')
                    countlike.innerHTML = response.data.countlikeComment
                    var countdislike = editModal.querySelector('.countdislike')
                    countdislike.innerHTML = response.data.countdislikeComment
                    var countreply = editModal.querySelector('.countreply')
                    countreply.innerHTML = response.data.countcommentComment
                    var jeniskomentar = editModal.querySelector('.jeniskomentar')
                    jeniskomentar.innerHTML = response.data.commentonComment == '' ? 'Komentar' : 'Komentar Balasan'
                    var namaberita = editModal.querySelector('.namaberita')
                    namaberita.innerHTML = response.data.namaBerita
                })
            })

            var disapproveModal = document.getElementById('disapproveModal')
            disapproveModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idCommentberita = button.getAttribute('data-bs-idCommentberita')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/komentar/approval/" + idCommentberita + "/get"
                }).done(function(response) {
                    var editForm = disapproveModal.querySelector('.approvalForm')
                    editForm.setAttribute('action', '/informasi-kesbangpol/komentar/' + idCommentberita + '/approval')

                    var pembuatKomentar = disapproveModal.querySelector('.pembuatKomentar')
                    pembuatKomentar.innerHTML = response.data.namaUser
                    var komentar = disapproveModal.querySelector('.komentar')
                    komentar.innerHTML = response.data.commentText
                    var countlike = disapproveModal.querySelector('.countlike')
                    countlike.innerHTML = response.data.countlikeComment
                    var countdislike = disapproveModal.querySelector('.countdislike')
                    countdislike.innerHTML = response.data.countdislikeComment
                    var countreply = disapproveModal.querySelector('.countreply')
                    countreply.innerHTML = response.data.countcommentComment
                    var jeniskomentar = disapproveModal.querySelector('.jeniskomentar')
                    jeniskomentar.innerHTML = response.data.commentonComment == '' ? 'Komentar' : 'Komentar Balasan'
                    var namaberita = disapproveModal.querySelector('.namaberita')
                    namaberita.innerHTML = response.data.namaBerita
                })
            })

            var detailModal = document.getElementById('detailModal')
            detailModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idCommentberita = button.getAttribute('data-bs-idCommentberita')

                $.ajax({
                    type: "post",
                    url: "/informasi-kesbangpol/komentar/approval/" + idCommentberita + "/get"
                }).done(function(response) {
                    var pembuatKomentar = detailModal.querySelector('.pembuatKomentar')
                    pembuatKomentar.innerHTML = response.data.namaUser
                    var komentar = detailModal.querySelector('.komentar')
                    komentar.innerHTML = response.data.commentText
                    var countlike = detailModal.querySelector('.countlike')
                    countlike.innerHTML = response.data.countlikeComment
                    var countdislike = detailModal.querySelector('.countdislike')
                    countdislike.innerHTML = response.data.countdislikeComment
                    var countreply = detailModal.querySelector('.countreply')
                    countreply.innerHTML = response.data.countcommentComment
                    var jeniskomentar = detailModal.querySelector('.jeniskomentar')
                    jeniskomentar.innerHTML = response.data.commentonComment == '' ? 'Komentar' : 'Komentar Balasan'
                    var namaberita = detailModal.querySelector('.namaberita')
                    namaberita.innerHTML = response.data.namaBerita
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
            // ======================== END Layanan ======================== s

        })
    </script>
</body>

</html>