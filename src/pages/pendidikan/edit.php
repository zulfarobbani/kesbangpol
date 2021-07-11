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
    <form action="/pendidikan/edit/<?= $idPendidikan ?>/update" method="POST">
    <input type="hidden" value="<?= $idPendidikan ?>"> 
        <label for="">Nama Pendidikan : </label>
        <input type="text" name="namaPendidikan" value="<?= $namaPendidikan ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>