$(document).ready(function () {
  $(".tambahDetail").on("click", function () {
    var container = $(this).parent();
    var lastElementId = container
      .find(".transaksiProduk > .listProduk:last")
      .attr("id");
    var lastId = lastElementId.split("_")[1];
    var numberNextId = ++lastId;
    var nextId = "listproduk_" + numberNextId;

    var tampilanHtml =
      '<div class="listProduk" id="' +
      nextId +
      '"><div class="row"><div class="col"><div class="row"><div class="col-6 mb-1"><label for="Foto"></label><input type="file" class="form-control fotoDetail" name="fotoDetail[]"><span>Maksimal ukuran file : <b>1.5 MB</b></span></div><div class="col-12 mb-3"><label for="">Nama</label><input type="text" class="form-control namaDetail" name="namaDetail[]"></div><div class="col-12 mb-3"><label for="">Deskripsi</label><textarea id="" class="form-control deskripsiDetail" name="deskripsiDetail[]"></textarea></div><hr></div></div><div class="col-1"><button type="button" class="btn btn-danger hapusList" value="' +
      numberNextId +
      '">Hapus</button></div></div></div>';

    container.find(".transaksiProduk").append(tampilanHtml);
  });

  $(document).on("click", ".hapusList", function () {
    var elementId = $(this).val();
    var listProdukId = "#listproduk_" + elementId;
    if ($(listProdukId).parents("#modaltambahproduct").length == 0) {
      var idGallerydetail = $(listProdukId)
        .parents(".formDetail")
        .find(".idGallerydetail");
      var idDetail = $(listProdukId).find(".idDetail").val();
      var new_groupId = [];
      idGallerydetail
        .val()
        .split(",")
        .forEach((element) => {
          if (idDetail != element) {
            new_groupId.push(element);
          }
        });
      idGallerydetail.val(new_groupId.toString());
    }

    $(listProdukId).remove();
  });

  $(document).on("click", ".btnSumbit", function () {
    var container = $(this).parent().parent();
    container.find(".formDetail").submit();
  });
});

$(document).on("click", ".btnEdit", function () {
  var id = $(this).attr("data-bs-id");
  var modal = $("#modalubahproduct");
  $.ajax({
    type: "get",
    url: "/informasi-kesbangpol/gallery/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaGallery").val(data.data.namaGallery);
    modal
      .find(".coverfotoPortfolio")
      .prop("src", "/assets/media/" + data.data.pathMedia);
    modal.find(".deskripsiGallery").html(data.data.deskripsiGallery);

    modal.find(".formDetail").prop("action", "/informasi-kesbangpol/gallery/" + id + "/update");

    if (data.detail.length > 0) {
      var tampilanHtml = "";
      var indexDetail = 0;
      var idGallerydetail = [];
      for (let index1 = 0; index1 < data.detail.length; index1++) {
        const element1 = data.detail[index1];
        var nextId = "listproduk_" + (index1 + 1);
        idGallerydetail.push(element1.idGallerydetail);

        var btnDelete =
          '<button type="button" class="btn btn-danger hapusList" value="' +
          (index1 + 1) +
          '">Hapus</button><br><br>';

        tampilanHtml +=
          '<div class="listProduk" id="' +
          nextId +
          '"><input type="hidden" class="idDetail" value="' +
          element1.idGallerydetail +
          '"></input><div class="row"><div class="col"><div class="row"><div class="col-4 mb-1"><img class="img-fluid img-thumbnail fotoDetail" src="/assets/media/' +
          element1.pathMedia +
          '"></img><label for="Foto"></label><input type="file" class="form-control fotoDetail" name="fotoDetail_' +
          element1.idGallerydetail +
          '"><span>Maksimal ukuran file : <b>1.5 MB</b></span></div><div class="col-6 mb-1">' +
          (indexDetail > 0 ? btnDelete : "") +
          '<div class="col-12 mb-3"><label for="">Nama</label><input type="text" class="form-control namaDetail" name="namaDetail_'+element1.idGallerydetail+'" value="'+element1.namaGallerydetail+'"></div><div class="col-12 mb-3"><label for="">Deskripsi</label><textarea id="" class="form-control deskripsiDetail" name="deskripsiDetail_' +
          element1.idGallerydetail +
          '">' +
          element1.deskripsiGallerydetail +
          "</textarea></div></div></div></div></div><hr></div>";
        indexDetail++;
      }

      modal.find(".idGallerydetail").val(idGallerydetail.toString());
      modal.find(".transaksiProduk").html(tampilanHtml);
    } else {
      var nextId = "listproduk_1";
      var tampilanHtml =
        '<div class="listProduk" id="' +
        nextId +
        '"><div class="row"><div class="col"><div class="row"><div class="col-6 mb-1"><label for="Foto"></label><input type="file" class="form-control fotoDetail" name="fotoDetail[]"></div><div class="col-6 mb-1"><label for="">Judul</label><input type="text" class="form-control judulDetail" name="judulDetail[]"></div><div class="col-12 mb-3"><label for="">Deskripsi</label><textarea id="" class="form-control deskripsiDetail" name="deskripsiDetail[]"></textarea></div><hr></div></div></div></div>';

      modal.find(".transaksiProduk").html(tampilanHtml);
    }
  });
});

$(document).on("click", ".btnHapus", function () {
  var id = $(this).attr("data-bs-id");
  var modal = $("#modalhapusproduct");

  modal.find(".formDetail").prop("action", "/informasi-kesbangpol/gallery/" + id + "/delete");
});
$(document).on("click", ".btnActionHapus", function () {
  $(this).parent().find(".formDetail").submit();
});
