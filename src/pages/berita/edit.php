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
    <form action="/berita/edit/<?= $idBerita ?>/update" method="POST">
    <input type="hidden" values="<?= $id_test?>"></input>
        <label for="">Nama Berita : </label>
        <input type="text" name="namaBerita" value="<?= $namaBerita ?>">
        <br>
        <label for="">Deskripsi : </label>
       <input name="deskripsiBerita" value="<?= $deskripsiBerita ?>">
        <br>
        <label for="">Penulis id : </label>
        <input type="text" name="idRelation" value="<?= $idRelation ?>">
        <br>
        <label for="">Approve : </label>
        <input type="text" name="approvalBerita" value="<?= $approvalBerita ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>