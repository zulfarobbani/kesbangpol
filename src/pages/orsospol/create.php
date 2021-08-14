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
    <form action="/orsospol/store" method="POST">
    <div class="container">
        <div class="mb-3 col-6">
            <label for="" class="form-label">Nama Orsospol: </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Orsospol" name="namaOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Jenis Orsospol: </label>
            <select class="form-select" aria-label="Default select example" name="idJenisorsospol" id="jenis">
            <option selected>Pilih Jenis Orsospol</option>
                <?php foreach($jenisorsospol as $key => $value) { ?>
                    <option value="<?= $value['idJenisorsospol']?>"><?= $value['namaJenisorsospol'] ?></option>
                    <?php } ?>
                </select>
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Notaris : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Notaris" name="notarisOrsospol">
        </div>
        
        <div class="mb-3 col-6">
            <label for="" class="form-label">Kemenkumham Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Kemenkumham" name="kemenkumhamOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">NPWP Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama NPWP" name="npwpOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Rekening : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama NPWP" name="rekeningOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Bank Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Bank" name="bankOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Alamat : </label>
            <input type="text" class="form-control"  placeholder="Masukan Alamat" name="alamatOrsospol">
        </div>
        <div class="row ">
            <div class="mb-3 col-3">
                <label for="" class="form-label">Provinsi : </label>
                <select class="form-select" aria-label="Default select example" name="idProvinsi" id="prov">
                <option selected>Pilih Provinsi</option>
                <?php foreach($data_prov as $key => $value) { ?>
                    <option value="<?= $value['idProvinsi']?>"><?= $value['nameprov'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kabupaten/Kota : </label>
                <select class="form-select" aria-label="Default select example" name="idKab" id="kab" disabled>
                <option selected>Pilih Kabupaten/Kota</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kecamatan : </label>
                <select class="form-select" aria-label="Default select example" name="idKec" id="kec" disabled>
                <option selected>Pilih Kecamatan</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="" class="form-label">Kelurahan : </label>
                <select class="form-select" aria-label="Default select example" name="idKel" id="kel" disabled>
                <option selected>Pilih Kelurahan</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email : </label>
            <input type="text" class="form-control"  placeholder="Masukan nama Email " name="emailOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">No Telepon Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Telepon" name="teleponOrsospol">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">Website Orsospol : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Website" name="websiteOrsospol">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Instagram : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Instagram" name="instagram">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Facebook : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama Facebook" name="facebook">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Youtube : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama youtube" name="youtube">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Twitter : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama twitter" name="twitter">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">No Whatsapp : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Whatsapp" name="whatsapp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telegram : </label>
            <input type="text" class="form-control"  placeholder="Masukan No Telegram" name="telegram">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Approve : </label>
            <input type="text" class="form-control"  placeholder="Approve" name="approvalOrsospol">
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
                var kab = "";
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                     
                    kab+="<option value='"+element.idKabupaten+"'>"+element.namekab+"</option>" 
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
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                   
                    kec+="<option value='"+element.idKecamatan+"'>"+element.namekec+"</option>" 
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
                
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                    
                    kel+="<option value='"+element.idKelurahan+"'>"+element.namekel+"</option>" 
                }
                $("#kel").removeAttr("disabled");
                $("#kel").html(kel);
            }
        });
    });
    $("#orsos").ready(function(){
        var data = $(this).val();
        $.ajax({
            url: "/member/createorsos",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var orsos = "";
                orsos+="<option selected>Pilih Orsospol</option>";a
                for(let index = 0; index < data.length; index++){
                    const element = data[index];
                    
                    orsos+="<option value='"+element.idOrsospol+"'>"+element.namaOrsospol+"</option>"; 
                }
                $("#orsos").html(orsos);
            }
        });
    });
    </script>
</body>
</html>