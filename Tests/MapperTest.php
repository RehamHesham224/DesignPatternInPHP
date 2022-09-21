<?php
namespace Tests;


use PHPUnit\Framework\TestCase;
use Strctural\Mapper\DataMapper;
use Strctural\Mapper\StorageManager;
use Strctural\Mapper\User;

class MapperTest extends TestCase
{
    private StorageManager $manager;
    private array $data;
    protected function setUp(): void
    {
        $this->data = [1=>['username'=>'admin','password'=>'123']];
        $this->manager =new StorageManager($this->data);

    }

    public function testCanGetUserById(){
        $dataMapper= new DataMapper($this->manager);
        $user=$dataMapper->findById(1);
        $this->assertEquals($this->data[1],$user);
    }

    public function testCanSaveUserObject(){
        $user=new User();
        $user->setUsername('master');
        $user->setPassword('123');
        $user->setId(2);
        $dataMapper= new DataMapper($this->manager);
        $this->assertTrue($dataMapper->saveUser($user));
    }
}