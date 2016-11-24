<?php

namespace Cronycle\Abstracts;

use Cronycle\Interfaces\{CommonRequestInterface,TokenInterface};

class AbstractRequest implements CommonRequestInterface, TokenInterface
{
	protected $token;

	public function getToken()
	{
		return $this->token;
	}

	public function setToken( $token )
	{
		$this->token = $token;
	}

	protected function getRequestUrl( string $method ) : string
	{
		return sprintf( '%s%s', static::API_URL, $method );
	}

	protected function getAuthorizationHeader()
	{
		return 'Authorization: Token auth_token='.$this->getToken();
	}
}