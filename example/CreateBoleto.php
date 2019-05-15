<?php

namespace CieloBoleto;

require_once('../vendor/autoload.php');

$config = new Configuration();
$auth = $config->setAuthentication( new Auth\TokenAuth() )
	->setAccessToken('MerchantId', 'd44fdb6f-fc9b-47d9-abcf-4bf61539ab91')
	->setAccessToken('MerchantKey', 'DLIKHQSIXFATZKNAUBVHGWHYPRFMGSUWFMAMXKWK');

$client = new Client($config);

$body = [
	  'MerchantorderId' => "1234567",
	  'Customer' => [
		'Name' => 'Comprador Teste Boleto',
		'Identity' => '1234567890',
		'Address' => [
		  'Street' => 'Avenida Marechal Câmara',
		  'Number' => '160',
		  'Complement' => 'Sala 934',
		  'ZipCode' => '22750012',
		  'District' => 'Centro',
		  'City' => 'Rio de Janeiro',
		  'State' => 'RJ',
		  'Country' => 'BRA',
		],
	  ],
	  'Payment' => [
		'Type' => 'Boleto',
		'Amount' => 15700,
		'Provider' => 'BancoDoBrasil',
		'Address' => 'Rua Teste',
		'BoletoNumber' => '123',
		'Assignor' => 'Empresa Teste',
		'Demonstrative' => 'Desmonstrative Teste',
		'ExpirationDate' => '2020-12-31',
		'Identification' => '11884926754',
		'Instructions' => 'Aceitar somente até a data de vencimento, após essa data juros de 1% dia.',
	  ],
];


$novoBoleto = new SDK\CreateBoleto($client);

try {
    $result = $novoBoleto->run($body, false);
    var_dump($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateBoleto->run: ', $e->getMessage(), PHP_EOL;
}

