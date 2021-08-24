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

    <title>Users</title>
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
                        <div class="container mt-4">
                            <div class="row mb-3">
                                <div class="col-12 col-md">
                                    <h3 class="d-inline">Manajemen User</h3>
                                </div>
                                <div class="col-12 col-md">
                                    <button type="button" class="btn ms-auto btn-success rounded-2 hstack gap-2 mx-0 px-3" id="btnIjo" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">
                                        <span class="material-icons-outlined">person_add</span>
                                        <span class="align-top">Tambah User</span>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama User</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Masuk Sistem</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $key => $data) { ?>
                                            <tr class="paragraf align-middle">
                                                <td style="width: 120px;"><?= $data['namaUser'] ?></td>
                                                <td><?= $data['usernameUser'] ?></td>
                                                <td><?= $data['emailUser'] ?></td>
                                                <td><?= date('d M Y', strtotime($data['dateCreate'])) ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-12 col-md-3" style="padding: 3px;">

                                                            <button type="button" class="btn hstack gap-1 paragraf w-100 btn-primary px-2 py-1  btnEdit" id="btnBiru" data-bs-toggle="modal" data-bs-target="#ModalUbahUser" data-bs-idUser="<?= $data['idUser'] ?>"><i class="fa fa-edit"></i> Ubah</button>
                                                        </div>
                                                        <div class="col-12 col-md-3" style="padding: 3px;">

                                                            <button type="button" class="btn hstack gap-1 paragraf w-100 btn-warning px-2 py-1  btnDetail" id="btnKuning" data-bs-toggle="modal" data-bs-target="#ModalRincianUser" data-bs-idUser="<?= $data['idUser'] ?>"><i class="fa fa-search-plus"></i> Lihat
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-3" style="padding: 3px;">

                                                            <button type="button" class="btn hstack gap-1 paragraf w-100 btn-danger px-2 py-1  btnHapus" id="btnMerah" data-bs-toggle="modal" data-bs-target="#ModalHapusUser" data-bs-idUser="<?= $data['idUser'] ?>"><i class="fa fa-trash-alt"></i> Hapus</button>
                                                        </div>

                                                        <div class="col-12 col-md-3" style="padding: 3px;">
                                                            <button type="button" class="btn hstack gap-1 paragraf w-100 btn-info px-2 py-1 btnResetPassword" id="btnMerah" data-bs-toggle="modal" data-bs-target="#ModalResetPassword" data-bs-idUser="<?= $data['idUser'] ?>"><i class="fa fa-lock-open"></i> Reset</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- ==================== MODAL LAYANAN ====================  -->
                    <!-- Modal Tambah User -->
                    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="TambahUser" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TambahUser"><b>Tambah User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="users/store" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Foto user</label>
                                                <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="fotoUser">
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label for="">Nama User</label>
                                                    <input type="text" class="form-control" placeholder="Nama User" name="namaUser">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="">Username User</label>
                                                    <input type="text" class="form-control" placeholder="Username User" name="usernameUser">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="">Email User</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="emailUser">
                                                </div>
                                                <!-- <div class="mb-1">
                                                    <label for="">Nomor Handphone</label>
                                                    <input type="text" class="form-control" placeholder="Nomor Handphone" name="nohpUser">
                                                </div> -->
                                                <div class="mb-1">
                                                    <label for="">Jenis User</label>
                                                    <select class="form-select" aria-label="Default select example" name="idRole">
                                                        <option value="">-- Pilih Jenis User --</option>
                                                        <?php foreach ($role as $key => $data) { ?>
                                                            <option value="<?= $data['idRole'] ?>"><?= $data['namaRole'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger rounded-pill px-3 btn-sm text-white" id="btnMerah" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success rounded-pill px-3 btn-sm text-white" id="btnIjo">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ubah User -->
                    <div class="modal fade" id="ModalUbahUser" tabindex="-1" aria-labelledby="modalubah" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalubah"><b>Ubah User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" class="formEdit">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="" alt="" class="img-fluid img-thumbnail fotoUser">
                                                <label for="">Foto user</label>
                                                <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="fotoUser">
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label for="">Nama User</label>
                                                    <input type="text" class="form-control namaUser" placeholder="Nama User" name="namaUser">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="">Username User</label>
                                                    <input type="text" class="form-control usernameUser" placeholder="Username User" name="usernameUser">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="">Email User</label>
                                                    <input type="email" class="form-control emailUser" placeholder="Email" name="emailUser">
                                                </div>
                                                <div class="mb-1">
                                                    <label for="">Jenis User</label>
                                                    <select class="form-select idRole" aria-label="Default select example" name="idRole">
                                                        <option value="">-- Pilih Jenis User --</option>
                                                        <?php foreach ($role as $key => $data) { ?>
                                                            <option value="<?= $data['idRole'] ?>"><?= $data['namaRole'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger rounded-pill px-3 btn-sm text-white" id="btnMerah" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success rounded-pill px-3 btn-sm text-white" id="btnIjo">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus User-->
                    <div class="modal fade" id="ModalHapusUser" tabindex="-1" aria-labelledby="ModalHapus" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalHapus"><b>Hapus User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Foto user</label>
                                            <img src="" alt="" class="img-fluid img-thumbnail fotoUser">
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-1">
                                                <label for="">Nama User</label>
                                                <input type="text" class="form-control namaUser" placeholder="Nama User" name="namaUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Username User</label>
                                                <input type="text" class="form-control usernameUser" placeholder="Username User" name="usernameUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Email User</label>
                                                <input type="email" class="form-control emailUser" placeholder="Email" name="emailUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Jenis User</label>
                                                <select class="form-select idRole" aria-label="Default select example" name="idRole" disabled>
                                                    <option value="">-- Pilih Jenis User --</option>
                                                    <?php foreach ($role as $key => $data) { ?>
                                                        <option value="<?= $data['idRole'] ?>"><?= $data['namaRole'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger rounded-pill px-3 btn-sm text-white" id="btnMerah">Batal</button>
                                    <button type="button" class="btn btn-warning rounded-pill px-3 btn-sm text-white btnActionHapus" id="btnKuning">Hapus</button>
                                    <form action="" method="post" class="formHapus"></form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Rincian User-->
                    <div class="modal fade" id="ModalRincianUser" tabindex="-1" aria-labelledby="RincianUser" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="RincianUser"><b>Rincian User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Foto user</label>
                                            <img src="" alt="" class="img-fluid img-thumbnail fotoUser">
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-1">
                                                <label for="">Nama User</label>
                                                <input type="text" class="form-control namaUser" placeholder="Nama User" name="namaUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Username User</label>
                                                <input type="text" class="form-control usernameUser" placeholder="Username User" name="usernameUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Email User</label>
                                                <input type="email" class="form-control emailUser" placeholder="Email" name="emailUser" disabled>
                                            </div>
                                            <div class="mb-1">
                                                <label for="">Jenis User</label>
                                                <select class="form-select idRole" aria-label="Default select example" name="idRole" disabled>
                                                    <option value="">-- Pilih Jenis User --</option>
                                                    <?php foreach ($role as $key => $data) { ?>
                                                        <option value="<?= $data['idRole'] ?>"><?= $data['namaRole'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn rounded-pill px-3 btn-sm text-white float-end" id="btnMerah" data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Reset Password User-->
                    <div class="modal fade" id="ModalResetPassword" tabindex="-1" aria-labelledby="ModalHapus" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalHapus"><b>Reset Password User</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <label for="">Foto user</label>
                                            <img src="" alt="" class="img-fluid img-thumbnail fotoUser">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <p>
                                            <h4>Reset Password User atas nama <b class="namaUser"></b> ?</h4>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger rounded-pill px-3 btn-sm text-white" id="btnMerah">Batal</button>
                                    <button type="button" class="btn btn-warning rounded-pill px-3 btn-sm text-white btnActionResetPassword" id="btnKuning">Reset</button>
                                    <form action="" method="post" class="formResetPassword"></form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==================== END MODAL LAYANAN ====================  -->


                </div>
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/informasi/pengumuman"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../footer.php') ?>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="/assets/plugins/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="/assets/js/ajax/users.js"></script>
</body>

</html>