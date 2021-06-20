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
    <form action="/sosmed/edit/<?= $idSosialmedia ?>/update" method="POST">
    
        <label for="">Nama Instagram : </label>
        <input type="text" name="instagram" value="<?= $instagramSosialmedia?>">
        <br>
        <label for="">Nama Facebook : </label>
        <input type="text" name="facebook" value="<?= $facebookSosialmedia?>">
        <br>
        <label for="">Nama Youtube : </label>
        <input type="text" name="youtube" value="<?= $youtubeSosialmedia?>">
        <br>
        <label for="">Nama Twitter : </label>
        <input type="text" name="twitter" value="<?= $twitterSosialmedia?>">
        <br>
        <label for="">Nama Whatsapp : </label>
        <input type="text" name="whatsapp" value="<?= $whatsappSosialmedia?>">
        <br>
        <label for="">Nama Telegram : </label>
        <input type="text" name="telegram" value="<?= $telegramSosialmedia?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>