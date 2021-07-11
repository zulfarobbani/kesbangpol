<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><a href="sosmed/create">TAMBAH SOSIALMEDIA</a></span>
    <table border="1">
    <tr>
        <td>No</td>
        <td>Intagram</td>
        <td>Facebook</td>
        <td>Youtube</td>
        <td>Twitter</td>
        <td>Whatsapp</td>
        <td>Telegram</td>
        <td>Aksi</td>   
    </tr>
    <?php foreach($datas as $key => $values) {?>
    <tr>
        <td><?= $key+=1 ?></td>
        <td><?= $values['instagramSosialmedia'] ?></td>
        <td><?= $values['facebookSosialmedia'] ?></td>
        <td><?= $values['youtubeSosialmedia'] ?></td>
        <td><?= $values['twitterSosialmedia'] ?></td>
        <td><?= $values['whatsappSosialmedia'] ?></td>
        <td><?= $values['telegramSosialmedia'] ?></td>
        <td>
        <a href="sosmed/edit/<?= $values['idSosialmedia'];?>">EDIT</a> 
        <a href="sosmed/delete/<?= $values['idSosialmedia'];?>">HAPUS</a>
        </td>
        
    </tr>
    <?php } ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>