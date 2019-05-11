<?php

namespace P3DFN49CS\SDK;

abstract class Base
{

    protected $client;


    public function __construct($client = null)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }
}
