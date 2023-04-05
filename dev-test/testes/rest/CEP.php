<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*

Postmon é uma API para consultar CEP e encomendas de maneira fácil.

Implemente uma função que recebe CEP e retorna todos os dados reltivos ao endereço correspondente.

Exemplo:

getAddressByCep('13566400') retorna:
{
	"bairro": "Vila Marina",
	"cidade": "São Carlos",
	"logradouro": "Rua Francisco Maricondi",
	"estado_info": {
	"area_km2": "248.221,996",
	"codigo_ibge": "35",
		"nome": "São Paulo"
	},
	"cep": "13566400",
	"cidade_info": {
		"area_km2": "1136,907",
		"codigo_ibge": "3548906"
	},
	"estado": "SP"
}



Documentação:
https://postmon.com.br/


*/

class CEP
{
    public static function getAddressByCep($cep)
    {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.postmon.com.br/v1/cep/".$cep);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Se a opção for FALSE = escreve na tela, se for TRUE = armazena na variável
		$endereco = curl_exec($ch);
        return $endereco;
    }
}

$cep = "13563705"; //valor para teste
$cep = $_GET["cep"];
var_dump(CEP::getAddressByCep($cep));