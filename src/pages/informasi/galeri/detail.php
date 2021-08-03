<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= "Detail Gallery" ?></title>
</head>

<body style="background-color : #EEEEEE;">

    <?php include(__DIR__ . '/../../navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 top-1 start-0 ps-5 mb-3">
                <h3 class="fw-normal mt-5"><a href="/informasi/galeri" class="btn btn-sm btn-outlined-light"><i class="fas fa-arrow-left"></i></a> <?= $detail['namaGallery'] ?></h3>
                <div id="top"></div>
                <section class="gallery">
                    <div class="row nest">
                        <a href="#" class="close"></a>
                        <?php foreach ($detailItem as $key => $value) { ?>
                            <div class="col-md-4 col-sm-6 subnest">
                                <a href="#item01" class="galleryDetail" data-image="/assets/media/<?= $value['pathMedia'] ?>" data-name="<?= $value['namaGallerydetail'] ?>" data-deskripsi="<?= $value['deskripsiGallerydetail'] ?>">
                                    <img src="/assets/media/<?= $value['pathMedia'] ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        <?php } ?>
                    </div> <!-- / row -->

                    <!-- Item 01 -->
                    <div id="item01" class="port">

                        <div class="row">
                            <div class="description col-md-6 col-sm-12">
                                <h1 class="namaGallerydetail"></h1>
                                <p class="deskripsiGallerydetail"></p>
                            </div>

                            <img class="imageGallerydetail" src="" alt="" class="col-md-6 col-sm-12">
                        </div>
                    </div> <!-- / row -->


                    <!-- Item 02 -->
                    <div id="item02" class="port">

                        <div class="row">
                            <div class="description col-md-6 col-sm-12">
                                <h1>Item 02</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
                            </div>
                            <img src="https://cdn.dribbble.com/users/545884/screenshots/2883479/cover.jpg" alt="" class="col-md-6 col-sm-12">
                        </div> <!-- / row -->

                    </div> <!-- / Item 02 -->

                </section> <!-- / projects -->


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