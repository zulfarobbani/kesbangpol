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
  <div class="row rounded-2 mx-0 py-2" id="latar" >
    <div class="col p-0">
      <a class="nav-link <?= $requestUri == '/layanan/pendataan' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center  fw-bold" aria-current="page" href="/layanan/pendataan">
        <span class="material-icons-outlined align-self-center">person_add_alt_1</span>
        <span class="d-none d-md-block text-start teksnav">Pendataan<br>Orsospol</span>
      </a>
    </div>
    <div class="col p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-hibah' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center  fw-bold" href="/layanan/permohonan-hibah">
        <span class="material-icons-outlined align-self-center">volunteer_activism</span>
        <span class="d-none d-md-block text-start teksnav">Permohonan<br>Hibah</span>
      </a>
    </div>
    <div class="col p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-penelitian' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center  fw-bold" href="/layanan/permohonan-penelitian">
        <span class="material-icons-outlined align-self-center">plagiarism</span>
        <span class="d-none d-md-block text-start teksnav">Permohonan<br>Penelitian</span>
      </a>
    </div>
    <div class="col p-0">
      <a class="nav-link <?= $requestUri == '/layanan/unduhan' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center  fw-bold" href="/layanan/unduhan">
        <span class="material-icons-outlined align-self-center">file_download</span>
        <span class="d-none d-md-block text-start teksnav">Unduhan Form<br>Lainnya</span>
      </a>
    </div>
  </div>
  <?php if ($idRole == '9asdkqhjwew') { ?>
    <div class="d-flex flex-row-reverse mt-3">
      <a class="btn btn-outline-danger navy" href="/layanan-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } ?>
</div>