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
    <form action="/kabupaten/edit/<?= $id?>/update" method="POST">
    
        <label for="">Nama Provinsi : </label>
        <input type="text" name="namaProvinsi" value="<?= $idprovinsi ?>">
        <br>
        <label for="">Nama Kabupaten/Kota : </label>
        <input type="text" name="namaKab" value="<?= $namaKab ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>