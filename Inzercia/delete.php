<?php
include 'DataStorage.php';
include "../navbar.php";


$id= $_GET['id'];
$storage = new DataStorage();
$storage->delete($id);


?>