<?php
include "Item.php";
include "DataStorage.php";
include "navbar_inzercia.php";
$id = $_GET['id'];
?>

<html>
<head>
    <title>BLOG</title>
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
    <link rel="stylesheet" href="public/css.css">
    <link rel="stylesheet" href="css/edit_style.css">
</head>
<body>

<?php
$storage = new DataStorage();

$storage->processData();
$items = $storage->loadAllData();
/** @var Item $item */
?>
<div class="container">
    <?php

    foreach ($items

             as $item) {
        if ($item->getId() == $id) {
            ?>
            <div class="jumbotron">
                <h2 class="display-6"><?= $item->getPurpose() ?></h2>
                <h1 class="display-5"><?= $item->getTitle() ?></h1>
                <hr class="my-2">
                <p class="lead"><?= $item->getText() ?></p>


                <h3 class="lead info">Cena: <?= $item->getCena() ?>€</h3>
                <h3 class="lead info">PSC: <?= $item->getPsc() ?></h3>

            </div>


            <div class="container">
                <form method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Predmet</label>
                        <input type="text" class="form-control" name="title" required
                               value="<?= empty($_POST) ? $item->getTitle() : $_POST['title'] ?>">
                        <?php
                        if (!(empty($_POST))) {
                            if ((strlen($_POST['title'])) < 5) { ?>
                                <p class="warning"> Predmet je príliš, krátky. (min. 5 znakov) </p>
                            <?php }
                            if ((strlen($_POST['title'])) > 50) { ?>
                                <p class="warning"> Predmet je príliš dlhý. (max. 50 znakov) </p>
                            <?php }
                        } ?>
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
                        <textarea class="form-control" name="text" required
                                  rows="5"><?= empty($_POST) ? $item->getText() : $_POST['text'] ?></textarea>
                        <?php
                        if (!(empty($_POST))) {
                            if ((strlen($_POST['text'])) < 30) { ?>
                                <p class="warning"> Text je príliš, krátky. (min. 30 znakov) </p>
                            <?php }
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Cena</label>
                        <input type="number" class="form-control" required name="cena"
                               value="<?= empty($_POST) ? $item->getCena() : $_POST['cena'] ?>">
                        <?php
                        if (!(empty($_POST))) {
                            if (!(is_numeric($_POST['cena'])) || (strlen($_POST["cena"]) > 7)) { ?>
                                <p class="warning"> Nespravny format ceny. (priklad: 10000) </p>
                            <?php }
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">PSC</label>
                        <input type="number" class="form-control" required name="psc"
                               value="<?= empty($_POST) ? $item->getPsc() : $_POST['psc'] ?>">
                        <?php
                        if (!(empty($_POST))) {
                            if (((strlen($_POST['psc'])) <> 5) || (!(is_numeric($_POST['psc'])))) { ?>
                                <p class="warning"> Nespravny format PSC. (priklad: 01257)</p>
                            <?php }
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-mail</label>
                        <input type="email" class="form-control" required name="email"
                               value="<?= empty($_POST) ? $item->getEmail() : $_POST['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tel.číslo</label>
                        <input type="number" class="form-control" required name="phone"
                               value="<?= empty($_POST) ? $item->getPhone() : $_POST['phone'] ?>">
                        <?php
                        if (!(empty($_POST))) {
                            if (((strlen($_POST['phone'])) <> 10) || (!(is_numeric($_POST['phone'])))) { ?>
                                <p class="warning"> Nespravny format tel.čísla. (priklad: 0944166789)</p>
                            <?php }
                        } ?>
                    </div>

                    <button type="submit" class="btn btn-outline-primary floated" required name="edit"
                            id="id_button_confirm">
                        Confirm
                    </button>

                    <?php
                    $storage->update($id);
                    ?>
                </form>

                <form method="post" action="delete.php?id=<?= $item->getId() ?>">
                    <button type="submit" class="btn btn-outline-danger floated border-0" id="id_button_zmazat">Zmazat
                    </button>
                </form>
            </div>

            </div>
    </div>
    <div class="footer">
    </div>
        <?php } ?>
    <?php } ?>






</body>
</html>