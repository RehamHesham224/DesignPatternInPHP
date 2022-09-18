<?php
namespace Tests;


use PHPUnit\Framework\TestCase;
use Strctural\AdapterThirdPartyLibrary\BasicAuthAdapter;
use Strctural\AdapterThirdPartyLibrary\TokenAuthAdapter;
use Strctural\AdapterThirdPartyLibrary\UserLogin;

class AdapterThirdPartExampleTest extends TestCase
{
    public function testCanAuthWithBasicAuthLib(){
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('username:password');
        $userLogin=new UserLogin($basicAuthAdapter);
        $userLogin->login(['username' => 'username', 'password' => 'password']);
    }
    public function testCanAuthWithTokenAuthLib(){
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn(base64_encode('test:token'));
        $userLogin=new UserLogin($tokenAuthAdapter);
        $userLogin->login(['token'=>"token",'key'=>'test']);
    }
}