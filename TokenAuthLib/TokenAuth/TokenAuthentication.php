<?php

namespace TokenAuth;

use TheSeer\Tokenizer\Token;

class TokenAuthentication
{

    public function tokenLogin(string $key, string $token){
        return base64_encode($key.':'.$token);
    }
}