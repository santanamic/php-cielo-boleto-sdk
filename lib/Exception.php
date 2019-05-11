<?php

namespace P3DFN49CS;

class Exception extends \Exception
{

    protected $responseBody;

    protected $responseHeaders;

    protected $responseObject;

    public function __construct($message = "", $code = 0, $responseHeaders = null, $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    public function getResponseBody()
    {
        return $this->responseBody;
    }

    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
