<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<fieldset>
    <form action="/agenda/store" method="POST">
    <input type="hidden" values="<?= $id_test?>"></input>
    <div class="mb-3 col-3">
        <label class="form-label" for="">Nama Agenda</label>
        <input class="form-control" type="text" name="namaAgenda">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label" for="">Deskripsi</label>
        <input class="form-control" type="text" name="deskripsiAgenda">
    </div>
    <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="">Mulai dari</label>
            <input class="form-control" type="date" name="datestartAgenda">
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="">Berakhir</label>
            <input class="form-control" type="date" name="dateendAgenda">
        </div>
    </div>
        <button type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>