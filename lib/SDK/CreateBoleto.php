<?php

/**
 * CreateBoleto Class
 *
 * This file is part of <santanamic/php-cielo-boleto-sdk>
 * Created by WILLIAN SANTANA <https://github.com/santanamic>
 *
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 *
 * Para a informaçao dos direitos autorais e de licença voce deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 *
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 *
 * @package santanamic/php-cielo-boleto-sdk
 * @author  @santanamic
 * @link    https://github.com/santanamic/php-cielo-boleto-sdk.git
 */

namespace CieloBoleto\SDK;

/**
 * Generation the Boleto
 *
 * @category Class
 */

class CreateBoleto extends Base
{

    /**
     * Run operation 
     *
     * @param array $body payment info
     * @throws Exception on non-2xx response
     * @return Client HTTP status code, HTTP response headers (array of strings)
     */
    
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
