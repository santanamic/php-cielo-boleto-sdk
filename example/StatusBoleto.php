<?php

namespace CieloBoleto;

require_once('../vendor/autoload.php');

$config = new Configuration();
$auth = $config->setAuthentication( new Auth\TokenAuth() )
	->setAccessToken('MerchantId', 'd44fdb6f-fc9b-47d9-abcf-4bf61539ab91')
	->setAccessToken('MerchantKey', 'DLIKHQSIXFATZKNAUBVHGWHYPRFMGSUWFMAMXKWK');

$client = new Client($config);

$paymentId = 'b5e8a30c-eba2-4b2f-bed2-eca3a0443f7e';


$statusBoleto = new SDK\StatusBoleto($client);


try {
    $result = $statusBoleto->run($paymentId, false);
    var_dump($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusBoleto->run: ', $e->getMessage(), PHP_EOL;
}

