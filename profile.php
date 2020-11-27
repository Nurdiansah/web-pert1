<?php


if (isset($_POST['simpan'])) {
    //
    $jumlah_harga = $_POST['jml_item'] * $_POST['harga'];
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
            <!-- Profile -->
            <div class="col-sm-12 col-md-4">
                <div class="card mt-3" style="width: 100%;">
                    <img src="nurdiansah.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Profile</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nurdiansah</li>
                        <li class="list-group-item">Web Developer <a href="http://www.ekanuri.com/">PT.Ekanuri</a></li>
                        <li class="list-group-item">Backend Developer <a href="https://codevintek.com/">Codevintek Development</a></li>
                    </ul>
                </div>
            </div>

            <!-- quote -->
            <div class="col-sm-12 col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Jika kamu tidak sanggup menahan lelahnya belajar maka kamu harus sanggup menahan lelahnya kebodohan" <footer class="blockquote-footer">Imam Syafi'i</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>