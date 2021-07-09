<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="/agenda/edit/<?= $idAgenda ?>/update" method="POST">
    <input type="hidden" values="<?= $idAgenda?>"></input>
        <label for="">Nama Agenda</label>
        <input type="text" name="namaAgenda" value="<?= $namaAgenda; ?>">
        <br>
        <label for="">Deskripsi</label>
        <input type="text" name="deskripsiAgenda" value="<?= $deskripsiAgenda;?>">
        <br>
        <label for="">Mulai dari</label>
        <input type="date" name="datestartAgenda" value="<?= $datestartAgenda;?>">
        <br>
        <label for="">Berakhir</label>
        <input type="date" name="dateendAgenda" value="<?= $dateendAgenda;?>">
        <br>
        <button type="submit">Submit</button>
    </form>
    </fieldset>
</body>
</html>