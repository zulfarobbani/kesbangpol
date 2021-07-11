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
    <form action="/kelurahan/edit/<?= $id?>/update" method="POST">
    
        <label for="">Nama Kecamatan (id) : </label>
        <input type="text" name="namaKec" value="<?= $idKec ?>">
        <br>
        <label for="">Nama Kelurahan : </label>
        <input type="text" name="namaKel" value="<?= $namaKel ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>