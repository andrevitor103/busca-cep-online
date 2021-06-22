<?php

namespace andrevitor103\DigitalCep;

use andrevitor103\DigitalCep\ws\ViaCep;

class Search
{
    public function __construct()
    {
    }

    public function getAddressFromCep(string $cep): array
    {
        $busca = new ViaCep();
        $retorno = $busca->get($cep);
        return $retorno;
    }
}
    // $busca = new Search();
    // print_r($busca->getAddressFromCep('84430000'));
