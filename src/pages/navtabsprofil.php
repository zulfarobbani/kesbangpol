<style type="text/css">
  .nav-link {
    color: navy;
  }

  #bgprofile {
    background-color: #e0e0e0;
  }
</style>
<div class="container px-0 py-3 rounded justify-content-start">
  <div class="row py-3 rounded-2" id="bgprofile" style="margin-left: 0;margin-right: 0;">
    <div class="col col-md px-2">
      <a class="nav-link <?= $requestUri == '/struktur-organisasi' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" aria-current="page" href="\struktur-organisasi">
        <span class="material-icons-outlined align-self-center" >account_tree</span>
        <span class="d-none d-md-block text-start align-self-center teksnav" >Struktur Organisasi</span>
      </a>
    </div>
    <div class="col col-md px-2">
      <a class="nav-link <?= $requestUri == '/visi-misi' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" href="\visi-misi">
        <span class="material-icons-outlined align-self-center" >radar</span>
        <span class="d-none d-md-block text-start align-self-center teksnav" >Visi & Misi</span>
      </a>
    </div>
    <div class="col col-md px-2">
      <a class="nav-link <?= $requestUri == '/tupoksi' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" href="/tupoksi">
        <span class="material-icons-outlined align-self-center" >assignment_ind</span>
        <span class="d-none d-md-block text-start align-self-center teksnav" >TUPOKSI</span>
      </a>
    </div>
    <div class="col col-md px-2">
      <a class="nav-link <?= $requestUri == '/sakip' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" href="\sakip">
        <span class="material-icons-outlined align-self-center" >note_alt</span>
        <span class="d-none d-md-block text-start align-self-center teksnav" >SAKIP</span>
      </a>
    </div>
    <div class="col col-md px-2">
      <a class="nav-link <?= $requestUri == '/regulasi' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" href="\regulasi">
        <span class="material-icons-outlined align-self-center" >gavel</span>
        <span class="d-none d-md-block text-start align-self-center teksnav" >Regulasi</span>
      </a>
    </div>
  </div>
  <?php if ($isPermited($rolepermissions, ['struktur-organisasi-konten', 'visi-&-misi-konten'], 'required-one')) { ?>
    <div class="d-flex flex-row-reverse mt-3">
      <a class="btn btn-outline-danger navy" href="/profile-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
    </div>
  <?php } ?>
</div>