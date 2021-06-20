<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container col-6 position-absolute top-0 start-0">
    <span><a href="regulasi/create">TAMBAH REGULASI</a></span>
    <div class="col-12">
    <table class="table">
    <thead>
    <tr>
        <td>No</td>
        <td>Nama Regulasi</td>
        <td>Aksi</td>   
    </tr>
    </thead>
    <tbody>
    <?php foreach($datas as $key => $values) {?>
    <tr>
        <td><?= $key+=1 ?></td>
        <td><?= $values['namaRegulasi'] ?></td>
        <td>
        <a href="regulasi/edit/<?= $values['idRegulasi'];?>">EDIT</a> 
        <a href="regulasi/delete/<?= $values['idRegulasi'];?>">HAPUS</a>
        </td>
        
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>