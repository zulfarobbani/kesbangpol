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
    <form action="/layananin/edit/<?= $idLayanan?>/update" method="POST">
    <input type="hidden" value="<?= $idLayanan?>">
        <label for="">Nama Layanan Intenal : </label>
        <input type="text" name="namaLayanan" value="<?= $namaLayanan?>">
        <br>
        <label for="">Deskripsi : </label>
        <input type="text" name="deskripsiLayanan" value="<?= $deskripsiLayanan?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>