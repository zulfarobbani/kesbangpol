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
    <form action="/informasi/pengumuman/store" method="POST" enctype="multipart/form-data">
        <label for="">Foto pengumuman</label>
        <input type="file" name="foto"><br>
        <label for="">Nama Pengumuman : </label>
        <input type="text" name="namaPengumuman">
        <br>
        <label for="">Deskripsi : </label>
        <textarea type="text" name="deskripsiPengumuman"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>