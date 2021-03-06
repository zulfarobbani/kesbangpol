$(document).on("click", ".btnEdit", function () {
  var id = $(this).attr("data-bs-idUser");
  var modal = $("#ModalUbahUser");
  $.ajax({
    type: "get",
    url: "/users/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaUser").val(data.detail.namaUser);
    modal.find(".emailUser").val(data.detail.emailUser);
    modal.find(".usernameUser").val(data.detail.usernameUser);
    modal.find(".idRole").val(data.detail.idRole);
    modal
      .find(".fotoUser")
      .prop("src", "/assets/media/" + data.detail.pathMedia);
    modal
      .find(".formEdit")
      .prop("action", "/users/" + data.detail.idUser + "/update");
  });
});

$(document).on("click", ".btnDetail", function () {
  var id = $(this).attr("data-bs-idUser");
  var modal = $("#ModalRincianUser");
  $.ajax({
    type: "get",
    url: "/users/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaUser").val(data.detail.namaUser);
    modal.find(".emailUser").val(data.detail.emailUser);
    modal.find(".usernameUser").val(data.detail.usernameUser);
    modal.find(".idRole").val(data.detail.idRole);
    modal
      .find(".fotoUser")
      .prop("src", "/assets/media/" + data.detail.pathMedia);
  });
});

$(document).on("click", ".btnHapus", function () {
  var id = $(this).attr("data-bs-idUser");
  var modal = $("#ModalHapusUser");
  $.ajax({
    type: "get",
    url: "/users/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaUser").val(data.detail.namaUser);
    modal.find(".emailUser").val(data.detail.emailUser);
    modal.find(".usernameUser").val(data.detail.usernameUser);
    modal.find(".idRole").val(data.detail.idRole);
    modal
      .find(".fotoUser")
      .prop("src", "/assets/media/" + data.detail.pathMedia);
    modal
      .find(".formHapus")
      .prop("action", "/users/" + data.detail.idUser + "/delete");
  });
});

$(document).on("click", ".btnActionHapus", function () {
  $(this).parent().find(".formHapus").submit();
});

$(document).on("click", ".btnResetPassword", function () {
  var id = $(this).attr("data-bs-idUser");
  var modal = $("#ModalResetPassword");
  $.ajax({
    type: "get",
    url: "/users/" + id + "/get",
  }).done(function (data) {
    modal.find(".namaUser").html(data.detail.namaUser);
    modal
      .find(".fotoUser")
      .prop("src", "/assets/media/" + data.detail.pathMedia);
    modal
      .find(".formResetPassword")
      .prop("action", "/users/" + data.detail.idUser + "/reset-password");
  });
});

$(document).on("click", ".btnActionResetPassword", function () {
  $(this).parent().find(".formResetPassword").submit();
});
