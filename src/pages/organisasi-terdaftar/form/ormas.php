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

    <title>ORMAS Berbadan Hukum Terdaftar</title>
</head>

<body style="background-color : #EEEEEE; color:navy;">
    <?php include(__DIR__ . '/../../mobilemenu.php') ?>
    <?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid content-main">
        <div class="row">
            <div class="col-md-8 mb-3">
                <!-- START CODE -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="container mt-4">
                            <div class="hstack gap-1 mb-3">
                                <h5>ORMAS Berbadan Hukum Terdaftar</h5>
                                <?php if ($idRole == '9asdkqhjwew') { ?>
                                    <button type="button" class="btn btn-sm btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#createModal">
                                        Tambah
                                    </button>
                                <?php } ?>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No. AHU</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $key => $value) { ?>
                                            <tr class="align-middle ">
                                                <td><?= $value['noAHU'] ?></td>
                                                <td><?= $value['namaOrsospol'] ?></td>
                                                <td><?= $value['alamatOrsospol'] ?></td>
                                                <td class="hstack gap-1">
                                                    <button type="button" class="btn w-100 btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-idOrsospol="<?= $value['idOrsospol'] ?>">
                                                        Lihat
                                                    </button>
                                                    <button type="button" class="btn w-100 btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-idOrsospol="<?= $value['idOrsospol'] ?>">
                                                        Edit
                                                    </button>
                                                    <?php if ($idRole == '9asdkqhjwew') { ?>
                                                        <button type="button" class="btn w-100 btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-idOrsospol="<?= $value['idOrsospol'] ?>">
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
                                    <h6 class="modal-title" id="exampleModalLabel">Tambah Ormas</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/organisasi-terdaftar-kesbangpol/orsospol/store" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">No. AHU</label>
                                                <input type="text" name="noAHU" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Orsospol</label>
                                                <input type="text" name="namaOrsosopol" class="form-control">
                                            </div>
                                            <input type="hidden" name="idJenisorsospol" value="<?= $jenis['idJenisorsospol'] ?>">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Notaris Orsospol</label>
                                                <input type="text" name="notarisOrsospol" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Kemenkumham Orsospol</label>
                                                <input type="text" name="kemenkumhamOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Lampiran Kemenkumham Orsospol</label>
                                                <input type="file" name="kemenkumhamOrsospolFile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">NPWP Orsospol</label>
                                                <input type="text" name="npwpOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Lampiran NPWP Orsospol</label>
                                                <input type="file" name="npwpOrsospolFile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">No Rekening Orsospol</label>
                                                <input type="text" name="rekeningOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Bank Orsospol</label>
                                                <input type="text" name="bankOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Alamat Orsospol</label>
                                                <textarea name="alamatOrsospol" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Provinsi</label>
                                                <select name="provinsiId" id="provinsi" class="form-control">
                                                    <option value="">Pilih Provinsi</option>
                                                    <?php foreach ($provinsi as $key => $value) { ?>
                                                        <option value="<?= $value['idProvinsi'] ?>"><?= $value['nameprov'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kabupaten</label>
                                                <select name="kabupatenId" id="kabupaten" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kabupaten -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kecamatan</label>
                                                <select name="kecamatanId" id="kecamatan" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kecamatan -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kelurahan</label>
                                                <select name="kelurahanId" id="kelurahan" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kelurahan -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Email Orsospol</label>
                                                <input type="email" name="emailOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Telepon Orsospol</label>
                                                <input type="telepon" name="teleponOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Website Orsospol</label>
                                                <input type="website" name="websiteOrsospol" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Instagram Orsospol</label>
                                                <input type="text" name="instagramSosialmedia" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Facebook Orsospol</label>
                                                <input type="text" name="facebookSosialmedia" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Youtube Orsospol</label>
                                                <input type="text" name="youtubeSosialmedia" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Twitter Orsospol</label>
                                                <input type="text" name="twitterSosialmedia" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Whatsapp Orsospol</label>
                                                <input type="text" name="whatsappSosialmedia" class="form-control">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Telegram Orsospol</label>
                                                <input type="text" name="telegramSosialmedia" class="form-control">
                                            </div>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Edit Ormas</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="formEdit">
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">No. AHU</label>
                                                <input type="text" name="noAHU" class="form-control noAHU">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Orsospol</label>
                                                <input type="text" name="namaOrsosopol" class="form-control namaOrsosopol">
                                            </div>
                                            <input type="hidden" name="idJenisorsospol" value="<?= $jenis['idJenisorsospol'] ?>">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Notaris Orsospol</label>
                                                <input type="text" name="notarisOrsospol" class="form-control notarisOrsospol">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Kemenkumham Orsospol</label>
                                                <input type="text" name="kemenkumhamOrsospol" class="form-control kemenkumhamOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Lampiran Kemenkumham Orsospol</label>
                                                <input type="file" name="kemenkumhamOrsospolFile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">NPWP Orsospol</label>
                                                <input type="text" name="npwpOrsospol" class="form-control npwpOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Lampiran NPWP Orsospol</label>
                                                <input type="file" name="npwpOrsospolFile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">No Rekening Orsospol</label>
                                                <input type="text" name="rekeningOrsospol" class="form-control rekeningOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Bank Orsospol</label>
                                                <input type="text" name="bankOrsospol" class="form-control bankOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Alamat Orsospol</label>
                                                <textarea name="alamatOrsospol" class="form-control alamatOrsospol"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Provinsi</label>
                                                <select name="provinsiId" id="provinsi" class="form-control">
                                                    <option value="">Pilih Provinsi</option>
                                                    <?php foreach ($provinsi as $key => $value) { ?>
                                                        <option value="<?= $value['idProvinsi'] ?>"><?= $value['nameprov'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kabupaten</label>
                                                <select name="kabupatenId" id="kabupaten" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kabupaten -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kecamatan</label>
                                                <select name="kecamatanId" id="kecamatan" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kecamatan -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="first-name-vertical">Kelurahan</label>
                                                <select name="kelurahanId" id="kelurahan" class="form-control" disabled>
                                                    <option value=""> -- Pilih Kelurahan -- </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Email Orsospol</label>
                                                <input type="email" name="emailOrsospol" class="form-control emailOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Telepon Orsospol</label>
                                                <input type="telepon" name="teleponOrsospol" class="form-control teleponOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Website Orsospol</label>
                                                <input type="website" name="websiteOrsospol" class="form-control websiteOrsospol">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Instagram Orsospol</label>
                                                <input type="text" name="instagramSosialmedia" class="form-control instagramSosialmedia">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Facebook Orsospol</label>
                                                <input type="text" name="facebookSosialmedia" class="form-control facebookSosialmedia">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Youtube Orsospol</label>
                                                <input type="text" name="youtubeSosialmedia" class="form-control youtubeSosialmedia">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Twitter Orsospol</label>
                                                <input type="text" name="twitterSosialmedia" class="form-control twitterSosialmedia">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Whatsapp Orsospol</label>
                                                <input type="text" name="whatsappSosialmedia" class="form-control whatsappSosialmedia">
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Telegram Orsospol</label>
                                                <input type="text" name="telegramSosialmedia" class="form-control telegramSosialmedia">
                                            </div>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Detail Ormas</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">No. AHU</label>
                                            <input type="text" name="noAHU" class="form-control noAHU" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Orsospol</label>
                                            <input type="text" name="namaOrsosopol" class="form-control namaOrsosopol" disabled>
                                        </div>
                                        <input type="hidden" name="idJenisorsospol" value="<?= $jenis['idJenisorsospol'] ?>" disabled>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Notaris Orsospol</label>
                                            <input type="text" name="notarisOrsospol" class="form-control notarisOrsospol" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Kemenkumham Orsospol</label>
                                            <input type="text" name="kemenkumhamOrsospol" class="form-control kemenkumhamOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Lampiran Kemenkumham Orsospol</label><br>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                Lihat Dokumen
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Dokumen</h5>
                                                            <button type="button" class="btn-close btncloseDokumen" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="" alt="" class="kemenkumhamOrsospolDokumen img-fluid">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btncloseDokumen">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">NPWP Orsospol</label>
                                            <input type="text" name="npwpOrsospol" class="form-control npwpOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Lampiran NPWP Orsospol</label><br>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                Lihat Dokumen
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Dokumen</h5>
                                                            <button type="button" class="btn-close btncloseDokumen" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="" alt="" class="npwpOrsospolDokumen img-fluid">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btncloseDokumen">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">No Rekening Orsospol</label>
                                            <input type="text" name="rekeningOrsospol" class="form-control rekeningOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Bank Orsospol</label>
                                            <input type="text" name="bankOrsospol" class="form-control bankOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Alamat Orsospol</label>
                                            <textarea name="alamatOrsospol" class="form-control alamatOrsospol" disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="first-name-vertical">Provinsi</label>
                                            <select name="provinsiId" id="provinsi" class="form-control" disabled>
                                                <option value="">Pilih Provinsi</option>
                                                <?php foreach ($provinsi as $key => $value) { ?>
                                                    <option value="<?= $value['idProvinsi'] ?>"><?= $value['nameprov'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="first-name-vertical">Kabupaten</label>
                                            <select name="kabupatenId" id="kabupaten" class="form-control" disabled>
                                                <option value=""> -- Pilih Kabupaten -- </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="first-name-vertical">Kecamatan</label>
                                            <select name="kecamatanId" id="kecamatan" class="form-control" disabled>
                                                <option value=""> -- Pilih Kecamatan -- </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="first-name-vertical">Kelurahan</label>
                                            <select name="kelurahanId" id="kelurahan" class="form-control" disabled>
                                                <option value=""> -- Pilih Kelurahan -- </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Email Orsospol</label>
                                            <input type="email" name="emailOrsospol" class="form-control emailOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Telepon Orsospol</label>
                                            <input type="telepon" name="teleponOrsospol" class="form-control teleponOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Website Orsospol</label>
                                            <input type="website" name="websiteOrsospol" class="form-control websiteOrsospol" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Instagram Orsospol</label>
                                            <input type="text" name="instagramSosialmedia" class="form-control instagramSosialmedia" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Facebook Orsospol</label>
                                            <input type="text" name="facebookSosialmedia" class="form-control facebookSosialmedia" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Youtube Orsospol</label>
                                            <input type="text" name="youtubeSosialmedia" class="form-control youtubeSosialmedia" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Twitter Orsospol</label>
                                            <input type="text" name="twitterSosialmedia" class="form-control twitterSosialmedia" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Whatsapp Orsospol</label>
                                            <input type="text" name="whatsappSosialmedia" class="form-control whatsappSosialmedia" disabled>
                                        </div>
                                        <div class="mb-3 col-12 col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Telegram Orsospol</label>
                                            <input type="text" name="telegramSosialmedia" class="form-control telegramSosialmedia" disabled>
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
                                    <h6 class="modal-title" id="exampleModalLabel">Hapus ORMAS</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menghapus ORMAS tersebut?</p>
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
                <a class="btn btn-outline-danger navy mt-3 float-end" href="/organisasi-terdaftar/ormas"><i class="fas fa-check"></i> Selesai Ubah</a>
            </div>
            <!-- end form -->
            <?php include(__DIR__ . '/../../sidebar.php') ?>
        </div>
    </div>
    <?php include(__DIR__ . '/../../footer.php') ?>

    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="/assets/js/ajax/ormas.js"></script>
</body>

</html>