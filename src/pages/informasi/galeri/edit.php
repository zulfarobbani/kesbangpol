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
    <form action="/galeri/edit/<?= $idGallery ?>/update" method="POST">
    <input type="hidden" values="<?= $id_test?>"></input>
        <label for="">Nama Galeri : </label>
        <input type="text" name="namaGallery" value="<?= $namaGallery ?>">
        <br>
        <label for="">Deskripsi : </label>
       <input name="deskripsiGallery" id="desk" cols="20" rows="2" value="<?= $deskripsiGallery ?>">        <br>
        <label for="">Penulis id : </label>
        <input type="text" name="idRelation" value="<?= $idRelation ?>">
        <br>
        <label for="">Approve : </label>
        <input type="text" name="approvalGallery" value="<?= $approvalGallery ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>