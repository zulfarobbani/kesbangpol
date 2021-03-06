 <span><a href="\"><img class="w-100" src="/assets/image/ribbon-logo-02.png" alt="gak ada gambar" id="bajingan"></a></span>
  <div class="container-fluid p-0 d-none d-md-block">
    <nav class="navbar-fluid shadow sticky-top navbar-expand" style="background-color: #000099;height: 55px;">
      <div class="collapse navbar-collapse" id="navbarNav" style="height: 55px;">
       <div class="container-fluid d-flex justify-content-center" style="height: 55px;">
        <ul class="navbar-nav">
          <li class="nav-item <?= $requestUri == '/beranda' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/beranda' ? 'nav-link-active' : '' ?>" aria-current="page" href="\beranda"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4">home</span>
              <br>Beranda</a>
            </div>
          </li>
          <li class="nav-item <?= $requestUri == '/struktur-organisasi' || $requestUri == '/visi-misi' || $requestUri == '/tupoksi' || $requestUri == '/sakip' || $requestUri == '/regulasi' || $requestUri == '/profile-kesbangpol' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/struktur-organisasi' || $requestUri == '/visi-misi' || $requestUri == '/tupoksi' || $requestUri == '/sakip' || $requestUri == '/regulasi' || $requestUri == '/profile-kesbangpol' ? 'nav-link-active' : '' ?>" href="/struktur-organisasi"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" >people</span>
              <br>Profile</a>
            </div>
          </li>
          <li class="nav-item <?= $requestUri == '/layanan/pendataan' || $requestUri == '/layanan/permohonan-hibah' || $requestUri == '/layanan/permohonan-penelitian' || $requestUri == '/layanan/unduhan' || $requestUri == '/layanan-kesbangpol' ? 'nav-item-active' : '' ?> text-center px-3 py-1" >
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/layanan/pendataan' || $requestUri == '/layanan/permohonan-hibah' || $requestUri == '/layanan/permohonan-penelitian' || $requestUri == '/layanan/unduhan' || $requestUri == '/layanan-kesbangpol' ? 'nav-link-active' : '' ?>" href="/layanan/pendataan" style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" >rss_feed</span> 
                <br>Layanan</a> 
            </div>
          </li>
          <li class="nav-item <?= $requestUri == '/informasi/berita' || $requestUri == '/informasi/pengumuman' || $requestUri == '/informasi/agenda' || $requestUri == '/informasi/galeri' || $requestUri == '/informasi/kontak-darurat' || $requestUri == '/informasi/banner' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/informasi/berita' || $requestUri == '/informasi/pengumuman' || $requestUri == '/informasi/agenda' || $requestUri == '/informasi/galeri' || $requestUri == '/informasi/kontak-darurat' || $requestUri == '/informasi/banner' ? 'nav-link-active' : '' ?>" href="/informasi/berita" style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" >info</span>
                <br>informasi</a>
            </div>
          </li>
          <li class="nav-item <?= $requestUri == '/organisasi-terdaftar/ormas' || $requestUri == '/organisasi-terdaftar/okp' || $requestUri == '/organisasi-terdaftar/komunitas' || $requestUri == '/organisasi-terdaftar/parpol' || $requestUri == '/organisasi-terdaftar-kesbangpol/ormas' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/ormas' || $requestUri == '/organisasi-terdaftar/okp' || $requestUri == '/organisasi-terdaftar/komunitas' || $requestUri == '/organisasi-terdaftar/parpol' || $requestUri == '/organisasi-terdaftar-kesbangpol/ormas' ? 'nav-link-active' : '' ?>" href="/organisasi-terdaftar/ormas"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4" >groups</span>
                <br>Organisasi Terdaftar</a>
            </div>
          </li>
          <li class="nav-item <?= $requestUri == '/forum-umum' || $requestUri == '/forum-private' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/forum-umum' || $requestUri == '/forum-private' ? 'nav-link-active' : '' ?>" href="/forum-umum"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4">forum</span>
                <br>Forum Orsospol</a>
            </div>
          </li> 
          <li class="nav-item text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link " href="https://linktr.ee/ardhin" target="_blank" style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center">support_agent</span>
              <br>Hubungi Kami</a>
            </div>
          </li> 
          <?php if ($idRole == '9asdkqhjwew') { ?>
          <li class="nav-item <?= $requestUri == '/users' || $requestUri == '/roles' || $requestUri == '/permissions' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/users' || $requestUri == '/roles' || $requestUri == '/permissions' ? 'nav-link-active' : '' ?>" href="/users"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center">groups</span>
              <br>Manajemen User</a>
            </div>
          </li>
          <?php } ?>
          <?php if ($idRole == null) { ?>
            <li class="nav-item <?= $requestUri == '/login-register' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
            <div class="container-fluid">
              <a class="nav-link <?= $requestUri == '/login-register' ? 'nav-link-active' : '' ?>" href="/login-register"  style="font-size: 12px;padding:0;">
              <span class="material-icons-outlined fs-4 font-center">meeting_room</span>
              <br>Login</a>
            </div>
          </li>
          <?php } ?>
        </ul>
        </div>
      </div>
   </nav>

 </div>