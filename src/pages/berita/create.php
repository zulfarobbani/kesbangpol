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
    <form action="/berita/store" method="POST" enctype="multipart/form-data">
    <input type="hidden" values="<?= $id_test?>"></input>
        <label>Foto Berita : </label>
        <input type="file" name="fotoBerita"><br>
        <label for="">Nama Berita : </label>
        <input type="text" name="namaBerita">
        <br>
        <label for="">Deskripsi : </label>
       <textarea name="deskripsiBerita" id="desk" cols="20" rows="2"></textarea>
        <br>
        <label for="">Penulis id : </label>
        <input type="text" name="idRelation">
        <br>
        <label for="">Approve : </label>
        <input type="text" name="approvalBerita">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>