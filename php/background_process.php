<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once('DVD.php');
require_once('Book.php');
require_once('Furniture.php');

$type = $_POST["types"];
$object = new $type();
$object -> add();

header('Location: ../');