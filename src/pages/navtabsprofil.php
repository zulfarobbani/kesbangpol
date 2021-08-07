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
  <div class="row py-1" id="bgprofile">
    <div class="bagi5 col-md-2 px-2" >
      <a class="nav-link p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" aria-current="page" href="\struktur-organisasi">
        <span class="material-icons-outlined align-middle">account_tree</span>
        <span class="d-none d-md-block">Struktur Organisasi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\visi-misi">
        <span class="material-icons-outlined align-middle">radar</span>
        <span class="d-none d-md-block">Visi & Misi</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="/tupoksi">
        <span class="material-icons-outlined align-middle">assignment_ind</span>
        <span class="d-none d-md-block">TUPOKSI</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\sakip">
        <span class="material-icons-outlined align-middle">note_alt</span>
        <span class="d-none d-md-block">SAKIP</span>
      </a>
    </div>
    <div class="bagi5 col-md-2 px-2">
      <a class="nav-link p-0 text-center position-relative top-50 start-50 translate-middle fw-bold" href="\regulasi">
        <span class="material-icons-outlined align-middle">gavel</span>
        <span class="d-none d-md-block">Regulasi</span>
      </a>
    </div>
  </div>
</div>
<?php if ($idRole == '9asdkqhjwew') { ?>
<a class="btn btn-outline-danger float-end navy d-block" href="/profile-kesbangpol"><i class="fas fa-edit"></i> Edit</a>
<?php } ?>