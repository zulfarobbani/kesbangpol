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
<fieldset>
    <form action="/laporan/edit/<?= $idLaporan ?>/update" method="POST">
    <input type="hidden" values="<?= $id_test?>"></input>
    <div class="mb-3 col-3">
        <label class="form-label" for="">id Orsospol : </label>
        <input class="form-control col-6" type="text" name="idOrsospol" value="<?= $idOrsospol?>">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label" for="">Tahun Laporan : </label>
        <input class="form-control" type="text" id="datepicker" name="tahunLaporan" value="<?= $tahunLaporan ?>">
    </div>    
        <button type="submit">Submit</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
<script type="text/javascript">
</script>
</body>
</html>