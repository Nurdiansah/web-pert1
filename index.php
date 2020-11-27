<?php


if (isset($_POST['simpan'])) {
    //
    $harga = 'Rp. ' . number_format($_POST['harga'], 0, ",", ".");
    $jumlah_harga = 'Rp. ' . number_format($_POST['jml_item'] * $_POST['harga'], 0, ",", ".");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 2 | Pertemuan 2 | Nurdiansah</title>

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
        <div class="row">
            <!-- Form -->
            <div class="col-sm-12 col-md-4 mt-3">
                <div class="card">
                    <div class="card-header bg-warning">
                        Tambah Barang
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nama Peralatan</label>
                                <input type="text" class="form-control" name="nm_item">
                            </div>
                            <div class=" form-group">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="jml_item">
                            </div>
                            <div class=" form-group">
                                <label>Harga Satuan</label>
                                <input type="text" class="form-control" name="harga">
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary float-right">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="col-sm-12 col-md-8 mt-3">
                <table class="table table-striped">
                    <caption>Daftar Pemesanan Peralatan Kantor</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Peralatan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga Satuan</th>
                            <th scope="col">Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $_POST['nm_item'] ?></td>
                            <td><?= $_POST['jml_item'] ?></td>
                            <td><?= $harga ?></td>
                            <td><?= $jumlah_harga; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>