<?php
namespace Tests;


use PHPUnit\Framework\TestCase;
use Strctural\Mapper\DataMapper;
use Strctural\Mapper\StorageManager;

class Mapper extends TestCase
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
        $dataMapper= new DataMapper($this->manager);
        $user=$dataMapper->saveUser(1);
        $this->assertEquals($this->data[1],$user);
    }
}