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
    <form action="/jabatan/edit/<?= $idJabatan ?>/update" method="POST">
    <input type="hidden" values="<?= $idJabatan?>"></input>
        <label for="">Nama Jabatan : </label>
        <input type="text" name="namaJabatan" value="<?= $namaJabatan; ?>">
        <br>
        <label for="">Hirarki : </label>
        <input type="text" name="hirarkiJabatan" value="<?= $hirarkiJabatan;?>">
        <br>
        <button type="submit">Submit</button>
    </form>
    </fieldset>
</body>
</html>