<?php

namespace Tests;
use Behavioural\ChainOfResponsibility\AfafHandler;
use Behavioural\ChainOfResponsibility\AliHandler;
use Behavioural\ChainOfResponsibility\MohsenHandler;
use Behavioural\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testAliCanHandleRequest(){
        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen =new MohsenHandler();
        $ali->setNext($afaf->setNext($mohsen));
        $request=new Request();
        $request->setId(4);
        /** @var Request $response */
        $response=$ali->handle($request);
        self::assertTrue($response->isDone());
        self::assertEquals(AliHandler::class,$response->getHandler());

    }
    public function testAffafCanHandleRequest(){
        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen =new MohsenHandler();
        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request=new Request();
        $request->setId(9);
        /** @var Request $response */
        $response=$ali->handle($request);
        self::assertTrue($response->isDone());
        self::assertEquals(AfafHandler::class,$response->getHandler());

    }
    public function testMohsenCanHandleRequest(){
        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen =new MohsenHandler();
        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request=new Request();
        $request->setId(27);
        /** @var Request $response */
        $response=$ali->handle($request);
        self::assertTrue($response->isDone());
        self::assertEquals(MohsenHandler::class,$response->getHandler());
    }
    public function testNoOneCanHandleRequest(){
        $ali=new AliHandler();
        $afaf=new AfafHandler();
        $mohsen =new MohsenHandler();
        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request=new Request();
        $request->setId(71);
        /** @var Request $response */
        $response=$ali->handle($request);
        self::assertFalse($response->isDone());
    }


}