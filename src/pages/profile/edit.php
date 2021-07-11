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
    <form action="/profile/edit/<?= $idProfile ?>/update" method="POST">
    <input type="hidden" values="<?= $id_test?>"></input>
        <label for="">Nama Profile : </label>
        <input type="text" name="namaProfile" value="<?= $namaProfile ?>">
        <br>
        <label for="">Deskripsi : </label>
        <input name="deskripsiProfile" id="desk" cols="20" rows="2" value="<?= $deskripsiProfile ?>">
        <br>
        <label for="">Penulis id : </label>
        <input type="text" name="idRelation" value="<?= $idRelation ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>