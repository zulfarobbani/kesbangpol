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
    <form action="/kecamatan/edit/<?= $id?>/update" method="POST">
    
        <label for="">Id Kabupaten/Kota : </label>
        <input type="text" name="namaKab" value="<?= $idKab ?>">
        <br>
        <label for="">Nama Kecamatan : </label>
        <input type="text" name="namaKec" value="<?= $namaKec ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>