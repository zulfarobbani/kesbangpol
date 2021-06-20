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
    <form action="/layananout/edit/<?= $idLayanan?>/update" method="POST">
    <input type="hidden" value="<?= $idLayanan?>">
        <label for="">Nama Layanan Eksternal : </label>
        <input type="text" name="namaLayanan" value="<?= $namaLayanan?>">
        <br>
        <label for="">URL : </label>
        <input type="text" name="urlLayanan" value="<?= $urlLayanan?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>