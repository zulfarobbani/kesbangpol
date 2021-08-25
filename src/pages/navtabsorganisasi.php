<style type="text/css">
  .nav-link {
    color: navy;
  }

  .nav-link:hover {
    color: #feae88;
  }
  

  #latar {
    background-color: #e0e0e0;
  }

  #fsorganisasi {
    font-size: 18px;
  }
</style>
<div class="container-fluid px-0 py-3 rounded justify-content-start">
  <div class="row py-3 mx-0 rounded-2" id="latar">
    <div class="col px-2">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/ormas' ? 'nav-link-active' : '' ?>  p-0 text-center hstack gap-1 justify-content-center fw-bold" aria-current="page" href="/organisasi-terdaftar/ormas" id="fsorganisasi">
        <span class="material-icons-outlined" >local_library</span>
        <span class="  fw-bold d-none d-md-block teksnav">ORMAS</span>
      </a>
    </div>
    <div class="col " id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/okp' ? 'nav-link-active' : '' ?>  p-0 text-center hstack gap-1 justify-content-center fw-bold" href="/organisasi-terdaftar/okp">
        <span class="material-icons-outlined" >people</span>
        <span class="  fw-bold d-none d-md-block teksnav">OKP</span>
      </a>
    </div>
    <div class="col " id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/komunitas' ? 'nav-link-active' : '' ?>  p-0 text-center hstack gap-1 justify-content-center fw-bold" href="/organisasi-terdaftar/komunitas">
        <span class="material-icons-outlined" >groups</span>
        <span class="  fw-bold d-none d-md-block teksnav">Komunitas</span>
      </a>
    </div>
    <div class="col " id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/parpol' ? 'nav-link-active' : '' ?>  p-0 text-center hstack gap-1 justify-content-center fw-bold" href="/organisasi-terdaftar/parpol">
        <span class="material-icons-outlined" >femoji_flags</span>
        <span class="  fw-bold d-none d-md-block teksnav">PARPOL</span>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole != '') { ?>
  <?php if (($aliasRole = 'kesbangpol' && $requestUri == '/organisasi-terdaftar/ormas') || ($requestUri == '/organisasi-terdaftar/ormas' && $idJenisorsospol == 'jor60d0573fb33fe')) { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/ormas"><i class="fas fa-edit"></i> <?= $idRole == '9asdkqhjwew' ? 'Edit' : 'Profil Organisasi Anda' ?></a>
    </div>
  <?php } ?>
  <?php if (($aliasRole = 'kesbangpol' && $requestUri == '/organisasi-terdaftar/okp') || ($requestUri == '/organisasi-terdaftar/okp' && $idJenisorsospol == 'jor60d0574b03b65')) { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/okp"><i class="fas fa-edit"></i> <?= $idRole == '9asdkqhjwew' ? 'Edit' : 'Profil Organisasi Anda' ?></a>
    </div>
  <?php } ?>
  <?php if (($aliasRole = 'kesbangpol' && $requestUri == '/organisasi-terdaftar/komunitas') || ($requestUri == '/organisasi-terdaftar/komunitas' && $idJenisorsospol == 'jor60d0575b7b225')) { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/komunitas"><i class="fas fa-edit"></i> <?= $idRole == '9asdkqhjwew' ? 'Edit' : 'Profil Organisasi Anda' ?></a>
    </div>
  <?php } ?>
  <?php if (($aliasRole = 'kesbangpol' && $requestUri == '/organisasi-terdaftar/parpol') || ($requestUri == '/organisasi-terdaftar/parpol' && $idJenisorsospol == 'jor60d05997283b8')) { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/parpol"><i class="fas fa-edit"></i> <?= $idRole == '9asdkqhjwew' ? 'Edit' : 'Profil Organisasi Anda' ?></a>
    </div>
  <?php } ?>
<?php } ?>