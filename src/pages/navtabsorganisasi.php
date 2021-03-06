<style type="text/css">
  .nav-link{
    color: navy;
  }
  .nav-link:hover{
    color: #feae88;
  }
  #latar{
    background-color: #e0e0e0;
  }
  #fsorganisasi{
    font-size: 18px;
  }

</style>
<div class="container px-0 my-3 rounded justify-content-start">
  <div class="row text-center d-flex align-items-center mx-1" id="latar">
    <div class="col-3 p-2">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/ormas' ? 'nav-link-active' : '' ?> p-0 fw-bold" aria-current="page" href="/organisasi-terdaftar/ormas" id="fsorganisasi">
        <span class="material-icons-outlined align-middle">local_library</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block">ORMAS</span>
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/okp' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/okp">
        <i class="fas fa-user-friends"></i>
        <span class="m-0 p-0 fw-bold d-none d-md-block">OKP</span>
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/komunitas' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/komunitas">
        <span class="material-icons-outlined align-middle">groups</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block">Komunitas</span>  
      </a>
    </div>
    <div class="col-3 p-0" id="fsorganisasi">
      <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/parpol' ? 'nav-link-active' : '' ?> p-0 fw-bold" href="/organisasi-terdaftar/parpol">
        <span class="material-icons-outlined align-middle">femoji_flags</span>
        <span class="m-0 p-0 fw-bold d-none d-md-block">PARPOL</span>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole != '') { ?>
  <?php if ($requestUri == '/organisasi-terdaftar/ormas') { ?>
    <a class="btn btn-outline-danger d-block float-end navy" href="/organisasi-terdaftar-kesbangpol/ormas"><i class="fas fa-edit"></i> Edit</a>
  <?php } else if ($requestUri == '/organisasi-terdaftar/okp') { ?>
    <a class="btn btn-outline-danger d-block float-end navy" href="/organisasi-terdaftar-kesbangpol/okp"><i class="fas fa-edit"></i> Edit</a>
  <?php } else if ($requestUri == '/organisasi-terdaftar/komunitas') { ?>
    <a class="btn btn-outline-danger d-block float-end navy" href="/organisasi-terdaftar-kesbangpol/komunitas"><i class="fas fa-edit"></i> Edit</a>
  <?php } else { ?>
    <a class="btn btn-outline-danger d-block float-end navy" href="/organisasi-terdaftar-kesbangpol/parpol"><i class="fas fa-edit"></i> Edit</a>
  <?php } ?>
<?php } ?>