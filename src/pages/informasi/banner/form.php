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

    <title>Banner</title>
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
                            <h4>Banner</h4>
                            <button type="button" class="btn btn-sm btn-primary ms-auto mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                                Tambah
                            </button>

                            <div class="table-responsive">
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Banner</th>
                                            <!-- <th>Banner</th> -->
                                            <!-- <th>Muncul di halaman</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $key => $value) { ?>
                                            <tr class="paragraf align-middle">
                                                <td><?= $key += 1 ?></td>
                                                <td><?= $value['namaBanner'] ?></td>
                                                <!-- <td><?= $value['pathMedia'] ?></td> -->
                                                <!-- <td></td> -->
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button type="button" class="btn btn-sm btn-success w-100 my-1" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-file="/assets/media/<?= $value['pathMedia'] ?>" data-bs-halamanmunculBanner="<?= $value['halamanmunculBanner'] ?>">
                                                                Lihat
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <a href="/banner/<?= $value['idBanner'] ?>/download" class="btn btn-sm btn-light w-100 my-1" target="_blank">Download</a>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-sm btn-secondary w-100 my-1" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-namaBanner="<?= $value['namaBanner'] ?>" data-bs-idBanner="<?= $value['idBanner'] ?>" data-bs-halamanmunculBanner="<?= $value['halamanmunculBanner'] ?>">
                                                                Edit
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-sm btn-danger w-100 my-1" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idBanner="<?= $value['idBanner'] ?>">
                                                                Hapus
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- ==================== MODAL ====================  -->
                        <!-- Modal Tambah -->
                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Tambah Banner</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="banner/store" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Banner</label>
                                                <input type="text" name="namaBanner" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Banner</label>
                                                <input type="file" name="fileBanner" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Muncul di halaman</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="checkbox" name="halamanmunculBanner[]" value="dashboard"> Dashboard
                                                    </div>
                                                    <div class="col-3">
                                                    <input type="checkbox" name="halamanmunculBanner[]" value="sidebar-link-eksternal"> Sidebar Link Eksternal
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
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
                                        <h6 class="modal-title" id="exampleModalLabel">Edit Banner</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data" class="formEdit">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Banner</label>
                                                <input type="text" name="namaBanner" class="form-control namaBanner">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">File Banner</label>
                                                <input type="file" name="fileBanner" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Muncul di halaman</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="checkbox" class="banner-check-input dashboard" name="halamanmunculBanner[]" value="dashboard"> Dashboard
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="banner-check-input sidebar-link-eksternal" name="halamanmunculBanner[]" value="sidebar-link-eksternal"> Sidebar Link Eksternal
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
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
                                        <h6 class="modal-title" id="exampleModalLabel">File Banner</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="">Banner Muncul di halaman</label>
                                        <div class="halamanmunculBanner d-block mb-3"></div>
                                        <img src="" alt="" class="img-fluid fileBanner">
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
                                        <h6 class="modal-title" id="exampleModalLabel">Hapus Banner</h6>
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
                        <!-- ==================== END MODAL ====================  -->


                    </div>
                </div>
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/informasi/berita"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../../sidebar.php') ?>
        </div>
        <?php include(__DIR__ . '/../../footer.php') ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        <script>
            // ======================== Banner ======================== 
            var editModal = document.getElementById('editModal')
            editModal.addEventListener('show.bs.modal', function(event) {
                editModal = document.getElementById('editModal')
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idBanner = button.getAttribute('data-bs-idBanner')
                var namaBanner = button.getAttribute('data-bs-namaBanner')
                var halamanmunculBanner = button.getAttribute('data-bs-halamanmunculBanner')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var inputnamaBanner = editModal.querySelector('.namaBanner')
                inputnamaBanner.value = namaBanner

                var formSakip = editModal.querySelector('.formEdit')
                formSakip.setAttribute('action', '/informasi/banner/' + idBanner + '/update')

                editModal = $('#editModal');
                editModal.find(".banner-check-input").prop("checked", false);
                halamanmunculBanner.split(',').forEach(element => {
                    editModal.find("." + element).prop("checked", true);
                });
            })

            var detailModal = document.getElementById('detailModal')
            detailModal.addEventListener('show.bs.modal', function(event) {
                detailModal = document.getElementById('detailModal')
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var fileBanner = button.getAttribute('data-bs-file')
                var halamanmunculBanner = button.getAttribute('data-bs-halamanmunculBanner')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var fileBannerContainer = detailModal.querySelector('.fileBanner')
                fileBannerContainer.setAttribute('src', fileBanner)

                detailModal = $('#detailModal');
                var halamanBanner = '';
                halamanmunculBanner.split(',').forEach(element => {
                    halamanBanner += '<span class="badge bg-secondary m-2 fs-6">' + element + '</span>';
                });
                console.log(halamanBanner)
                detailModal.find('.halamanmunculBanner').html(halamanBanner);
            })

            var hapusModal = document.getElementById('hapusModal')
            hapusModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var idBanner = button.getAttribute('data-bs-idBanner')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var formHapus = hapusModal.querySelector('.form-hapus')
                formHapus.setAttribute('action', '/informasi/banner/' + idBanner + '/delete')
            })

            $('.btn-hapus').on('click', function() {
                $('.form-hapus').submit();
            })
            // ======================== END ======================== 

            $('.btn-hapus-regulasi').on('click', function() {
                $('.form-hapus-regulasi').submit();
            })
            // ======================== END SAKIP ======================== 
        </script>
</body>

</html>