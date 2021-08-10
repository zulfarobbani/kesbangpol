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

</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row text-center d-flex align-items-center py-2" id="latar">
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/pendataan' ? 'nav-link-active' : '' ?> p-0" aria-current="page" href="/layanan/pendataan">
        <span class="material-icons-outlined align-middle">person_add_alt_1</span>
        <p class="m-0 p-0 d-none d-md-block">Pendataan<br>Orsospol</p>
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-hibah' ? 'nav-link-active' : '' ?> p-0" href="/layanan/permohonan-hibah">
        <span class="material-icons-outlined align-middle">volunteer_activism</span>
        <p class="m-0 p-0 d-none d-md-block">Permohonan<br>Hibah</p>
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/permohonan-penelitian' ? 'nav-link-active' : '' ?> p-0" href="/layanan/permohonan-penelitian">
        <span class="material-icons-outlined align-middle">plagiarism</span>
        <p class="m-0 p-0 d-none d-md-block">Permohonan<br>Penelitian</p>  
      </a>
    </div>
    <div class="col-3 p-0">
      <a class="nav-link <?= $requestUri == '/layanan/unduhan' ? 'nav-link-active' : '' ?> p-0" href="/layanan/unduhan">
        <span class="material-icons-outlined align-middle">file_download</span>
        <p class="m-0 p-0 d-none d-md-block">Unduhan Form<br>Lainnya</p>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole == '9asdkqhjwew') { ?>
<a class="btn btn-outline-danger d-inline float-end text-dark" href="/layanan-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
<?php } ?>