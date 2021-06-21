<?php
    require_once "vendor/autoload.php";

    use andrevitor103\DigitalCep\Search;

    $buscar = new Search();

    $resultado = $buscar->getAddressFromCep('84430000');

    print_r($resultado);
    
