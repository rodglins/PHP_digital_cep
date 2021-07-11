<?php 

require_once "vendor/autoload.php";

use Olinda\DigitalCep\search;

$busca = new search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);