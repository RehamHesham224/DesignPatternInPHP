<?php

namespace Tests;

use Behavioural\Stategy\Base64Encrypt;
use Behavioural\Stategy\EncryptContext;
use Behavioural\Stategy\HashEncrypt;
use Behavioural\Stategy\Md5Encrypt;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private EncryptContext $encryptContext;
    private string $encryptedData;
    const TEXT= "ENCRYPT_ME";
    protected function setUp(): void
    {
        $this->encryptContext = new EncryptContext(new HashEncrypt());
        $this->encryptedData=$this->encryptContext->encryptString(self::TEXT)[0];
    }
    public function testCanUseHashEncrypt(){
        [$data,$type]=$this->encryptContext->encryptString(self::TEXT);
        self::assertEquals($this->encryptedData,$data);
        self::assertEquals(HashEncrypt::TYPE,$type);
    }
    public function testCanUseMD5Encrypt(){
        $this->encryptContext->setStrategy(new Md5Encrypt());
        [$data,$type]=$this->encryptContext->encryptString(self::TEXT);
        self::assertNotEquals($this->encryptedData,$data);
        self::assertEquals(Md5Encrypt::TYPE,$type);
    }
    public function testCanUseBase64Encrypt(){
        $this->encryptContext->setStrategy(new Base64Encrypt());
        [$data,$type]=$this->encryptContext->encryptString(self::TEXT);
        self::assertNotEquals($this->encryptedData,$data);
        self::assertEquals(Base64Encrypt::TYPE,$type);
    }


}