<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"
        integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<body style="background-color : #e9ecef; color: navy;">
<?php include(__DIR__ . '/../../mobilemenu.php') ?>
<?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__.'/../../navbar.php' )?>
      <div class="container-fluid">   
      <div class="row">  
        <div class="col-md-8 mb-3">
        <div class="card rounded-3 mt-5 px-3">
        <div class="card-body">
          <?php include(__DIR__.'/../../navtabsinformasi.php' )?>
          <!-- START CODE -->
          <h4 class="mb-3">Agenda</h4>
          <div id="agenda" class="col-centered"></div>
        </div>
        </div>
          </div>
        <?php include(__DIR__.'/../../sidebar.php' )?>
      </div>
      
  </div>
  <?php include(__DIR__.'/../../footer.php' )?>
    <!-- Modal Create Event-->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                <form class="form-horizontal" method="POST" action="/informasi/agenda/store">
                <?php } ?>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="title" class="col-sm-6 control-label">Nama Agenda</label>
                                <div class="col-sm">
                                    <input type="text" name="namaAgenda" class="form-control" id="title" placeholder="Nama Agenda" <?= $aliasRole == 'pegawai' || $aliasRole == 'kesbangpol' ? '' : 'disabled' ?>>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="deskripsi" class="col-sm-6 control-label">Deskripsi Agenda</label>
                                <div class="col-sm">
                                    <textarea name="deskripsiAgenda" class="form-control" id="deskripsi" placeholder="Deskripsi Agenda" rows="4" <?= $aliasRole == 'pegawai' || $aliasRole == 'kesbangpol' ? '' : 'disabled' ?>></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="start" class="col-sm-6 control-label">Start date</label>
                                <div class="col-sm">
                                    <input type="text" name="datestartAgenda" class="form-control" id="start" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group">
                                <label for="end" class="col-sm-6 control-label">End date</label>
                                <div class="col-sm">
                                    <input type="text" name="dateendAgenda" class="form-control" id="end" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <?php } ?>
                    </div>
                <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Modal Edit Event-->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                <form class="form-horizontal" id="formEdit" method="POST">
                <?php } ?>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><?= $aliasRole == 'pegawai' || $aliasRole == 'kesbangpol' ? 'Edit Event' : 'Detail Event' ?></h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="form-group">
                                <label for="title" class="col-sm-6 control-label">Nama Agenda</label>
                                <div class="col-sm">
                                    <input type="text" name="namaAgenda" class="form-control" id="title" placeholder="Nama Agenda" <?= $aliasRole == 'pegawai' || $aliasRole == 'kesbangpol' ? '' : 'disabled' ?>>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="deskripsi" class="col-sm-6 control-label">Deskripsi Agenda</label>
                                <div class="col-sm">
                                    <textarea name="deskripsiAgenda" class="form-control" id="deskripsi" placeholder="Deskripsi Agenda" rows="4" <?= $aliasRole == 'pegawai' || $aliasRole == 'kesbangpol' ? '' : 'disabled' ?>></textarea>
                                </div>
                            </div>
                        </div>
                        <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-offset-6 col-sm">
                                    <div class="checkbox">
                                        <label class="text-danger"><input type="checkbox" name="delete" value="delete"> Delete
                                            event</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <?php } ?>
                    </div>
                <?php if ($aliasRole == 'pegawai' || $aliasRole == 'kesbangpol') { ?>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"
        integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {

            $("#agenda").fullCalendar({
                header: {
                    left: 'today, prev, next, title',
                    center : '',
                    right : ''
                },
                defaultDate: '<?= date("Y-m-d")?>',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                showNonCurrentDates: false,
                select: function (start, end) {
                    var dateEnd = new Date(moment(end).format('YYYY-MM-DD'));

                    dateEnd.setDate(dateEnd.getDate() - 1);
                    

                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
                    $('#ModalAdd #end').val(moment(dateEnd).format('YYYY-MM-DD'));
                    $('#ModalAdd').modal('show');
                },
                events : [
                    <?php foreach($datas as $key => $value) { ?>
                        {
                            id        : "<?= $value['idAgenda']?>",
                            title     : "<?= $value['namaAgenda']?>",
                            deskripsi : "<?= $value['deskripsiAgenda']?>",
                            start     : "<?= $value['datestartAgenda']?>",
                            end       : "<?= $value['dateendAgenda']?>"
                        },
                    <?php } ?>
                ],
                eventRender: function (event, element) {
                    element.bind('click', function () {
                        $('#ModalEdit #title').val(event.title);
                        $('#ModalEdit #deskripsi').val(event.deskripsi);
                        $('#ModalEdit #formEdit').attr('action', '/informasi/agenda/edit/'+ event.id +'/update');
                        $('#ModalEdit').modal('show');
                    });
                }
            });

            $('#agenda').find('.fc-today-button').html('Today')
            $('#agenda').find('.fc-today').css('background-color', 'red')
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>