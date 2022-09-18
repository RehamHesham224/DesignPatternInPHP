<?php

namespace Strctural\AdapterThirdPartyLibrary;

class UserLogin
{
    private AuthenticationInterface $authenticator;
    public function __construct($authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params){
        return $this->authenticator->login($params);
    }
}