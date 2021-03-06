<style type="text/css">
  .nav-link{
    color: navy;
  }
  .nav-link:hover{
    color: #feae88;
  }
  #bgprofile{
    background-color: #e0e0e0;
  }
</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row py-2 d-flex justify-content-center" id="bgprofile">
    <div class="col-2 px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/berita' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" aria-current="page" href="/informasi/berita">
        <span class="material-icons-outlined align-middle">article</span>
        <span class="d-none d-md-block">Berita</span>
      </a>
    </div>
    <div class="col-2 px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/pengumuman' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/informasi/pengumuman">
        <span class="material-icons-outlined align-middle">campaign</span>
        <span class="d-none d-md-block">Pengumuman</span>
      </a>
    </div>
    <div class="col-2 px-2 mb-1" >
      <a class="nav-link <?= $requestUri == '/informasi/agenda' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" aria-current="page" href="/informasi/agenda">
        <span class="material-icons-outlined align-middle">event_note</span>
        <span class="d-none d-md-block">Agenda</span>
      </a>
    </div>
    <div class="col-2 px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/galeri' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/informasi/galeri">
        <span class="material-icons-outlined align-middle">photo_library</span>
        <span class="d-none d-md-block">Galeri</span>
      </a>
    </div>
    <?php if ($idRole == '9asdkqhjwew') { ?>
    <div class="col-2 px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/kontak-darurat' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/informasi/kontak-darurat">
        <span class="material-icons-outlined align-middle">contacts</span><br>
        <span>Kontak Darurat</span>
      </a>
    </div>
    <div class="col-sm-2 px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/banner' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/informasi/banner">
        <span class="material-icons-outlined align-middle">article</span><br>
        <span>Banner</span>
      </a>
    </div>
    <?php } ?>

  </div>
</div>
<?php if ($idRole == '9asdkqhjwew') { ?>
<a class="btn btn-outline-danger d-block float-end navy" href="/informasi-kesbangpol/berita" id="editinfoberita"><i class="fas fa-edit"></i> Edit</a>
<?php } ?>