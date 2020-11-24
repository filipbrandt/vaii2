<?php
include "Item.php";
include "DataStorage.php";
include "navbar_inzercia.php"
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
    <link rel="stylesheet" href="css/inzercia_style.css">
</head>
<body>

<div class="container">
    <?php
    $storage = new DataStorage();

    $storage->processData();
    $items = $storage->loadAllData();
    /** @var Article $article */

    foreach ($items as $item) { ?>
        <div class="jumbotron">
            <h2 class="display-6"><?= $item->getPurpose() ?></h2>
            <h1 class="display-5"><?= $item->getTitle() ?></h1>
            <hr class="my-2">
            <p class="lead"><?= $item->getText() ?></p>


            <h3 class="lead info">Cena: <?= $item->getCena() ?>€</h3>
            <h3 class="lead info">PSC: <?= $item->getPsc() ?></h3>
            <h3 class="lead info">E-mail: <?= $item->getEmail() ?></h3>
            <h3 class="lead info">Tel.číslo: <?= $item->getPhone() ?></h3>


            <form method="post" action="edit.php?id=<?= $item->getId() ?>">
                <button type="submit" class="btn btn-outline-primary floated align-right">Edit</button>
            </form>
            <form method="post" action="delete.php?id=<?= $item->getId() ?>">
                <button type="submit" class="btn btn-outline-danger floated border-0" id="id_button_zmazat">Zmazat
                </button>
            </form>
        </div>
    <?php } ?>

</div>


</body>
</html>
