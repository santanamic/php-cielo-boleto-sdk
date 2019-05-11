<?php

namespace P3DFN49CS\SDK;

class StatusBoleto extends Base
{
    public function run($paymentId)
    {
		$this->client->getConfig()->setHost('https://apiquerysandbox.cieloecommerce.cielo.com.br/1');
        $resourcePath = "/sales/" . $paymentId;
        $httpBody = [];
        $queryParams = [];
        $headerParams = [];
        $formParams = [];

        try {
            return $this->client->call(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                true,
                '/sales'
            );
        } catch (Exception $e) {
            throw $e;
        }
    }
}
