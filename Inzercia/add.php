<?php
include "Item.php";
include "DataStorage.php";
include "navbar_inzercia.php"
?>


<html>
<head>
    <title>PRIDAJ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/add_style.css">
</head>
<body>

</div>
<div class="container">

    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Predmet</label>

            <input type="text" class="form-control" name="title" required value="<?= empty($_POST) ? "" : $_POST['title'] ?>">
            <?php
            if (!(empty($_POST))) {
                if ((strlen($_POST['title'])) < 5) { ?>
                    <p> Predmet je príliš, krátky. (min. 5 znakov) </p>
                <?php }
                if ((strlen($_POST['title'])) > 100) { ?>
                    <p> Predmet je príliš dlhý. (max. 5 znakov) </p>
                <?php }
            }  ?>
        </div>
        <div class="form-group">
            <select multiple class="form-control" id="exampleFormControlSelect2" name="purpose" required>
                <option>KÚPIM</option>
                <option>PREDÁM</option>
                <option>VYMENÍM</option>
                <option>DARUJEM</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Popis</label>
            <textarea class="form-control" type="text" name="text" rows="5 " placeholder="Vloz popis" required><?= empty($_POST) ? "" : $_POST['text'] ?></textarea>
            <?php
            if (!(empty($_POST))) {
                if ((strlen($_POST['text'])) < 30) { ?>
                    <p> Text je príliš, krátky. (min. 30 znakov) </p>
                <?php }
            }  ?>
        </div>
        <div class="form-group">
            <label for="cena" ">Cena v €</label>
            <input type="number" class="form-control" name="cena" placeholder="Vloz cenu" required
                   value="<?= empty($_POST) ? "" : $_POST['cena'] ?>">
            <?php
            if (!(empty($_POST))) {
                if (!(is_numeric($_POST['cena'])) || (strlen($_POST["cena"]) > 7)) { ?>
                    <p> Nespravny format ceny. (priklad: 10000) </p>
                <?php }
            }  ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Psc</label>
            <input type="number" class="form-control" name="psc" placeholder="Vloz PSC tvojho mesta" required value="<?= empty($_POST) ? "" : $_POST['psc'] ?>">
            <?php
            if (!(empty($_POST))) {
                if (((strlen($_POST['psc'])) <> 5) || (!(is_numeric($_POST['psc'])))) { ?>
                    <p> Nespravny format PSC. (priklad: 01257)</p>
                <?php }
            }  ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Vloz svoju e-mailovu adresu" required value="<?= empty($_POST) ? "" : $_POST['email'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tel.číslo </label>
            <input type="text" class="form-control" name="phone" placeholder="Vloz svoje tel.číslo v tvare 09XXXXXXXX" required value="<?= empty($_POST) ? "" : $_POST['phone'] ?>">
            <?php
            if (!(empty($_POST))) {
                if (((strlen($_POST['phone'])) <> 10) || (!(is_numeric($_POST['phone'])))) { ?>
                    <p> Nespravny format tel.čísla. (priklad: 0944166789)</p>
                <?php }
            }  ?>
        </div>


        <button type="submit" name="sent" class="btn btn-outline-primary">Confirm</button>
    </form>


</div>

<?php
$storage = new DataStorage();
$storage->processData();
?>


</body>
</html>