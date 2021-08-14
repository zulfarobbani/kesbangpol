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
  <div class="row d-flex justify-content-center" id="bgprofile"> -->
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row text-center d-flex align-items-center" id="bgprofile" style="margin-left: 0;margin-right: 0;">
    <div class="col d-flex px-2 mb-1  ">
      <a class="nav-link <?= $requestUri == '/informasi/berita' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" aria-current="page" href="/informasi/berita">
        <span class="material-icons-outlined flex-fill align-self-center">article</span>
        <span class="d-none d-md-block text-start align-self-center flex-fill teksnav">Berita</span>
      </a>
    </div>
    <div class="col px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/pengumuman' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" href="/informasi/pengumuman">
        <span class="material-icons-outlined flex-fill align-self-center" style="font-size: 17px;">campaign</span>
        <span class="d-none d-md-block text-start align-self-center flex-fill teksnav" style="font-size: 13px;">Pengumuman</span>
      </a>
    </div>
    <div class="col px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/agenda' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" aria-current="page" href="/informasi/agenda">
        <span class="material-icons-outlined flex-fill align-self-center" style="font-size: 17px;">event_note</span>
        <span class="d-none d-md-block text-start align-self-center flex-fill teksnav" style="font-size: 13px;">Agenda</span>
      </a>
    </div>
    <div class="col px-2 mb-1">
      <a class="nav-link <?= $requestUri == '/informasi/galeri' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" href="/informasi/galeri">
        <span class="material-icons-outlined flex-fill align-self-center" style="font-size: 17px;">photo_library</span>
        <span class="d-none d-md-block text-start align-self-center flex-fill teksnav" style="font-size: 13px;">Galeri</span>
      </a>
    </div>
    <?php if ($idRole == '9asdkqhjwew') { ?>
      <div class="col px-2 mb-1">
        <a class="nav-link <?= $requestUri == '/informasi/kontak-darurat' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" href="/informasi/kontak-darurat">
          <span class="material-icons-outlined flex-fill align-self-center" style="font-size: 17px;margin-right: 12px;">contacts</span>
          <span class="d-none d-md-block text-start align-self-center flex-fill teksnav" style="font-size: 13px;">Kontak Darurat</span>
        </a>
      </div>
      <div class="col px-2 mb-1">
        <a class="nav-link <?= $requestUri == '/informasi/banner' ? 'nav-link-active' : '' ?> p-2 text-center d-flex flex-fill flex-row fw-bold" href="/informasi/banner">
          <span class="material-icons-outlined flex-fill align-self-center" style="font-size: 17px;">article</span><br>
          <span class="d-none d-md-block text-start align-self-center flex-fill teksnav" style="font-size: 13px;">Banner</span>
        </a>
      </div>
    <?php } ?>

  </div>
  <?php if ($idRole == '9asdkqhjwew') { ?>
    <div class="d-flex flex-row-reverse mt-3">
      <a class="btn btn-outline-danger navy" href="/informasi-kesbangpol/berita"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } ?>
</div>