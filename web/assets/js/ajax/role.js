$(document).on("click", ".btnEdit", function () {
  var id = $(this).attr("data-bs-idRole");
  var modal = $("#ModalUbahUser");
  $.ajax({
    type: "get",
    url: "/roles/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaRole").val(data.detail.namaRole);
    modal.find(".form-check-input").prop("checked", false);
    data.permissions.forEach(element => {
      modal.find("."+element.idPermission).prop("checked", true);
    });
    modal
      .find(".formEdit")
      .prop("action", "/roles/" + data.detail.idRole + "/update");
  });
});

$(document).on("click", ".btnDetail", function () {
  var id = $(this).attr("data-bs-idRole");
  var modal = $("#ModalRincianUser");
  $.ajax({
    type: "get",
    url: "/roles/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaRole").val(data.detail.namaRole);
  });
});

$(document).on("click", ".btnHapus", function () {
  var id = $(this).attr("data-bs-idRole");
  var modal = $("#ModalHapusUser");
  $.ajax({
    type: "get",
    url: "/roles/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaRole").val(data.detail.namaRole);
    modal
      .find(".formHapus")
      .prop("action", "/roles/" + data.detail.idRole + "/delete");
  });
});

$(document).on("click", ".btnActionHapus", function () {
  $(this).parent().find(".formHapus").submit();
});