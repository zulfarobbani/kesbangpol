<div class="menu-wrap">
  <nav class="menu">
    <div class="icon-list">
      <a href="/beranda"><span class="material-icons-outlined fs-4 text-white">home</span><span>Beranda</span></a>
      <a href="/struktur-organisasi"><span class="material-icons-outlined fs-4 text-white">people</span><span>Profile</span></a>
      <a href="/layanan/pendataan"><span class="material-icons-outlined fs-4 text-white">rss_feed</span><span>Layanan</span></a>
      <a href="/informasi/berita"><span class="material-icons-outlined fs-4 text-white">info</span><span>Informasi</span></a>
      <a href="/organisasi-terdaftar/ormas"><span class="material-icons-outlined fs-4 text-white">groups</span><span>Organisasi Terdaftar</span></a>
      <a href="/forum-umum"><span class="material-icons-outlined fs-4 text-white">forum</span><span>Forum ORSOSPOL</span></a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#hubungiKami"><span class="material-icons-outlined fs-4 font-center text-white">support_agent</span><span>Hubungi Kami</span></a>
      <?php if ($idRole == '9asdkqhjwew') { ?>
        <a href="/users"><span class="material-icons-outlined fs-4 font-center" style="color: white;">groups</span><span>User Manajemen</span></a>
      <?php } ?>
      <?php if ($idRole == null) { ?>
        <a href="/login-register"><span class="material-icons-outlined fs-4 font-center text-white">meeting_room</span><span>Login</span></a>
      <?php } ?>
    </div>
  </nav>
  <button class="close-button invisible" id="close-button">Close Menu</button>
</div>

