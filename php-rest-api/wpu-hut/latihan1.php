<?php 
$data = file_get_contents("data/pizza.json");
$menu = json_decode($data, true);
$menu = $menu['menu'];
function indo_harga($harga) {
    return 'Rp. ' . number_format($harga, 0, ",", ".");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Wpu Hut</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">All menu <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($menu as $row): ?>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <img src="img/menu/<?= $row['gambar']; ?>" class="card-img-top" alt="<?= $row['nama']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama']; ?></h5>
                        <p class="card-text"><?= $row['deskripsi']; ?></p>
                        <h5 class="card-title"><?= indo_harga($row['harga']); ?></h5>
                        <a href="" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>