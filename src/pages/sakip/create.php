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
    <form action="/sakip/store" method="POST" enctype="multipart/form-data">
        <label for="">File Sakip : </label>
        <input type="file" name="namaSakip">
        <br>
        <button type="submit">Submit</button>
    </form>
</fieldset>
<button onclick="location.href='/sakip'">KEMBALI</button>
</body>
</html>