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
           <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'beranda') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'beranda') ? 'nav-link-active' : '' ?>" aria-current="page" href="\beranda" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>home</span>
                 <span class="<?= strpos($requestUri, 'beranda') ? 'teksactive' : '' ?>">Beranda</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'struktur-organisasi') || strpos($requestUri, 'visi-misi') || strpos($requestUri, 'tupoksi') || strpos($requestUri, 'informasi/sakip') || strpos($requestUri, 'regulasi') || strpos($requestUri, 'profile-kesbangpol') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'struktur-organisasi') || strpos($requestUri, 'visi-misi') || strpos($requestUri, 'tupoksi') || strpos($requestUri, 'informasi/sakip') || strpos($requestUri, 'regulasi') || strpos($requestUri, 'profile-kesbangpol') ? 'nav-link-active' : '' ?>" href="/struktur-organisasi" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>people</span>
                 <span class="<?= strpos($requestUri, 'struktur-organisasi') || strpos($requestUri, 'visi-misi') || strpos($requestUri, 'tupoksi') || strpos($requestUri, 'informasi/sakip') || strpos($requestUri, 'regulasi') || strpos($requestUri, 'profile-kesbangpol') ? 'teksactive' : '' ?>">Profile</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'layanan/pendataan') || strpos($requestUri, 'layanan/permohonan-hibah') || strpos($requestUri, 'layanan/permohonan-penelitian') || strpos($requestUri, 'layanan/unduhan') || strpos($requestUri, 'layanan/kesbangpol') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'layanan/pendataan') || strpos($requestUri, 'layanan/permohonan-hibah') || strpos($requestUri, 'layanan/permohonan-penelitian') || strpos($requestUri, 'layanan/unduhan') || strpos($requestUri, 'layanan/kesbangpol') ? 'nav-link-active' : '' ?>" href="/layanan/pendataan" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>rss_feed</span>
                 <span class="<?= strpos($requestUri, 'layanan/pendataan') || strpos($requestUri, 'layanan/permohonan-hibah') || strpos($requestUri, 'layanan/permohonan-penelitian') || strpos($requestUri, 'layanan/unduhan') || strpos($requestUri, 'layanan/kesbangpol') ? 'teksactive' : '' ?>">Layanan</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center  nav-item <?= strpos($requestUri, 'informasi/berita') || strpos($requestUri, 'informasi/pengumuman') || strpos($requestUri, 'informasi/agenda') || strpos($requestUri, 'informasi/galeri') || strpos($requestUri, 'informasi/kontak-darurat') || strpos($requestUri, 'informasi/banner') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'informasi/berita') || strpos($requestUri, 'informasi/pengumuman') || strpos($requestUri, 'informasi/agenda') || strpos($requestUri, 'informasi/galeri') || strpos($requestUri, 'informasi/kontak-darurat') || strpos($requestUri, 'informasi/banner') ? 'nav-link-active' : '' ?>" href="/informasi/berita" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>info</span>
                 <span class="<?= strpos($requestUri, 'informasi/berita') || strpos($requestUri, 'informasi/pengumuman') || strpos($requestUri, 'informasi/agenda') || strpos($requestUri, 'informasi/galeri') || strpos($requestUri, 'informasi/kontak-darurat') || strpos($requestUri, 'informasi/banner') ? 'teksactive' : '' ?>">informasi</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center  nav-item <?= strpos($requestUri, 'organisasi-terdaftar/ormas') || strpos($requestUri, 'organisasi-terdaftar/okp') || strpos($requestUri, 'organisasi-terdaftar/komunitas') || strpos($requestUri, 'organisasi-terdaftar/parpol') || strpos($requestUri, 'organisasi-terdaftar-kesbangpol/ormas') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'organisasi-terdaftar/ormas') || strpos($requestUri, 'organisasi-terdaftar/okp') || strpos($requestUri, 'organisasi-terdaftar/komunitas') || strpos($requestUri, 'organisasi-terdaftar/parpol') || strpos($requestUri, 'organisasi-terdaftar-kesbangpol/ormas') ? 'nav-link-active' : '' ?>" href="/organisasi-terdaftar/ormas" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>groups</span>
                 <span class="<?= strpos($requestUri, 'organisasi-terdaftar/ormas') || strpos($requestUri, 'organisasi-terdaftar/okp') || strpos($requestUri, 'organisasi-terdaftar/komunitas') || strpos($requestUri, 'organisasi-terdaftar/parpol') || strpos($requestUri, 'organisasi-terdaftar-kesbangpol/ormas') ? 'teksactive' : '' ?>">Organisasi Terdaftar</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'forum-umum') || strpos($requestUri, 'forum-private') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link <?= strpos($requestUri, 'forum-umum') || strpos($requestUri, 'forum-private') ? 'nav-link-active' : '' ?>" href="/forum-umum" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined" style=>forum</span>
                 <span class="<?= strpos($requestUri, 'forum-umum') || strpos($requestUri, 'forum-private') ? 'teksactive' : '' ?>">Forum Orsospol</span></a>
             </div>
           </li>
           <li class="d-flex align-items-center nav-item text-center px-3 py-1">
             <div class="container-fluid">
               <a class="nav-link hubungiKami" href="#" data-bs-toggle="modal" data-bs-target="#hubungiKami" target="_blank" style="font-size: 12px;padding:0;">
                 <span class="material-icons-outlined  style=font-center">support_agent</span>
                 Hubungi Kami</a>
             </div>
           </li>
           <?php if ($idRole == '9asdkqhjwew') { ?>
             <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'users') || strpos($requestUri, 'roles') || strpos($requestUri, 'permissions') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
               <div class="container-fluid">
                 <a class="nav-link <?= strpos($requestUri, 'users') || strpos($requestUri, 'roles') || strpos($requestUri, 'permissions') ? 'nav-link-active' : '' ?>" href="/users" style="font-size: 12px;padding:0;">
                   <span class="material-icons-outlined  style=font-center">groups</span>
                   <span class="<?= strpos($requestUri, 'users') || strpos($requestUri, 'roles') || strpos($requestUri, 'permissions') ? 'teksactive' : '' ?>"></span>Manajemen User</a>
               </div>
             </li>
           <?php } ?>
           <?php if ($idRole == null) { ?>
             <li class="d-flex align-items-center nav-item <?= strpos($requestUri, 'login-register') ? 'nav-item-active' : '' ?> text-center px-3 py-1">
               <div class="container-fluid">
                 <a class="nav-link <?= strpos($requestUri, 'login-register') ? 'nav-link-active' : '' ?>" href="/login-register" style="font-size: 12px;padding:0;">
                   <span class="material-icons-outlined  style=font-center">meeting_room</span>
                   <span class="<?= strpos($requestUri, 'login-register') ? 'teksactive' : '' ?>">Login</span></a>
               </div>
             </li>
           <?php } ?>
         </ul>
       </div>
     </div>
   </nav>
 </div>

  <!-- Modal -->
  <div class="modal fade" id="hubungiKami" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hubungi Kami</h5>
              <button type="button" class="btn btn-outline-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h6 class="text-center">Hubungi kami melalui tautan berikut :</h6>
              <div class="row justify-content-center my-2">
                <div class="col-2 mb-3"> 
                  <a href="" class="whatsapp" target="_blank"><img src="/assets/icon/sosmed/whatsapp.svg" class="w-50 d-block mx-auto pt-3" alt=""><p class="hubungiteks text-dark text-center" style="margin-top:0;"><br>Whatsapp</p></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="telegram" target="_blank"><img src="/assets/icon/sosmed/telegram.svg" class="w-50 d-block mx-auto pt-3" alt=""><p class="hubungiteks text-dark text-center" style="margin-top:0;"><br>Telegram</p></a>
                </div>
                <div class="col-2 mb-3">
                  <a href="" class="email" target="_blank"><img src="/assets/icon/sosmed/email.svg" class="w-50 d-block mx-auto pt-3" alt=""><p class="hubungiteks text-dark text-center" style="margin-top:0;"><br>Email</p></a>
                </div>
              </div>
              <h6 class="text-center">Kantor Kesatuan Bangsa dan Politik<br>Pemerintah Kota Cimahi</h6>
              <p class="text-center hubungiteks">Gedung Perkantoran Pemkot Cimahi<br>Jl. Demang Hardjakusumah Gedung C,<br>Lantai 4 Kota Cimahi</p>
              <p class="text-center hubungiteks">022 1234 5678</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>