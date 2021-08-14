<style type="text/css">
  .nav-link {
    color: navy;
  }

  #bgprofile {
    background-color: #e0e0e0;
  }
</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row py-1" id="bgprofile" style="margin-left: 0;margin-right: 0;">
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/struktur-organisasi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" aria-current="page" href="\struktur-organisasi">
        <span class="material-icons-outlined align-middle" style="font-size: 13pt;">account_tree</span>
        <span class="d-none d-md-block text-dark" style="font-size: 9pt;">Struktur Organisasi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/visi-misi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\visi-misi">
        <span class="material-icons-outlined align-middle" style="font-size: 13pt;">radar</span>
        <span class="d-none d-md-block text-dark" style="font-size: 9pt;">Visi & Misi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/tupoksi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/tupoksi">
        <span class="material-icons-outlined align-middle" style="font-size: 13pt;">assignment_ind</span>
        <span class="d-none d-md-block text-dark" style="font-size: 9pt;">TUPOKSI</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/sakip' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\sakip">
        <span class="material-icons-outlined align-middle" style="font-size: 13pt;">note_alt</span>
        <span class="d-none d-md-block text-dark" style="font-size: 9pt;">SAKIP</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link <?= $requestUri == '/regulasi' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\regulasi">
        <span class="material-icons-outlined align-middle" style="font-size: 13pt;">gavel</span>
        <span class="d-none d-md-block text-dark" style="font-size: 9pt;">Regulasi</span>
      </a>
    </div>
  </div>
  <?php if ($isPermited($rolepermissions, ['struktur-organisasi-konten', 'visi-&-misi-konten'], 'required-one')) { ?>
    <div class="d-flex flex-row-reverse mt-3">
      <a class="btn btn-outline-danger navy" href="/profile-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } ?>
</div>