<?php

namespace P3DFN49CS\SDK;

class CreateBoleto extends Base
{
    public function run($body)
    {
        $resourcePath = "/sales";
        $httpBody = $body;
        $queryParams = [];
        $headerParams = [];
        $formParams = [];

        try {
            return $this->client->call(
                $resourcePath,
                'POST',
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
