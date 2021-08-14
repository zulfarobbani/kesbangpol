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
<div class="container px-0 py-3 rounded justify-content-start">
  <h4>Forum diskusi</h4>
  <div class="row mx-0 py-3 rounded-2" id="bgprofile">
    <div class="col px-2">
      <a class="nav-link <?= $requestUri == '/forum-umum' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" aria-current="page" href="\forum-umum">
        <span class="material-icons-outlined">question_answer</span>
        <span class="d-none d-md-block teksnav">Umum</span>
      </a>
    </div>
    <div class="col px-2">
      <a class="nav-link <?= $requestUri == '/forum-private' ? 'nav-link-active' : '' ?> p-0 text-center hstack gap-1 justify-content-center fw-bold" href="\forum-private">
        <!-- <i class="far fa-comments" style="font-size: 17px;margin-right:10px;"></i> -->
        <span class="material-icons-outlined">chat</span>
        <span class="d-none d-md-block teksnav">Private</span>
      </a>
    </div>
  </div>
</div>