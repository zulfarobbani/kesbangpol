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
<div class="container-fluid rounded justify-content-start">
  <div class="row text-center d-flex align-items-center" id="latar">
    <div class="col-3">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/ormas' ? 'nav-link-active' : '' ?> p-0 fw-bold" aria-current="page" href="/organisasi-terdaftar/ormas" id="fsorganisasi">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">local_library</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block text-dark" style="font-size: 13px;">ORMAS</span>
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/okp' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/okp">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">people</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block text-dark" style="font-size: 13px;">OKP</span>
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/komunitas' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/komunitas">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">groups</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block text-dark" style="font-size: 13px;">Komunitas</span>
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/parpol' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/parpol">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">femoji_flags</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block text-dark" style="font-size: 13px;">PARPOL</span>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole != '') { ?>
  <?php if ($requestUri == '/organisasi-terdaftar/ormas') { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/ormas"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } else if ($requestUri == '/organisasi-terdaftar/okp') { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/okp"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } else if ($requestUri == '/organisasi-terdaftar/komunitas') { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/komunitas"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } else { ?>
    <div class="d-flex flex-row-reverse">
      <a class="btn btn-outline-danger navy" href="/organisasi-terdaftar-kesbangpol/parpol"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } ?>
<?php } ?>