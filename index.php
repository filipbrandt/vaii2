<?php
include ("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
</head>
<body>

<div class="strip">
    <img src="img/home/strip.jpg" alt="Strip">
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg" style="background-image:url(img/home/col_1.jpg);">
            <h3>NÁJDITE SVOJE BMW</h3>
            <p>Vyberte si svoje BMW online práve teraz</p>
            <button type="button" class="btn btn-outline-light">Pozrieť ponuku</button>
        </div>
        <div class="col-lg" style="background-image:url(img/home/col_2.jpg);">
            <h3>LIFESTYLE</h3>
            <p>Fotogaleria</p>
            <button type="button" class="btn btn-outline-light">Vstúpiť</button>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">AKTUÁLNE VÝHODY</h5>
                    <p class="card-text">Bezplatný servis na 5 rokov</p>
                    <p class="card-text">BMW xDrive a navigácia zdarma</p>
                    <p class="card-text">Balík M Sport zdarma</p>

                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">PRIPRAVTE SA NA ZIMU</h5>
                    <p class="card-text">BMW zimné kolesá v extra ponuke</p>
                    <p class="card-text">BMW príslušenstvo na zimnú sezónu</p>
                    <p class="card-text">Balík zimné kontrola</p>

                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">CHANGE OF SESSION</h5>
                    <p class="card-text">Bezplatná kontrola vozidla</p>
                    <p class="card-text">Extra ponuka na BMW príslušenstvo a Lifestyle</p>
                    <p class="card-text">Špeciálna ponuka na skladové vozidlá</p>
                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">VYŠŠIA FORMA LUXUSU</h5>
                    <p class="card-text">Balík opráv na 5 rokov/200 000 km</p>
                    <p class="card-text">Balík Innovation zdarma</p>
                    <p class="card-text">M-Sport balík zdarma</p>
                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">PREKVAPTE ZIMU</h5>
                    <p class="card-text">70% zýhodnenie na zimnú sadu pre nové BMW X3 a X4</p>
                    <p class="card-text">Prvé prezutie ako bonus</p>
                    <p class="card-text">Sezónne uskladnenie ako bonus</p>
                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/home/home_6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">ISTOTA OSLOBODZUJE</h5>
                    <p class="card-text">Pri kúpe nového vozidla</p>
                    <p class="card-text">Výhodné financovanie</p>
                    <p class="card-text">Pri kúpe nového vozidla</p>
                    <a href="#" class="btn btn-primary">Zobraz</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>