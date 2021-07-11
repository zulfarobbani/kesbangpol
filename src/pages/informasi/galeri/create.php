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
    <form action="/informasi/galeri/store" method="POST" enctype="multipart/form-data">
    <input type="hidden" values="<?= $id_test?>"></input>
        <label for="">Foto Galeri : </label>
        <input type="file" name="fotoGaleri">
        <br>
        <label for="">Nama Galeri : </label>
        <input type="text" name="namaGallery">
        <br>
        <label for="">Deskripsi : </label>
       <textarea name="deskripsiGallery" id="desk" cols="20" rows="2"></textarea>
        <br>
        <label for="">Penulis id : </label>
        <input type="text" name="idRelation">
        <br>
        <label for="">Approve : </label>
        <input type="text" name="approvalGallery">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>