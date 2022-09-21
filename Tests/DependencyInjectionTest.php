<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Strctural\DependencyInjection\DatabaseConfig;
use Strctural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{

    public function testCanGetDatabaseStringUrlFromDependencyInjection(){
        $databaseConfig=new DatabaseConfig('localhost','root','root','123','test');
        $databaseConnection=new DatabaseConnection($databaseConfig);

        $this->assertEquals('mysql://root:root@localhost:123/test',$databaseConnection->getConnectionToString());
    }
}