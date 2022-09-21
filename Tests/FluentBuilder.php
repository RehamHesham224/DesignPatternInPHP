<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Strctural\FluentBuilder\QueryBuilder;

class FluentBuilder extends TestCase
{
    public function testCanCreateSQLFromQueryString(){
    $queryBuilder=new QueryBuilder();
    $queryBuilder->select(['name','email'])
        ->from('Accounts','users')
        ->where(['id=1','email=admin@example.com']) ;

    $this->assertEquals('SELECT name, email FROM Accounts As users WHERE id=1 AND email=admin@example.com ', $queryBuilder->getSQL());
    }
}