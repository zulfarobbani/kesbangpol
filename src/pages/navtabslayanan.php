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
</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row text-center d-flex align-items-center" id="latar">
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/pendataan' ? 'nav-link-active' : '' ?> py-2 d-flex fw-bold" aria-current="page" href="/layanan/pendataan">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right: 10px;">person_add_alt_1</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Pendataan<br>Orsospol</span>
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-hibah' ? 'nav-link-active' : '' ?> py-2 d-flex fw-bold" href="/layanan/permohonan-hibah">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right: 10px;">volunteer_activism</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Permohonan<br>Hibah</span>
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-penelitian' ? 'nav-link-active' : '' ?> py-2 d-flex fw-bold" href="/layanan/permohonan-penelitian">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right: 10px;">plagiarism</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Permohonan<br>Penelitian</span>
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/unduhan' ? 'nav-link-active' : '' ?> py-2 d-flex fw-bold" href="/layanan/unduhan">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right: 10px;">file_download</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Unduhan Form<br>Lainnya</span>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole == '9asdkqhjwew') { ?>
  <div class="d-flex flex-row-reverse">
    <a class="btn btn-outline-danger navy" href="/layanan-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
  </div>
<?php } ?>