$(document).on("click", ".btnEdit", function () {
  var id = $(this).attr("data-bs-idPermission");
  var modal = $("#ModalUbahUser");
  $.ajax({
    type: "get",
    url: "/permissions/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaPermission").val(data.detail.namaPermission);
    modal
      .find(".formEdit")
      .prop("action", "/permissions/" + data.detail.idPermission + "/update");
  });
});

$(document).on("click", ".btnDetail", function () {
  var id = $(this).attr("data-bs-idPermission");
  var modal = $("#ModalRincianUser");
  $.ajax({
    type: "get",
    url: "/permissions/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaPermission").val(data.detail.namaPermission);
  });
});

$(document).on("click", ".btnHapus", function () {
  var id = $(this).attr("data-bs-idPermission");
  var modal = $("#ModalHapusUser");
  $.ajax({
    type: "get",
    url: "/permissions/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaPermission").val(data.detail.namaPermission);
    modal
      .find(".formHapus")
      .prop("action", "/permissions/" + data.detail.idPermission + "/delete");
  });
});

$(document).on("click", ".btnActionHapus", function () {
  $(this).parent().find(".formHapus").submit();
});