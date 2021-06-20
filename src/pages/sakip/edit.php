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
    <form action="/sakip/edit/<?= $idSakip ?>/update" method="POST">
    
        <label for="">Nama Sakip : </label>
        <input type="text" name="namaSakip" value="<?= $namaSakip ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>