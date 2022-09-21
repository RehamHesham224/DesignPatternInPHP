<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;
use Strctural\Composite\BigBox;
use Strctural\Composite\GiftBox;
use Strctural\Composite\SimpleBox;

class CompositeTest extends TestCase
{

    public function testGetTotalPriceOfPackageTree(){
        $item1=new SimpleBox(300);
        $item2=new SimpleBox(400);
        $package=new BigBox([$item1,$item2]);
        $this->assertEquals(700,$package->getPrice());
    }
    public function testGetTotalPriceOfPackageTreeWithAddActions(){
        $item1=new SimpleBox(300);
        $item2=new SimpleBox(400);
        $package=new BigBox([$item1,$item2]);
        $gift1=new GiftBox(100,50);
        $package->add($gift1);
        $this->assertEquals(850,$package->getPrice());
    }
    public function testGetTotalPriceOfPackageTreeWithREmoveActions(){
        $item1=new SimpleBox(300);
        $item2=new SimpleBox(400);
        $item3=new SimpleBox(500);
        $package=new BigBox([$item1,$item2]);
        $package->remove($item3);
        $this->assertEquals(700,$package->getPrice());
    }
}