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
    <form action="/jenisorsospol/edit/<?= $idJenisorsospol?>/update" method="POST">
    <input type="hidden" values="<?= $idJenisorsospol?>"></input>
        <label for="">Nama Jenisorsospol : </label>
        <input type="text" name="namaJenisorsospol" value="<?= $namaJenisorsospol?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>