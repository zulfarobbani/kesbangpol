 <span><a href="\"><img class="w-100" src="/assets/image/ribbon-logo-02.png" alt="gak ada gambar" id="bajingan"></a></span>
  <div class="container-fluid p-0 d-none d-md-block">
    <nav class="navbar-fluid shadow sticky-top navbar-expand" style="background-color: #000099;height: 55px;">
      <div class="collapse navbar-collapse" id="navbarNav" style="height: 55px;">
       <div class="container-fluid d-flex justify-content-center" style="height: 55px;">
        <ul class="navbar-nav">
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link active" aria-current="page" href="\beranda"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">home</span>
              <br>Beranda</a>
            </div>
          </li>
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link" href="/struktur-organisasi"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">people</span>
              <br>Profile</a>
            </div>
          </li>
          <li class="nav-item text-center px-3 py-1" >
            <div class="container-fluid">
              <a class="nav-link" href="/layanan/pendataan" style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">rss_feed</span> 
                <br>Layanan</a> 
            </div>
          </li>
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="/informasi/berita" style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">info</span>
                <br>informasi</a>
            </div>
          </li>
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="/organisasi-terdaftar/ormas"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">groups</span>
                <br>Organisasi Terdaftar</a>
            </div>
          </li>
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="/forum-umum"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" style="color: white;">forum</span>
                <br>Forum Orsospol</a>
            </div>
          </li> 
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="https://linktr.ee/ardhin" target="_blank" style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center" style="color: white;">support_agent</span>
              <br>Hubungi Kami</a>
            </div>
          </li> 
          <?php if ($idRole == '9asdkqhjwew') { ?>
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="/users"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center" style="color: white;">groups</span>
              <br>Manajemen User</a>
            </div>
          </li>
          <?php } ?>
          <?php if ($idRole == null) { ?>
            <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="/login-register"  style="color: white;font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center" style="color: white;">meeting_room</span>
              <br>Login</a>
            </div>
          </li>
          <?php } ?>
        </ul>
        </div>
      </div>
   </nav>

 </div>