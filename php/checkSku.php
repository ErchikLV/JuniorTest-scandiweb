<?php

require_once('DVD.php');

$product = new DVD();

$product->setSku($_POST['sku']);
$product->checkSku();


