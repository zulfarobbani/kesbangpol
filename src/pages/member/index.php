<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <span><a href="member/create">TAMBAH MEMBER</a></span>
    <table class="table table-striped">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>NIA</td>
        <td>Alamat</td>
        <td>Provinsi</td>
        <td>Kabupaten/Kota</td>
        <td>Kecamatan</td>
        <td>Kelurahan</td>
        <td>No Telepon</td>
        <td>Foto </td>
        <td>Jabatan</td>
        <td>Pendidikan</td>
        <td>Orsospol</td>
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
        <td><?= $values['namaMember'] ?></td>
        <td><?= $values['nikMember'] ?></td>
        <td><?= $values['niaMember'] ?></td>
        <td><?= $values['alamatMember'] ?></td>
        <td><?= $values['provinsi']['nameprov'] ?></td>
        <td><?= $values['kabupaten']['namekab'] ?></td>
        <td><?= $values['kecamatan']['namekec'] ?></td>
        <td><?= $values['kelurahan']['namekel'] ?></td>
        <td><?= $values['teleponMember'] ?></td>
        <td><img class="img-fluid" src="../../assets/foto/<?= $values['fotoMember'] ?>" alt="foto member"></td>
        <td><?= $values['jabatan']['namaJabatan'] ?></td>
        <td><?= $values['pendidikan']['namaPendidikan'] ?></td>
        <td><?= $values['orsospol']['namaOrsospol'] ?></td>
        <td><?= $values['sosialmedia']['instagramSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['facebookSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['youtubeSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['twitterSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['whatsappSosialmedia'] ?></td>
        <td><?= $values['sosialmedia']['telegramSosialmedia'] ?></td>
        <td>
        <button class="btn btn-primary"onclick="location.href='member/edit/<?= $values['idMember'];?>'">EDIT</button> 
        <button class="btn btn-danger" onclick="location.href='member/delete/<?= $values['idMember'];?>/<?= $values['sosialmedia']['idSosialmedia']?>'">HAPUS</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">DETAIL</button>
        </td>
        
    </tr>
    <?php } ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>