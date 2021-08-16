<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= "Detail Gallery" ?></title>
</head>

<body>

    <?php include(__DIR__ . '/../../mobilenav.php') ?>
    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="card rounded-3 mt-5 px-3">
                    <div class="card-body">
                        <h3 class="fw-normal mt-5"><a href="/informasi/galeri" class="btn btn-sm btn-outlined-light"><i class="fas fa-arrow-left"></i></a> <?= $detail['namaGallery'] ?></h3>
                        <div id="top"></div>
                        <section class="gallery">
                            <div class="row nest">
                                <a href="#" class="close" style="filter:invert(75%);"></a>
                                <?php foreach ($detailItem as $key => $value) { ?>
                                    <div class="col-6 col-md-4 subnest">
                                        <a href="#item01" class="galleryDetail" data-image="/assets/media/<?= $value['pathMedia'] ?>" data-name="<?= $value['namaGallerydetail'] ?>" data-deskripsi="<?= $value['deskripsiGallerydetail'] ?>">
                                            <img src="/assets/media/<?= $value['pathMedia'] ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div> <!-- / row -->

                            <!-- Item 01 -->
                            <div id="item01" class="port">

                                <div class="row">
                                    <div class="description col">
                                        <h1 class="namaGallerydetail"></h1>
                                        <img class="imageGallerydetail w-100" src="" alt="">
                                        <p class="deskripsiGallerydetail"></p>
                                    </div>
                                </div>
                            </div> <!-- / row -->
                        </section> <!-- / projects -->
                    </div>
                </div>
            </div>
            <?php include(__DIR__ . '/../../sidebar.php') ?>
        </div>
        <?php include(__DIR__ . '/../../footer.php') ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="/assets/js/gallery.js"></script>
</body>

</html>