<div class="menu-wrap2">
  <nav class="menu d-block d-md-none">
  <?php if ($idRole != null) { ?>
    <div class="row d-flex align-items-center">
      <h5 class="text-muted mb-3"><b>Selamat Datang</b></h5>
      <div class="col-8 hstack gap-1">
      <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="50px" height="50px">
          <span class="text-mute fw-bold"><?= $idRole == '9asdkqhjwew' ? 'Admin' : $namaOrsospol ?></span><br>
          <?php if ($idRole != '9asdkqhjwew') { ?>
            <span><?= $noAHU ?></span>
          <?php } ?>
          <!-- <span>No. AHU/No. Register</span> -->

      </div>
      <div class="col-4 px-2">
        <a href="/logout" class="btn btn-outline-danger py-2 px-0 text-center hstack gap-1 justify-content-center" style="color:navy;"><i class="fas fa-door-open"></i><span class="teksnav"> Keluar</span></a>
      </div>
    </div>
  <?php } ?>

  <div class="row mb-5 pb-5">
    <h5 class="text-muted my-4 text-center" id="layanankesbangpol">Layanan<br><b>KESBANGPOL</b></h5> 
    <div class="col-12">
      <a href="/layanan/pendataan" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">person_add_alt_1</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Pendataan Orsospol</span>
      </a>
    </div>
    <div class="col-12">
      <a href="/layanan/permohonan-hibah" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">volunteer_activism</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Permohonan Hibah</span>
      </a>
    </div>
    <div class="col-12">
      <a href="/layanan/permohonan-penelitian" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">plagiarism</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Permohonan Penelitian</span>
      </a>
    </div>
    <div class="col-12">
      <a href="#" data-bs-toggle="modal" data-bs-target="#hubungiKami" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined">link</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Informasi Layanan Lain</span>
      </a>
    </div>

    <h5 class="text-muted my-4 text-center" id="layananpublik">Tautan Layanan Publik<br><b>Kota Cimahi</b></h5>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="http://sipt.kemendag.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex flex-row mb-2">
        <img src="/assets/image/sipt.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi </b> Perizinan Terpadu</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://bphtb.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>BPHTB ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://bpbj.sukabumikota.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/tepra.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Evaluasi Pengawasan</b> Realisasi Anggaran</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://uptpasar.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>UPT PASAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="http://www.simbah.co.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/simbah.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Informasi Pengelolaan</b> Bank Sampah</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://ppid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>PPID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://library.cimahikota.go.id" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://library.cimahikota.go.id/uploaded_files/aplikasi/inlislite.png" class="sidegamar align-self-center img-fluid">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Aplikasi Perpustakaan</b></span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://sip.cimahikota.go.id/be/index" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>eSIP</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://pesduk.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/pesduk_dark.png" class="sidegamar align-self-center img-fluid" style="filter: invert(100%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Pesan Singkat</b> Penduduk</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="http://siempus.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Si-Empus</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://epad.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/Epad.png" class="sidegamar align-self-center img-fluid" style="filter: invert(100%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi</b> Pendapatan</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://pmks.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b style="font-size: 11px;">Kesejahteraan Sosial</b> <br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://sipd.kemendagri.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/kdn.png" class="sidegamar align-self-center img-fluid ms-1 me-2">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi Pemerintahan Daerah</b></span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://rsudcibabat.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>RSUD CIBABAT ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;;" href="http://simantra.ntbprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/mantra.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Manajemen Integrasi</b> Pertukaran Data</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://disdukcapil.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL </b><span>Kota Cimahi</span></span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://webmail.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-2 me-3" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar;"><b>Webmail</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://e-reporting.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>e-Reporting v.2</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="http://silatik.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/silatikk.png" class="sidegamar align-self-center img-fluid ms-2 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi</b> Layanan TIK</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Financial Dashboard</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://www.online-pajak.com/kantor-pajak/kpp-pratama-cimahi" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/wpo.png" class="sidegamar align-self-center img-fluid">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Wajib Pajak Online</b> Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>PBB MON</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://jdihn.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/jdihn.png" class="sidegamar align-self-center img-fluid ">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Jaringan Dokumentasi</b> Informasi Hukum Nasional</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://sid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>SID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://chimasistaker.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/cimasistaker.png"  class="sidegamar align-self-center img-fluid">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Cimahi Sistem</b> Ketenagakerjaan</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://arsipstatis.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>ARSIP STATIS</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://lpse.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/lapse.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Layanan Pengadaan</b> Secara Elektronik</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>SIMKEL</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://data.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/copendata_dark.png" class="sidegamar align-self-center img-fluid" style="filter: invert(60%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Open Data Cimahi</b></span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="http://103.18.117.33/stats/list/id/549/type/Online" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>SIMKESBANG</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://silima.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/silima1.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Dinas Tenaga Kerja</b> Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://ukpbj.depok.go.id/simanda/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>SIMANDA <span style="font-size: 10px;">v.2</span></b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://sirup.lkpp.go.id/sirup/ro/penyedia/kldi/D111" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sirup1.png" class="sidegamar align-self-center img-fluid" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi</b> Rencana Umum Pengadaan</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://smartcity.cimahikota.go.id/cctv" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="sidegamar align-self-center img-fluid ms-1 me-2" >
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>CCTV</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://bkpsdmd.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sikacii_dark.png" class="sidegamar align-self-center img-fluid" style="filter: invert(30%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Sistem Informasi</b>Kinerja Pegawai</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://simrenda.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/simrenda_dark.png" class="sidegamar align-self-center img-fluid ms-1 me-2" style="filter: invert(60%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Perencanaan Daerah</b><br> Kota Cimahi</span>
      </a>
    </div>
    <div class="col-12" id="pict">
      <a style="height: 52px;" href="https://sipkd.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sipkd.png" class="sidegamar align-self-center img-fluid" style="filter: invert(30%);">
        <span class="text-start spansidebar align-self-center flex-fill teksidebar"><b>Informasi Pengelolaan</b> Keuangan Daerah</span>
      </a>
    </div>

    <div class="col-12">
      <h5 class="text-muted my-2 text-center" id="kontakdarurat">Kontak Darurat</h5>
      <div class="border border-secondary rounded mb-5">
        <div class="col-8 text-start py-3 mx-auto" id="pict">
          <div class="row" style="font-size:7pt;">
            <?php foreach ($kontakDarurat as $key => $value) { ?>
              <div class="col-5">
                <span><?= $value['namaKontakdarurat'] ?></span>
              </div>
              <div class="col-2">
                <span>:</span>
              </div>
              <div class="col-5">
                <span><?= $value['isiKontakdarurat'] ?></span>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      </div>

    <!-- <h5 class="text-muted my-4 text-center">Informasi Covid-19</h5>

    <div class="mt-1 text-center">
      <div id="kopi-covid"></div>
      <script>
        var f = document.createElement("iframe");
        f.src = "https://kopi.dev/widget-covid-19/";
        f.width = '100%';
        // f.height = 500;
        f.scrolling = "no";
        f.frameBorder = 0;
        var rootEl = document.getElementById("kopi-covid");
        console.log(rootEl);
        rootEl.appendChild(f);
      </script>
    </div> -->

  </div>

  </nav>
  <button class="close-button invisible" id="close-button2">Close Menu</button>
</div>