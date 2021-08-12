 <span>
   <a href="\">
     <!-- <img class="w-100" src="/assets/image/ribbon-logo-02.png" alt="gak ada gambar" id="bajingan"> -->
     <div class="bg-img-header" style="background: #d2d2d2;">
       <div class="img-header" style="height: 100px;background: url('/assets/image/header/ribbonbaru-02.png');background-repeat: no-repeat;background-position-x: center;background-position-y: -50px;background-size:cover;position:relative;">
         <img src="/assets/image/header/header-03.png" alt="" style="width: 150px;position:absolute;left: 50%;margin-left: -70px;top: 60%;margin-top: -50px;">
       </div>
     </div>
   </a>
 </span>
 <div class="container-fluid p-0 d-none d-md-block">
   <nav class="navbar-fluid shadow sticky-top navbar-expand" style="background-color: #000099;height: 55px;">
     <div class="collapse navbar-collapse" id="navbarNav" style="height: 55px;">
       <div class="container-fluid d-flex justify-content-center" style="height: 55px;">
         <ul class="navbar-nav">
           <li class="nav-item <?= $requestUri == '/beranda' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/beranda' ? 'nav-link-active' : '' ?>" aria-current="page" href="\beranda" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">home</span>
                 <br><span class="<?= $requestUri == '/beranda' ? 'teksactive' : '' ?>">Beranda</span></a>
             </div>
           </li>
           <li class="nav-item <?= $requestUri == '/struktur-organisasi' || $requestUri == '/visi-misi' || $requestUri == '/tupoksi' || $requestUri == '/sakip' || $requestUri == '/regulasi' || $requestUri == '/profile-kesbangpol' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/struktur-organisasi' || $requestUri == '/visi-misi' || $requestUri == '/tupoksi' || $requestUri == '/sakip' || $requestUri == '/regulasi' || $requestUri == '/profile-kesbangpol' ? 'nav-link-active' : '' ?>" href="/struktur-organisasi" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">people</span>
                 <br><span class="<?= $requestUri == '/struktur-organisasi' || $requestUri == '/visi-misi' || $requestUri == '/tupoksi' || $requestUri == '/sakip' || $requestUri == '/regulasi' || $requestUri == '/profile-kesbangpol' ? 'teksactive' : '' ?>">Profile</span></a>
             </div>
           </li>
           <li class="nav-item <?= $requestUri == '/layanan/pendataan' || $requestUri == '/layanan/permohonan-hibah' || $requestUri == '/layanan/permohonan-penelitian' || $requestUri == '/layanan/unduhan' || $requestUri == '/layanan-kesbangpol' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/layanan/pendataan' || $requestUri == '/layanan/permohonan-hibah' || $requestUri == '/layanan/permohonan-penelitian' || $requestUri == '/layanan/unduhan' || $requestUri == '/layanan-kesbangpol' ? 'nav-link-active' : '' ?>" href="/layanan/pendataan" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">rss_feed</span>
                 <br><span class="<?= $requestUri == '/layanan/pendataan' || $requestUri == '/layanan/permohonan-hibah' || $requestUri == '/layanan/permohonan-penelitian' || $requestUri == '/layanan/unduhan' || $requestUri == '/layanan-kesbangpol' ? 'teksactive' : '' ?>">Layanan</span></a>
             </div>
           </li>
           <li class="nav-item <?= $requestUri == '/informasi/berita' || $requestUri == '/informasi/pengumuman' || $requestUri == '/informasi/agenda' || $requestUri == '/informasi/galeri' || $requestUri == '/informasi/kontak-darurat' || $requestUri == '/informasi/banner' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/informasi/berita' || $requestUri == '/informasi/pengumuman' || $requestUri == '/informasi/agenda' || $requestUri == '/informasi/galeri' || $requestUri == '/informasi/kontak-darurat' || $requestUri == '/informasi/banner' ? 'nav-link-active' : '' ?>" href="/informasi/berita" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">info</span>
                 <br><span class="<?= $requestUri == '/informasi/berita' || $requestUri == '/informasi/pengumuman' || $requestUri == '/informasi/agenda' || $requestUri == '/informasi/galeri' || $requestUri == '/informasi/kontak-darurat' || $requestUri == '/informasi/banner' ? 'teksactive' : '' ?>">informasi</span></a>
             </div>
           </li>
           <li class="nav-item <?= $requestUri == '/organisasi-terdaftar/ormas' || $requestUri == '/organisasi-terdaftar/okp' || $requestUri == '/organisasi-terdaftar/komunitas' || $requestUri == '/organisasi-terdaftar/parpol' || $requestUri == '/organisasi-terdaftar-kesbangpol/ormas' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/organisasi-terdaftar/ormas' || $requestUri == '/organisasi-terdaftar/okp' || $requestUri == '/organisasi-terdaftar/komunitas' || $requestUri == '/organisasi-terdaftar/parpol' || $requestUri == '/organisasi-terdaftar-kesbangpol/ormas' ? 'nav-link-active' : '' ?>" href="/organisasi-terdaftar/ormas" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">groups</span>
                 <br><span class="<?= $requestUri == '/organisasi-terdaftar/ormas' || $requestUri == '/organisasi-terdaftar/okp' || $requestUri == '/organisasi-terdaftar/komunitas' || $requestUri == '/organisasi-terdaftar/parpol' || $requestUri == '/organisasi-terdaftar-kesbangpol/ormas' ? 'teksactive' : '' ?>">Organisasi Terdaftar</span></a>
             </div>
           </li>
           <li class="nav-item <?= $requestUri == '/forum-umum' || $requestUri == '/forum-private' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= $requestUri == '/forum-umum' || $requestUri == '/forum-private' ? 'nav-link-active' : '' ?>" href="/forum-umum" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined fs-4">forum</span>
                 <br><span class="<?= $requestUri == '/forum-umum' || $requestUri == '/forum-private' ? 'teksactive' : '' ?>">Forum Orsospol</span></a>
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
                 <a class="nav-link <?= $requestUri == '/users' || $requestUri == '/roles' || $requestUri == '/permissions' ? 'nav-link-active' : '' ?>" href="/users" style="font-size: 12px;padding:0;">
                   <span class="material-icons-outlined fs-4 font-center">groups</span>
                   <br><span class="<?= $requestUri == '/users' || $requestUri == '/roles' || $requestUri == '/permissions' ? 'teksactive' : '' ?>"></span>Manajemen User</a>
               </div>
             </li>
           <?php } ?>
           <?php if ($idRole == null) { ?>
             <li class="nav-item <?= $requestUri == '/login-register' ? 'nav-item-active' : '' ?> text-center px-3 py-1">
               <div class="container-fluid">
                 <a class="nav-link <?= $requestUri == '/login-register' ? 'nav-link-active' : '' ?>" href="/login-register" style="font-size: 12px;padding:0;">
                   <span class="material-icons-outlined fs-4 font-center">meeting_room</span>
                   <br><span class="<?= $requestUri == '/login-register' ? 'teksactive' : '' ?>">Login</span></a>
               </div>
             </li>
           <?php } ?>
         </ul>
       </div>
     </div>
   </nav>

 </div>