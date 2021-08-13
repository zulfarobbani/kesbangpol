<style type="text/css">
  .nav-link {
    color: navy;
  }

  #bgprofile {
    background-color: #e0e0e0;
  }
</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row py-1" id="bgprofile">
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/struktur-organisasi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" aria-current="page" href="\struktur-organisasi">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">account_tree</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Struktur Organisasi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/visi-misi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\visi-misi">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">radar</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">Visi & Misi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/tupoksi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/tupoksi">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">assignment_ind</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">TUPOKSI</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/sakip' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\sakip">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">note_alt</span>
        <span class="d-none d-md-block text-dark" style="font-size: 13px;">SAKIP</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/regulasi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\regulasi">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;">gavel</span>
        <span class="d-none d-md-block text-dark" style="font-size: 1px;">Regulasi</span>
      </a>
    </div>
  </div>
</div>
<?php if ($isPermited($rolepermissions, ['struktur-organisasi-konten', 'visi-&-misi-konten'], 'required-one')) { ?>
  <div class="d-flex flex-row-reverse">
    <a class="btn btn-outline-danger navy" href="/profile-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
  </div>
<?php } ?>