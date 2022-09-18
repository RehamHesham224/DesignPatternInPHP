<?php

namespace Strctural\AdapterThirdPartyLibrary;

use BasicAuth\BasicAuthentication;

class BasicAuthAdapter implements AuthenticationInterface
{

    private BasicAuthentication $authenticator;

    public function __construct(BasicAuthentication $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->basicLogin($params['username'], $params['password']);
    }
}