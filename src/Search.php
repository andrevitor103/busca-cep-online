<?php

    namespace andrevitor103\DigitalCep;

    class Search {
        private $url = "https://viacep.com.br/ws/";

        public function __construct(){
              
        }
       
        public function getAddressFromCep(string $cep): array{
            $get = file_get_contents($this->url. $cep. "/json");
            return (array) json_decode($get);
        }
    
    }
    // $busca = new Search();
    // print_r($busca->getAddressFromCep('84430000'));
