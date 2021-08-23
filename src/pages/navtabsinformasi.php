<style type="text/css">
  .nav-link {
    color: navy;
  }

  .nav-link:hover {
    color: #feae88;
  }

  #bgprofile {
    background-color: #e0e0e0;
  }
</style>
<!-- <div class="container  py-3 rounded justify-content-start">
  <div class="row  justify-content-center" id="bgprofile"> -->
<div class="container px-0 py-3 justify-content-start">
  <div class="row py-2 align-items-center mx-0 rounded-2" id="bgprofile">
    <div class="col mb-1 ">
      <a class="nav-link <?= $requestUri == '/informasi/berita' ? 'nav-link-active' : '' ?> p-2 text-center hstack gap-1 justify-content-center fw-bold" aria-current="page" href="/informasi/berita">
        <span class="material-icons-outlined align-self-center">article</span>
        <span class="d-none d-md-block text-start align-self-center  teksnav">Berita</span>
      </a>
    </div>
    <div class="col  mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/pengumuman' ? 'nav-link-active' : '' ?> p-2 text-center  hstack gap-1 justify-content-center  fw-bold" href="/informasi/pengumuman">
        <span class="material-icons-outlined  align-self-center">campaign</span>
        <span class="d-none d-md-block text-start align-self-center  teksnav">Pengumuman</span>
      </a>
    </div>
    <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
    <div class="col  mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/agenda' ? 'nav-link-active' : '' ?> p-2 text-center hstack gap-1 justify-content-center fw-bold" aria-current="page" href="/informasi/agenda">
        <span class="material-icons-outlined  align-self-center">event_note</span>
        <span class="d-none d-md-block text-start align-self-center  teksnav">Agenda</span>
      </a>
    </div>
    <?php } ?>
    <div class="col mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/galeri' ? 'nav-link-active' : '' ?> p-2 text-center  hstack gap-1 justify-content-center fw-bold" href="/informasi/galeri">
        <span class="material-icons-outlined  align-self-center">photo_library</span>
        <span class="d-none d-md-block text-start align-self-center  teksnav">Galeri</span>
      </a>
    </div>
    <?php if ($idRole == '9asdkqhjwew') { ?>
      <div class="col mb-1">
        <a class="nav-link <?= $requestUri == '/informasi/kontak-darurat' ? 'nav-link-active' : '' ?> p-2 text-center hstack gap-1 justify-content-center  fw-bold" href="/informasi/kontak-darurat">
          <span class="material-icons-outlined  align-self-center">contacts</span>
          <span class="d-none d-md-block text-start align-self-center  teksnav">Kontak Darurat</span>
        </a>
      </div>
      <div class="col mb-1">
        <a class="nav-link <?= $requestUri == '/informasi/banner' ? 'nav-link-active' : '' ?> p-2 text-center hstack gap-1 justify-content-center  fw-bold" href="/informasi/banner">
          <span class="material-icons-outlined">panorama</span>
          <span class="d-none d-md-block text-start align-self-center  teksnav">Banner</span>
        </a>
      </div>
    <?php } ?>

  </div>
  <?php if ($aliasRole == 'kesbangpol' || $aliasRole == 'pegawai') { ?>
    <?php if ($requestUri == '/informasi/berita') { ?>
      <div class="hstack mt-3">
        <a class="ms-auto btn btn-outline-danger navy" href="/informasi-kesbangpol/berita"><i class="fas fa-edit"></i> Edit</a>
      </div>
    <?php } else if ($requestUri == '/informasi/pengumuman') { ?>
      <div class="hstack mt-3">
        <a class="ms-auto btn btn-outline-danger navy" href="/informasi-kesbangpol/pengumuman"><i class="fas fa-edit"></i> Edit</a>
      </div>
    <?php } else if ($requestUri == '/informasi/galeri') { ?>
      <div class="hstack mt-3">
        <a class="ms-auto btn btn-outline-danger navy" href="/informasi-kesbangpol/gallery"><i class="fas fa-edit"></i> Edit</a>
      </div>
    <?php } ?>
  <?php } ?>
</div>