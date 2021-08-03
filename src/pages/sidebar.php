<style type="text/css">
  #pict {
    filter: grayscale(100%);

  }
</style>
<div class="col py-3 pe-4">
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
    <h5 class="text-muted my-4 text-center">Layanan<br>KESBANGPOL</h5>
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

    <h5 class="text-muted my-4 text-center">Tautan Layanan Publik<br>Kota Cimahi</h5>
    <div class="col-6" id="pict">
      <a href="http://sipt.kemendag.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="http://sipt.kemendag.go.id/assets/fend/img/logo.png" class="mx-auto" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://bphtb.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>BPHTB ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://bpbj.sukabumikota.go.id" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bpbj.sukabumikota.go.id/assets/images/frontend/link/pjl7jtntsv.png" class="mx-auto" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://uptpasar.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>UPT PASAR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="http://www.simbah.co.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/simbah.png" class="mx-auto" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://ppid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>PPID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://library.cimahikota.go.id" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://library.cimahikota.go.id/uploaded_files/aplikasi/inlislite.png" class="mx-auto" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://sip.cimahikota.go.id/be/index" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start"  style="font-size:12px;"><b>eSIP</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://pesduk.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/pesduk.png" class="mx-auto" height="30px" style="filter: invert(100%);width:100%;">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="http://siempus.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>Si-Empus</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://epad.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/Epad.png" class="mx-auto" height="40px" style="filter: invert(100%);">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://pmks.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b style="font-size: 11px;">Kesejahteraan Sosial</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://sipd.kemendagri.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/kdn.png" class="ms-1 me-2" height="40px">
        <span class="text-start" style="font-size:12px;"><b>Sistem Informasi<br>Pemerintahan Daerah</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://rsudcibabat.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>RSUD CIBABAT ONLINE</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="http://simantra.ntbprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/mantra.png" class="ms-1 me-2" height="30px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://disdukcapil.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style=" line-height: 1;"><b style="font-size: 9px;">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</b><br><span style="font-size: 12px;">Kota Cimahi</span></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://webmail.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-2 me-3" height="30px">
        <span class="text-start" style="font-size: 12px;"><img src="/assets/image/webmaill.png" height="15px" width="60px">Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://e-reporting.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>e-Reporting v.2</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="http://silatik.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/silatikk.png" class="ms-2 me-2" height="40px">
        <span class="text-start align-middle" style="font-size: 15px;"><b>SILATIK</b></span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>Financial Dashboard</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://www.online-pajak.com/kantor-pajak/kpp-pratama-cimahi" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/wpo.png" class="mx-auto" height="40px" width="50px">
        <span class="text-start pt-1" style="font-size:10px;"><b>Wajib Pajak Online</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>PBB MON</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://jdihn.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/jdihn.png" class="ms-1" height="40px" width="110px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://sid.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>SID</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://chimasistaker.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/cimasistaker.png" height="40px" width="120px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://arsipstatis.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>ARSIP STATIS</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://lpse.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/lapse.png" class="ms-2" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="#" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>SIMKEL</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://data.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/copendata.png" class="mx-auto" height="40px" style="filter: invert(60%);">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="http://103.18.117.33/stats/list/id/549/type/Online" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>SIMKESBANG</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://silima.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/silima1.png" class="mx-auto" height="40px">
        <img src="/assets/image/silima2.png" class="mx-auto" height="40px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://ukpbj.depok.go.id/simanda/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>SIMANDA <span style="font-size: 10px;">v.2</span></b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://sirup.lkpp.go.id/sirup/ro/penyedia/kldi/D111" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sirup1.png" class="mx-auto" height="30px" width="110px">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://smartcity.cimahikota.go.id/cctv" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="https://bappenda.cimahikota.go.id/logo/cimahi.gif" class="ms-1 me-2" height="30px">
        <span class="text-start" style="font-size:12px;"><b>CCTV</b><br>Kota Cimahi</span>
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://bkpsdmd.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sikacii.png" class="mx-auto" height="40px" style="filter: invert(30%);">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://simrenda.cimahikota.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/simrenda.png" class="mx-auto" height="35px" style="filter: invert(60%);">
      </a>
    </div>
    <div class="col-6" id="pict">
      <a href="https://sipkd.jabarprov.go.id/" target="_blank" class="btn btn-sm btn-outline-secondary d-flex mb-2">
        <img src="/assets/image/sipkd.png" class="mx-auto" height="40px" style="filter: invert(30%);">
      </a>
    </div>

    <div class="p-3">
      <div class="border border-secondary rounded">
        <h5 class="mt-3 text-center">Kontak Darurat</h5>
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

    <div class="mt-4 text-center">
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
    </div>

  </div>
</div>