<?php

use Strctural\Facade\Converter\Photo;
use  \Strctural\Facade\ConverterFacade;
use PHPUnit\Framework\TestCase;
class FacadeTest extends TestCase
{
    private ConverterFacade $facade;

    protected function setUp():void
    {
        $this->facade=new ConverterFacade();
    }
    public function testConvertToGIF(){
        $photo = new Photo();
        $this->facade->GIFConvert($photo);
        $this->assertEquals('.GIFanimate', $photo->getType());
    }

}