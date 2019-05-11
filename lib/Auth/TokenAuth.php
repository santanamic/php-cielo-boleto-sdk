<?php

namespace P3DFN49CS\Auth;

class TokenAuth
{
	
    protected $accessToken = [];
	
	public function setAccessToken($prefix = null, $token = null)
    {
		if( $prefix != null || $token != null ) {
			$this->accessToken[$prefix] = $token;		
		}
		return $this;
    }
	
    public function getAccessToken($key = null)
    {
		if(isset($key)){
			return $this->accessToken[$key];
		}
        return $this->accessToken;
    }
}
