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
<div class="container px-0 py-3 roundedjustify-content-start">
  <h4>Forum diskusi</h4>
  <div class="row p" id="bgprofile">
    <div class="col-6 d-flex">
      <a class="nav-link <?= $requestUri == '/forum-umum' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold d-flex" aria-current="page" href="\forum-umum">
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right:10px;">question_answer</span>
        <span class="d-none d-md-block" style="font-size: 13px;">Umum</span>
      </a>
    </div>
    <div class="col-6 d-flex px-2">
      <a class="nav-link <?= $requestUri == '/forum-private' ? 'nav-link-active' : '' ?> p-0 text-center position-relative top-50 start-50 translate-middle fw-bold d-flex" href="\forum-private">
        <!-- <i class="far fa-comments" style="font-size: 17px;margin-right:10px;"></i> -->
        <span class="material-icons-outlined align-middle" style="font-size: 17px;margin-right:10px;">chat</span>
        <span class="d-none d-md-block" style="font-size: 13px;">Private</span>
      </a>
    </div>
  </div>
</div>