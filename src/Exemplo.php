<?php

require_once '..\vendor\autoload.php';

use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('08......-----aaaa750-710');

print_r($resultado);