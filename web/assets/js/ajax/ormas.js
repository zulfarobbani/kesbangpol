$(document).ready(function () {
  // ======================== Layanan ========================
  var editModal = $("#editModal");
  $("#editModal").on("show.bs.modal", function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    var idOrsospol = button.getAttribute("data-bs-idOrsospol");

    $.ajax({
      type: "post",
      url: "/organisasi-terdaftar-kesbangpol/orsospol/" + idOrsospol + "/get",
    }).done(function (response) {
      var editForm = editModal.find(".formEdit");
      editForm.prop(
        "action",
        "/organisasi-terdaftar-kesbangpol/orsospol/" + idOrsospol + "/update"
      );

      editModal.find(".noAHU").val(response.detail.noAHU);
      editModal.find(".namaOrsosopol").val(response.detail.namaOrsospol);
      editModal.find(".notarisOrsospol").val(response.detail.notarisOrsospol);
      editModal.find(".kemenkumhamOrsospol").val(response.detail.kemenkumhamOrsospol);
      editModal.find(".npwpOrsospol").val(response.detail.npwpOrsospol);
      editModal.find(".rekeningOrsospol").val(response.detail.rekeningOrsospol);
      editModal.find(".bankOrsospol").val(response.detail.bankOrsospol);
      editModal.find(".alamatOrsospol").val(response.detail.alamatOrsospol);
      editModal.find("#provinsi").val(response.detail.idProvinsi);

      var optionKabupaten = "";
      $.ajax({
        url: "/kabupaten/get/" + response.detail.idProvinsi,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKabupaten +=
            '<option '+ (element.idKabupaten == response.detail.idKabupaten ? 'selected' : '') +' value="' +
            element.idKabupaten +
            '">' +
            element.namekab +
            "</option>";
        }
        editModal.find("#kabupaten").html(optionKabupaten);
        editModal.find("#kabupaten").prop("disabled", false);
      });

      var optionKecamatan = "";
      $.ajax({
        url: "/kecamatan/get/" + response.detail.idKabupaten,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKecamatan +=
            '<option '+ (element.idKecamatan == response.detail.idKecamatan ? 'selected' : '') +' value="' +
            element.idKecamatan +
            '">' +
            element.namekec +
            "</option>";
        }
        editModal.find("#kecamatan").html(optionKecamatan);
        editModal.find("#kecamatan").prop("disabled", false);
      });

      var optionKelurahan = "";
      $.ajax({
        url: "/kelurahan/get/" + response.detail.idKecamatan,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKelurahan +=
            '<option '+ (element.idKelurahan == response.detail.idKelurahan ? 'selected' : '') +'  value="' +
            element.idKelurahan +
            '">' +
            element.namekel +
            "</option>";
        }
        editModal.find("#kelurahan").html(optionKelurahan);
        editModal.find("#kelurahan").prop("disabled", false);
      });

      editModal.find(".emailOrsospol").val(response.detail.emailOrsospol);
      editModal.find(".teleponOrsospol").val(response.detail.teleponOrsospol);
      editModal.find(".websiteOrsospol").val(response.detail.websiteOrsospol);
      editModal.find(".instagramSosialmedia").val(response.detail.instagramSosialmedia);
      editModal.find(".facebookSosialmedia").val(response.detail.facebookSosialmedia);
      editModal.find(".youtubeSosialmedia").val(response.detail.youtubeSosialmedia);
      editModal.find(".twitterSosialmedia").val(response.detail.twitterSosialmedia);
      editModal.find(".whatsappSosialmedia").val(response.detail.whatsappSosialmedia);
      editModal.find(".telegramSosialmedia").val(response.detail.telegramSosialmedia);
      
      response.media.forEach(element1 => {
        if (element1.jenisDokumen == 'kemenkumhamOrsospol') {
          editModal.find(".kemenkumhamOrsospolDokumen").prop('src', '/assets/media/'.element1.pathMedia);
        } else if (element1.jenisDokumen == 'npwpOrsospol') {
          // editModal.find(".kemenkumhamOrsospolDokumen").prop('src', '/assets/media/'.element1.pathMedia);
        }
      });
    });
  });
  
  var detailModal = $("#detailModal");
  $("#detailModal").on("show.bs.modal", function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    var idOrsospol = button.getAttribute("data-bs-idOrsospol");

    $.ajax({
      type: "post",
      url: "/organisasi-terdaftar-kesbangpol/orsospol/" + idOrsospol + "/get",
    }).done(function (response) {
      detailModal.find(".noAHU").val(response.detail.noAHU);
      detailModal.find(".namaOrsosopol").val(response.detail.namaOrsospol);
      detailModal.find(".notarisOrsospol").val(response.detail.notarisOrsospol);
      detailModal.find(".kemenkumhamOrsospol").val(response.detail.kemenkumhamOrsospol);
      detailModal.find(".npwpOrsospol").val(response.detail.npwpOrsospol);
      detailModal.find(".rekeningOrsospol").val(response.detail.rekeningOrsospol);
      detailModal.find(".bankOrsospol").val(response.detail.bankOrsospol);
      detailModal.find(".alamatOrsospol").val(response.detail.alamatOrsospol);
      detailModal.find("#provinsi").val(response.detail.idProvinsi);

      var optionKabupaten = "";
      $.ajax({
        url: "/kabupaten/get/" + response.detail.idProvinsi,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKabupaten +=
            '<option '+ (element.idKabupaten == response.detail.idKabupaten ? 'selected' : '') +' value="' +
            element.idKabupaten +
            '">' +
            element.namekab +
            "</option>";
        }
        detailModal.find("#kabupaten").html(optionKabupaten);
      });

      var optionKecamatan = "";
      $.ajax({
        url: "/kecamatan/get/" + response.detail.idKabupaten,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKecamatan +=
            '<option '+ (element.idKecamatan == response.detail.idKecamatan ? 'selected' : '') +' value="' +
            element.idKecamatan +
            '">' +
            element.namekec +
            "</option>";
        }
        detailModal.find("#kecamatan").html(optionKecamatan);
      });

      var optionKelurahan = "";
      $.ajax({
        url: "/kelurahan/get/" + response.detail.idKecamatan,
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKelurahan +=
            '<option '+ (element.idKelurahan == response.detail.idKelurahan ? 'selected' : '') +'  value="' +
            element.idKelurahan +
            '">' +
            element.namekel +
            "</option>";
        }
        detailModal.find("#kelurahan").html(optionKelurahan);
      });

      detailModal.find(".emailOrsospol").val(response.detail.emailOrsospol);
      detailModal.find(".teleponOrsospol").val(response.detail.teleponOrsospol);
      detailModal.find(".websiteOrsospol").val(response.detail.websiteOrsospol);
      detailModal.find(".instagramSosialmedia").val(response.detail.instagramSosialmedia);
      detailModal.find(".facebookSosialmedia").val(response.detail.facebookSosialmedia);
      detailModal.find(".youtubeSosialmedia").val(response.detail.youtubeSosialmedia);
      detailModal.find(".twitterSosialmedia").val(response.detail.twitterSosialmedia);
      detailModal.find(".whatsappSosialmedia").val(response.detail.whatsappSosialmedia);
      detailModal.find(".telegramSosialmedia").val(response.detail.telegramSosialmedia);

      response.media.forEach(element1 => {
        if (element1.jenisDokumen == 'kemenkumhamOrsospol') {
          detailModal.find(".kemenkumhamOrsospolDokumen").prop('src', '/assets/media/'+element1.pathMedia);
        } else if (element1.jenisDokumen == 'npwpOrsospol') {
          detailModal.find(".npwpOrsospolDokumen").prop('src', '/assets/media/'+element1.pathMedia);
        }
      });
    });
  });

  $(document).on('click', '.btncloseDokumen', function() {
    var modal1 = $(this).parents().find('#exampleModal1');
    modal1.modal('hide');
    var modal2 = $(this).parents().find('#exampleModal2');
    modal2.modal('hide');
  })

  var hapusModal = document.getElementById("hapusModal");
  hapusModal.addEventListener("show.bs.modal", function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    var idBerita = button.getAttribute("data-bs-idBerita");
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var formHapusunduhan = hapusModal.querySelector(".form-hapus");
    formHapusunduhan.setAttribute(
      "action",
      "/informasi-kesbangpol/berita/" + idBerita + "/delete"
    );
  });

  $(".btn-hapus").on("click", function () {
    $(".form-hapus").submit();
  });
  // ======================== END Layanan ========================

  var optionKabupaten = "";
  $("#provinsi").on("change", function () {
    optionKabupaten = '<option value="">Pilih Kabupaten</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kabupaten/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKabupaten +=
            '<option value="' +
            element.idKabupaten +
            '">' +
            element.namekab +
            "</option>";
        }
        $("#kabupaten").html(optionKabupaten);
        $("#kabupaten").prop("disabled", false);
      });
    }
  });

  var optionKecamatan = "";
  $("#kabupaten").on("change", function () {
    optionKecamatan = '<option value="">Pilih Kecamatan</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kecamatan/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKecamatan +=
            '<option value="' +
            element.idKecamatan +
            '">' +
            element.namekec +
            "</option>";
        }
        $("#kecamatan").html(optionKecamatan);
        $("#kecamatan").prop("disabled", false);
      });
    }
  });

  var optionKelurahan = "";
  $("#kecamatan").on("change", function () {
    optionKelurahan = '<option value="">Pilih Kelurahan</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kelurahan/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKelurahan +=
            '<option value="' +
            element.idKelurahan +
            '">' +
            element.namekel +
            "</option>";
        }
        $("#kelurahan").html(optionKelurahan);
        $("#kelurahan").prop("disabled", false);
      });
    }
  });

  var hapusModal = document.getElementById("hapusModal");
  hapusModal.addEventListener("show.bs.modal", function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    var idOrsospol = button.getAttribute("data-bs-idOrsospol");
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var formHapusunduhan = hapusModal.querySelector(".form-hapus");
    formHapusunduhan.setAttribute(
      "action",
      "/organisasi-terdaftar-kesbangpol/orsospol/" + idOrsospol + "/delete",
    );
  });

  $(".btn-hapus").on("click", function () {
    $(".form-hapus").submit();
  });
  // ======================== END Layanan ========================

  var optionKabupaten = "";
  $("#provinsi").on("change", function () {
    optionKabupaten = '<option value="">Pilih Kabupaten</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kabupaten/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKabupaten +=
            '<option value="' +
            element.idKabupaten +
            '">' +
            element.namekab +
            "</option>";
        }
        $("#kabupaten").html(optionKabupaten);
        $("#kabupaten").prop("disabled", false);
      });
    }
  });

  var optionKecamatan = "";
  $("#kabupaten").on("change", function () {
    optionKecamatan = '<option value="">Pilih Kecamatan</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kecamatan/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKecamatan +=
            '<option value="' +
            element.idKecamatan +
            '">' +
            element.namekec +
            "</option>";
        }
        $("#kecamatan").html(optionKecamatan);
        $("#kecamatan").prop("disabled", false);
      });
    }
  });

  var optionKelurahan = "";
  $("#kecamatan").on("change", function () {
    optionKelurahan = '<option value="">Pilih Kelurahan</option>';
    if ($(this).val() != "") {
      $.ajax({
        url: "/kelurahan/get/" + $(this).val(),
        method: "get",
      }).done(function (data) {
        for (let index = 0; index < data.length; index++) {
          const element = data[index];
          optionKelurahan +=
            '<option value="' +
            element.idKelurahan +
            '">' +
            element.namekel +
            "</option>";
        }
        $("#kelurahan").html(optionKelurahan);
        $("#kelurahan").prop("disabled", false);
      });
    }
  });

});
