<?php

    namespace andrevitor103\DigitalCep\ws;

class ViaCep
{

    private $url = "https://viacep.com.br/ws/";

    public function get(string $cep): array
    {
        $get = file_get_contents($this->url . $cep . "/json");
        return (array) json_decode($get);
    }
}
