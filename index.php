<?php


if (isset($_POST['trapesium'])) {

    // Rumus trapesium
    $atas = $_POST['atas'];
    $bawah = $_POST['bawah'];
    $tinggi = $_POST['tinggi'];

    $luas = 1 / 2 * ($atas + $bawah) * $tinggi;
} else if (isset($_POST['suhu'])) {
    // Rumus suhu
    $F = $_POST['f'];
    // celcius
    $C = ($F - 32) * 5 / 9;

    // Rankine
    $R = $f + 459.67;

    // Kelvin
    $K = ($F - 32) * 5 / 9 + 273.15;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 2 | Nurdiansah</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand mb-0 h1" href="index.php">Home</a>
        <a class="nav-link text-dark float-left" href="profile.php">Profile</a>
    </nav>



    <div class="container">
        <div class="display-4 mt-2 mb-2">Web 2 | Pertemuan 1 </div>
        <h3>Menghitung Luas Trapesium</h3>

        <?php if (isset($luas)) { ?>
            <div class="alert alert-success mt-3" role="alert">
                Berhasil Menghitung !
            </div>
        <?php } ?>
        <div class="row">
            <!-- Form -->
            <div class="col-sm-12 col-md-4 mt-3">
                <div class="card">
                    <div class="card-header bg-warning">
                        Masukan Nilai
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Garis Atas</label>
                                <input type="number" name="atas" class="form-control" autocomplete="off" required step="any" min="0.01" value="<?= $atas; ?>">
                            </div>
                            <div class=" form-group">
                                <label>Garis Bawah</label>
                                <input type="number" name="bawah" class="form-control" autocomplete="off" required step="any" min="0.01" value="<?= $bawah; ?>">
                            </div>
                            <div class=" form-group">
                                <label>Tinggi</label>
                                <input type="number" name="tinggi" class="form-control" autocomplete="off" required step="any" min="0.01" value="<?= $tinggi; ?>">
                            </div>
                            <button type="submit" name="trapesium" class="btn btn-primary float-right">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php if (isset($luas)) { ?>
                <!-- Return -->
                <div class="col-sm-12 col-md-3 ">
                    <div class="card text-white bg-primary mt-3" style="max-width: 18rem;">
                        <div class="card-header">Hasil</div>
                        <div class="card-body">
                            <h5 class="card-title mb-3">Luas Trapesium</h5>
                            <p>Rumus : <br>1 / 2 x (atas + bawah) x tinggi </p>
                            <p>Hitung : <br>1 / 2 x (<?= $atas . ' + ' . $bawah . ') x ' . $tinggi ?></p>
                            <h4 class="card-title"><b> = <?= $luas; ?></b></h4>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Akhir return -->
        </div>

        <!-- Konversi suhu -->
        <h3 class="mt-5">Konversi Suhu</h3>

        <?php if (isset($C)) { ?>
            <div class="alert alert-success mt-3" role="alert">
                Berhasil Menghitung !
            </div>
        <?php } ?>
        <div class="row">
            <!-- Form -->
            <div class="col-sm-12 col-md-4 mt-3">
                <div class="card">
                    <div class="card-header bg-danger">
                        Masukan Nilai
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Derajat &#8457; </label>
                                <input type="number" name="f" class="form-control" autocomplete="off" required step="any" min="0.01" value="<?= $F; ?>">
                            </div>
                            <button type="submit" name="suhu" class="btn btn-primary float-right">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php if (isset($C)) { ?>
                <!-- Return -->
                <div class="col-sm-12 col-md-3 ">
                    <div class="card text-white bg-primary mt-3" style="max-width: 18rem;">
                        <div class="card-header">Hasil</div>
                        <div class="card-body">
                            <h5 class="card-title">Derajat C </h5>
                            <h4 class="card-title"><b>= <?= $C; ?></b></h4>
                            <h5 class="card-title">Derajat R </h5>
                            <h4 class="card-title"><b>= <?= $R; ?></b></h4>
                            <h5 class="card-title">Derajat K </h5>
                            <h4 class="card-title"><b>= <?= $K; ?></b></h4>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Akhir return -->
        </div>
    </div>
</body>

</html>