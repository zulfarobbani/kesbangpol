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
    <form action="/orsospol/edit/<?= $datas['idOrsospol'] ?>/<?= $datas['sosialmedia']['idSosialmedia']?>/update" method="POST">
    <div class="container">
        <div class="mb-3 col-6">
            <label for="" class="form-label">Nama Orsospol: </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Orsospol" name="namaOrsospol" value="<?= $datas['namaOrsospol']?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Jenis Orsospol: </label>
            <select class="form-select" aria-label="Default select example" name="idJenisorsospol" id="jenis">
            <option selected>Pilih Jenis Orsospol</option>
                <?php foreach($jenisorsospol as $key => $value) { ?>
                    <option <?= $value['idJenisorsospol'] == $datas['jenis']['idJenisorsospol'] ? "selected" : "" ?> value="<?= $value['idJenisorsospol']?>"><?= $value['namaJenisorsospol'] ?></option>
                    <?php } ?>
                </select>
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Notaris : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Notaris" name="notarisOrsospol" value="<?= $datas['notarisOrsospol']?>">
        </div>
        
        <div class="mb-3 col-6">
            <label for="" class="form-label">Kemenkumham Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Kemenkumham" name="kemenkumhamOrsospol" value="<?= $datas['kemenkumhamOrsospol']?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">NPWP Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama NPWP" name="npwpOrsospol" value="<?= $datas['npwpOrsospol']?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Rekening : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama NPWP" name="rekeningOrsospol" value="<?= $datas['rekeningOrsospol']?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Bank Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Bank" name="bankOrsospol" value="<?= $datas['bankOrsospol'] ?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Alamat : </label>
            <input type="text" class="form-control"  placeholder="Masukan Alamat" name="alamatOrsospol" value="<?= $datas['alamatOrsospol']?>">
        </div>
        <div class="row ">
            <div class="mb-3 col-3">
                <label for="" class="form-label">Provinsi : </label>
                <select class="form-select" aria-label="Default select example" name="idProvinsi" id="prov">
                <option selected>Pilih Provinsi</option>
                <?php foreach($data_prov as $key => $value) { ?>
                    <option <?= $value['idProvinsi'] == $datas['provinsi']['idProvinsi'] ? "selected" : "" ?> value="<?= $value['idProvinsi']?>"><?= $value['nameprov'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kabupaten/Kota : </label>
                <select class="form-select" aria-label="Default select example" name="idKab" id="kab" >
                <option selected>Pilih Kabupaten/Kota</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kecamatan : </label>
                <select class="form-select" aria-label="Default select example" name="idKec" id="kec" >
                <option selected>Pilih Kecamatan</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kelurahan : </label>
                <select class="form-select" aria-label="Default select example" name="idKel" id="kel" >
                <option selected>Pilih Kelurahan</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email : </label>
            <input type="text" class="form-control"  placeholder="Masukan nama Email " name="emailOrsospol" value="<?= $datas['emailOrsospol']?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">No Telepon Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Telepon" name="teleponOrsospol" value="<?= $datas["teleponOrsospol"]?>">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Website Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Website" name="websiteOrsospol" value="<?= $datas['websiteOrsospol']?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Instagram : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Instagram" name="instagram" value="<?= $datas['sosialmedia']['instagramSosialmedia']?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Facebook : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Facebook" name="facebook" value="<?= $datas['sosialmedia']['facebookSosialmedia']?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Youtube : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama youtube" name="youtube" value="<?= $datas['sosialmedia']['youtubeSosialmedia'] ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Twitter : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama twitter" name="twitter" value="<?= $datas['sosialmedia']['twitterSosialmedia'] ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">No Whatsapp : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Whatsapp" name="whatsapp" value="<?= $datas['sosialmedia']['whatsappSosialmedia'] ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telegram : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Telegram" name="telegram" value="<?= $datas['sosialmedia']['telegramSosialmedia']?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Approve : </label>
            <input type="text" class="form-control"  placeholder="Approve" name="approvalOrsospol" value="<?= $datas['approvalOrsospol']?>">
        </div>
        
    <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
   $("#prov").on("change", function(){
        var data = $(this).val();
        $.ajax({
            url: "/orsospol/createkab",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var idSelected = <?= $datas['kabupaten']['idKabupaten']?>

                var kab = "";
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                    console.log(element.idKabupaten);
                     
                    kab+="<option "+ (idSelected == element.idKabupaten ? 'selected' : '') +" value='"+element.idKabupaten+"'>"+element.namekab+"</option>" 
                }
                $("#kab").removeAttr("disabled");
                $("#kab").html(kab);
            }
        });
    });
    $("#kab").on("change", function(){
        var data = $(this).val();
        $.ajax({
            url: "/orsospol/createkec",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var kec = "";
                var selected1=<?= $datas['kecamatan']['idKecamatan']?>;
                
                
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                   
                    kec+="<option "+ (selected1 == element.idKecamatan ? 'selected' : '') +" value='"+element.idKecamatan+"'>"+element.namekec+"</option>" 
                }
                $("#kec").removeAttr("disabled");
                $("#kec").html(kec);
            }
        });
    });
    $("#kec").on("change", function(){
        var data = $(this).val();
        $.ajax({
            url: "/orsospol/createkel",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var kel = "";
                var selected2=<?= $datas['kelurahan']['idKelurahan']?>;
    
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                    
                    kel+="<option "+ (selected2 == element.idKelurahan ? 'selected' : '') +" value='"+element.idKelurahan+"'>"+element.namekel+"</option>" 
                }
                $("#kel").removeAttr("disabled");
                $("#kel").html(kel);
            }
        });
    });
    </script>
</body>
</html>