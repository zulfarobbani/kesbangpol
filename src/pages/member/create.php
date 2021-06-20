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
<fieldset>
    <form action="/member/store" method="POST">
    <div class="container">
        <div class="mb-3 col-6">
            <label for="" class="form-label">Nama : </label>
            <input type="text" class="form-control"  placeholder="Masukan Nama" name="namaMember">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">NIK : </label>
            <input type="text" class="form-control"  placeholder="Masukan NIK" name="nikMember">
        </div>
        <div class="mb-3 col-6">
            <label for="" class="form-label">NIA : </label>
            <input type="text" class="form-control"  placeholder="Masukan NIA" name="niaMember">
        </div>
        
        <div class="mb-3 col-6">
            <label for="" class="form-label">Alamat : </label>
            <input type="text" class="form-control"  placeholder="Masukan Alamat" name="alamatMember">
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
            <label for="" class="form-label">no Telephone : </label>
            <input type="text" class="form-control"  placeholder="Masukan No telepon " name="teleponMember">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Foto : </label>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="fotoMember">
                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jabatan : </label>
            <select class="form-select" aria-label="Default select example" name="idjabatan" >
                <option selected>Pilih Jabatan</option>
                <?php foreach($jabatan1 as $key => $value) { ?>
                    <option value="<?= $value['idJabatan']?>"><?= $value['namaJabatan'] ?></option>
                    <?php } ?>
                    </select>
        </div>
        <div class="mb-3">
             <label for="" class="form-label">Pendidikan : </label>
            <select class="form-select" aria-label="Default select example" name="idPendidikan" >
                <option selected>Pilih Pendidikan</option>
                <?php foreach($pendidikan as $key => $value) { ?>
                    <option value="<?= $value['idPendidikan']?>"><?= $value['namaPendidikan'] ?></option>
                    <?php } ?>
                    </select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Orsospol : </label>
            <select class="form-select" aria-label="Default select example" name="idOrsospol" id="orsos">
                <option selected>Pilih Orsospol</option>
                <?php foreach($orsospol as $key => $value) { ?>
                <option value="<?= $value['idOrsospol']?>"><?= $value['namaOrsospol']?></option>
                <?php } ?>
                    </select>
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
        
    <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
    $("#prov").on("change", function(){
        var data = $(this).val();
        $.ajax({
            url: "/member/createkab",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var kab = "";
                kab+="<option selected>Pilih Kabupaten/Kota</option>";
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
            url: "/member/createkec",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var kec = "";
                kec+="<option selected>Pilih Kecamatan</option>";
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
            url: "/member/createkel",
            method : "POST",
            data: {data: data},
            success: function(data){
                console.log(data);
                var kel = "";
                kel+="<option selected>Pilih Kelurahan</option>";
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