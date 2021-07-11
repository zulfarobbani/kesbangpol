<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><a href="orsospol/create">TAMBAH ORSOSPOL</a></span>
    <table border="1">
    <tr>
        <td>No</td>
        <td>Nama Orsospol</td>
        <td>Jenis Orsospol</td>
        <td>Notaris</td>
        <td>Kemenkumham</td>
        <td>NPWP</td>
        <td>Rekening Orsospol</td>
        <td>Nama Bank </td>
        <td>alamat</td>
        <td>Provinsi</td>
        <td>Kabupaten/Kota</td>
        <td>Kecamatan</td>
        <td>Kelurahan</td>
        <td>Email</td>
        <td>No Telepon Orsospol</td>
        <td>Website Orsospol</td>
        <td>Instagram</td>
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
        <td><?= $values['namaOrsospol'] ?></td>
        <td><?= $values['jenis']['namaJenisorsospol'] ?></td>
        <td><?= $values['notarisOrsospol'] ?></td>
        <td><?= $values['kemenkumhamOrsospol'] ?>
        <td><?= $values['npwpOrsospol'] ?></td>
        <td><?= $values['rekeningOrsospol'] ?></td>
        <td><?= $values['bankOrsospol'] ?></td>
        <td><?= $values['alamatOrsospol'] ?></td>
        <td><?= $values['provinsi']['nameprov'] ?></td>
        <td><?= $values['kabupaten']['namekab'] ?></td>
        <td><?= $values['kecamatan']['namekec'] ?></td>
        <td><?= $values['kelurahan']['namekel'] ?></td>
        <td><?= $values['emailOrsospol'] ?></td>
        <td><?= $values['teleponOrsospol'] ?></td>
        <td><?= $values['websiteOrsospol'] ?></td>
        <td><?= $values['sosialmedia']['instagramSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['facebookSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['youtubeSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['twitterSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['whatsappSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['telegramSosialmedia'] ?></td>
        <td>
        <a href="orsospol/edit/<?= $values['idOrsospol'];?>">EDIT</a> 
        <a href="orsospol/delete/<?= $values['idOrsospol'];?>/<?= $values['sosialmedia']['idSosialmedia']?>">HAPUS</a>
        </td>
        
    </tr>
    <?php } ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>