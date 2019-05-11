<?php

namespace P3DFN49CS;

class Configuration
{
    /**
     * Hight authentication
     */

    protected $authentication;


    protected $host = 'https://apisandbox.cieloecommerce.cielo.com.br/1';
	
    protected $headers = ['Content-Type'=>'application/json'];

    protected $userAgent = 'SDK/0.0.1/php';
	
    protected $debug = false;

    protected $debugFile = 'php://output';

    protected $tempFolderPath;
	
    protected $curlTimeout = 10;
    
	protected $curlConnectTimeout = 10;
	
    protected $proxyHost;
	
	protected $proxyPort;

    protected $proxyType;

    protected $sslVerification = false;
	
    protected $proxyUser;

    protected $proxyPassword;


    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }
	
    public function addHeader($headerName, $headerValue)
    {
        if (!is_string($headerName)) {
            throw new \InvalidArgumentException('Header name must be a string.');
        }

        $this->headers[$headerName] =  $headerValue;
        return $this;
    }
	
    public function getHeaders()
    {
        return $this->headers;
    }
	
    public function deleteHeader($headerName)
    {
        unset($this->headers[$headerName]);
    }

    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;
        return $this->getAuthentication();
    }

    public function getAuthentication()
    {
        return $this->authentication;
    }
	

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
    }


    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    public function getUserAgent()
    {
        return $this->userAgent;
    }


    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    public function getDebug()
    {
        return $this->debug;
    }

    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }


    public function getDebugFile()
    {
        return $this->debugFile;
    }


    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }
	
    public function setCurlTimeout($seconds)
    {
        $this->curlTimeout = $seconds;
        return $this;
    }

    public function getCurlTimeout()
    {
        return $this->curlTimeout;
    }


    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }
	
    public function setSSLVerification($sslVerification)
    {
        $this->sslVerification = $sslVerification;
        return $this;
    }

    public function getSSLVerification()
    {
        return $this->sslVerification;
    }




    public function setCurlConnectTimeout($seconds)
    {
        $this->curlConnectTimeout = $seconds;
        return $this;
    }

    public function getCurlConnectTimeout()
    {
        return $this->curlConnectTimeout;
    }



    public function setCurlProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
        return $this;
    }


    public function getCurlProxyHost()
    {
        return $this->proxyHost;
    }
	
	
    public function setCurlProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
        return $this;
    }


    public function getCurlProxyPort()
    {
        return $this->proxyPort;
    }
	
    public function setCurlProxyType($proxyType)
    {
        $this->proxyType = $proxyType;
        return $this;
    }

    /**
     * Gets the HTTP Proxy Type
     *
     * @return integer
     */
    public function getCurlProxyType()
    {
        return $this->proxyType;
    }
	
    public function setCurlProxyUser($proxyUser)
    {
        $this->proxyUser = $proxyUser;
        return $this;
    }

    public function getCurlProxyUser()
    {
        return $this->proxyUser;
    }
	
    public function setCurlProxyPassword($proxyPassword)
    {
        $this->proxyPassword = $proxyPassword;
        return $this;
    }


    public function getCurlProxyPassword()
    {
        return $this->proxyPassword;
    }
	
    public static function toDebugReport()
    {
        $report  = 'PHP SDK Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    Temp Folder Path: ' . $this->getTempFolderPath() . PHP_EOL;

        return $report;
    }
}
