<?php

namespace Strctural\AdapterThirdPartyLibrary;

use TokenAuth\TokenAuthentication;

class TokenAuthAdapter implements AuthenticationInterface
{
    private $authenticator;
    public function __construct(TokenAuthentication $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        // TODO: Implement login() method.
        return $this->authenticator->tokenLogin($params['key'], $params['token']);
    }
}