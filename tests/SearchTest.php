<?php

    use PHPUnit\Framework\TestCase;
    use andrevitor103\DigitalCep\Search;

    class SearchTest extends TestCase {

        /**
         * @dataProvider dadosTeste
         */

        public function testGetAddressFromCep(string $input, array $esperado){
            $resultado = new Search();
            $resultado = $resultado->getAddressFromCep($input);
            $this->assertEquals($esperado, $resultado);
        }

    public function dadosTeste(){
        return [
            "Endereço" => [
                "84430000",
                [
                    "cep" => "84430-000",      
                    "logradouro" => "",
                    "complemento" => "",        
                    "bairro" => "",
                    "localidade" => "Imbituva",
                    "uf" => "PR",
                    "ibge" => "4110102",       
                    "gia" => "",
                    "ddd" => "42",
                    "siafi" => "7597"
                ]
                ],
                "Endereço2" => [
                "84430000",
                [
                    "cep" => "84430-000",      
                    "logradouro" => "",
                    "complemento" => "",        
                    "bairro" => "",
                    "localidade" => "Imbituva",
                    "uf" => "PR",
                    "ibge" => "4110102",       
                    "gia" => "",
                    "ddd" => "42",
                    "siafi" => "7597"
                ]
            ]               
                ];
    }

 }
