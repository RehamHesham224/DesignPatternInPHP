<?php

namespace BasicAuth;

class BasicAuthentication
{

    public function basicLogin(string $username, string $password){
        return $username . ':' . $password;
    }

}