<style type="text/css">
  #pict {
    filter: grayscale(100%);

  }
</style>
<div class="col py-3 pe-4 d-none d-md-block">
  <?php if ($idRole != null) { ?>
    <div class="row d-flex align-items-center">
      <h5 class="text-muted mb-3">Selamat Datang</h5>
      <div class="col-2">
        <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="50px" height="50px">
      </div>
      <div class="col-6">
        <p class="text-muted m-0">
          <span class="fw-bold"><?= $idRole == '9asdkqhjwew' ? 'Admin' : $namaOrsospol ?></span><br>
          <?php if ($idRole != '9asdkqhjwew') { ?>
            <span><?= $noAHU ?></span>
          <?php } ?>
          <!-- <span>No. AHU/No. Register</span> -->
        </p>
      </div>
      <div class="col-4">
        <a href="/logout" class="btn btn-outline-danger" style="color:navy;"><i class="fas fa-door-open"></i>&nbsp;&nbsp;&nbsp;Keluar</a>
      </div>
    </div>
  <?php } ?>

  <div class="row">
    <h5 class="text-muted my-4 text-center" id="layanankesbangpol">Layanan<br><b>KESBANGPOL</b></h5> 
    <div class="col-6">
      <a href="/layanan/pendataan" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">person_add_alt_1</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Pendataan Orsospol</span>
      </a>
    </div>
    <div class="col-6">
      <a href="/layanan/permohonan-hibah" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">volunteer_activism</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Permohonan Hibah</span>
      </a>
    </div>
    <div class="col-6">
      <a href="/layanan/permohonan-penelitian" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined align-middle">plagiarism</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Permohonan Penelitian</span>
      </a>
    </div>
    <div class="col-6">
      <a href="/layanan/pendataan" class="btn btn-sm btn-outline-secondary d-flex mb-2 py-2">
        <span class="material-icons-outlined">link</span>&nbsp;&nbsp;
        <span style="font-size:12px;">Layanan Lainnya</span>
      </a>
    </div>

    <h5 class="text-muted my-4 text-center" id="layananpublik">Tautan Layanan Publik<br><b>Kota Cimahi</b></h5>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="http://sipt.kemendag.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 30%;" src="/assets/image/sipt.png" class="" height="20px">
        <span class="text-start" style="font-size:12px;padding-left: 70px;"><b>Sistem Informasi </b><br>Perizinan Terpadu</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://bphtb.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>BPHTB ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://bpbj.sukabumikota.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 25%;" src="https://bpbj.sukabumikota.go.id/assets/images/frontend/link/pjl7jtntsv.png" class="" height="25px">
        <span class="text-start" style="font-size:9px;padding-left: 70px;"><b>Tim Evaluasi dan</b><br>Pengawasan Realisasi Anggaran</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://uptpasar.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>UPT PASAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="http://www.simbah.co.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 25%;" src="/assets/image/simbah.png" class="" height="25px">
        <span class="text-start" style="font-size:9px;padding-left: 70px;"><b>Sistem Informasi</b><br>Pengelolaan Bank Sampah</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://ppid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>PPID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://library.cimahikota.go.id" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://library.cimahikota.go.id/uploaded_files/aplikasi/inlislite.png" class="" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 70px;"><b>Aplikasi Perpustakaan</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://sip.cimahikota.go.id/be/index" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>eSIP</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://pesduk.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 35%;" src="/assets/image/pesduk_dark.png" class="" height="15px" style="filter: invert(100%);width:100%;">
        <span class="text-start" style="font-size:12px;padding-left: 70px;"><b>Pesan Singkat</b><br>Penduduk</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="http://siempus.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>Si-Empus</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://epad.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="/assets/image/Epad.png" class="" height="30px" style="filter: invert(100%);">
        <span class="text-start" style="font-size:12px;padding-left: 70px;"><b>Sistem Informasi</b><br>Pendapatan</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://pmks.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b style="font-size: 11px;">Kesejahteraan Sosial</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://sipd.kemendagri.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 10%;" src="/assets/image/kdn.png" class="ms-1 me-2" height="40px">
        <span class="text-start" style="font-size:10px;padding-left: 70px;padding-top: 5px"><b>Sistem Informasi<br>Pemerintahan Daerah</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://rsudcibabat.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:11px;padding-left: 42px;"><b>RSUD CIBABAT ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative;" href="http://simantra.ntbprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 35%;" src="/assets/image/mantra.png" class="ms-1 me-2" height="15px">
        <span class="text-start" style="font-size:9px;padding-left: 70px;"><b>Aplikasi Manajemen Integrasi</b><br>dan Pertukaran Data</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://disdukcapil.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="line-height: 1;padding-left: 42px;"><b style="font-size: 9px;">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</b><br><span style="font-size: 12px;">Kota Cimahi</span></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://webmail.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-2 me-3" height="30px">
        <span class="text-start" style="font-size: 12px;padding-left: 70px;"><img src="/assets/image/webmaill.png" height="15px" width="60px"><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://e-reporting.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>e-Reporting v.2</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="http://silatik.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 10%;" src="/assets/image/silatikk.png" class="ms-2 me-2" height="40px">
        <span class="text-start w-100" style="font-size: 15px;padding-left: 70px;padding-top: 10px;"><b>SILATIK</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>Financial Dashboard</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://www.online-pajak.com/kantor-pajak/kpp-pratama-cimahi" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 10%;" src="/assets/image/wpo.png" class="" height="40px" width="50px">
        <span class="text-start pt-1 w-100" style="font-size:10px;padding-left: 70px;"><b>Wajib Pajak Online</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>PBB MON</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://jdihn.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 35%;" src="/assets/image/jdihn.png" class="ms-1" height="15px">
        <span class="text-start" style="font-size:9px;padding-left: 70px;padding-top:5px;"><b>Jaringan Dokumentasi</b><br>Informasi Hukum Nasional</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://sid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>SID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://chimasistaker.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 10%;padding-top:10px;" src="/assets/image/cimasistaker.png" height="25px">
        <span class="text-start" style="font-size:9px;padding-left: 70px;padding-top: 5px;"><b>Cimahi Sistem Ketenagakerjaan</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://arsipstatis.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>ARSIP STATIS</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://lpse.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 30%;" src="/assets/image/lapse.png" class="ms-2" height="20px">
        <span class="text-start" style="font-size:10px;padding-left: 70px;padding-top: 5px;"><b>Layanan Pengadaan</b><br>Secara Elektronik</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>SIMKEL</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://data.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="/assets/image/copendata_dark.png" class="" height="30px" style="filter: invert(60%);">
        <span class="text-start" style="font-size:12px;padding-left: 70px;padding-top: 10px;"><b>Open Data Cimahi</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="http://103.18.117.33/stats/list/id/549/type/Online" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>SIMKESBANG</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://silima.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 10%;" src="/assets/image/silima1.png" class="" height="40px">
        <img src="/assets/image/silima2.png" class="" height="40px" style="padding-left: 50px;">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://ukpbj.depok.go.id/simanda/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>SIMANDA <span style="font-size: 10px;">v.2</span></b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://sirup.lkpp.go.id/sirup/ro/penyedia/kldi/D111" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 35%;" src="/assets/image/sirup1.png" class="" height="15px">
        <span class="text-start" style="font-size:10px;padding-left: 70px;"><b>Sistem Informasi</b><br>Rencana Umum Pengadaan</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://smartcity.cimahikota.go.id/cctv" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;padding-left: 42px;"><b>CCTV</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://bkpsdmd.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="/assets/image/sikacii_dark.png" class="" height="25px" style="filter: invert(30%);">
        <span class="text-start" style="font-size:11px;padding-left: 70px;padding-top:5px;"><b>Sistem Informasi</b><br>Kinerja Pegawai</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://simrenda.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 20%;" src="/assets/image/simrenda_dark.png" class="" height="35px" style="filter: invert(60%);">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a style="height: 52px;box-sizing: border-box;padding-left: 7px;position:relative" href="https://sipkd.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img style="position: absolute;top: 30%;" src="/assets/image/sipkd.png" class="" height="20px" style="filter: invert(30%);">
        <span class="text-start" style="font-size:9px;padding-left: 70px;"><b>Sistem Informasi</b><br>Pengelolaan Keuangan Daerah</span>
      </a>
    </div>

    <div class="p-3">
      <h5 class="text-muted my-4 text-center" id="kontakdarurat">Kontak Darurat</h5>
      <div class="border border-secondary rounded">
        <div class="col-8 text-start py-3 mx-auto" id="pict">
          <div class="row">
            <?php foreach ($kontakDarurat as $key => $value) { ?>
              <div class="col-6">
                <span><?= $value['namaKontakdarurat'] ?></span>
              </div>
              <div class="col-2">
                <span>:</span>
              </div>
              <div class="col-3">
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
</div>