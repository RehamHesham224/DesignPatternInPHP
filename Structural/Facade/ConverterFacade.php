<?php

namespace Strctural\Facade;


use Strctural\Facade\Converter\Animator;
use Strctural\Facade\Converter\ColorCorrection;
use Strctural\Facade\Converter\GIFConverter;
use Strctural\Facade\Converter\JPEGConverter;
use Strctural\Facade\Converter\Photo;

class ConverterFacade
{
    public function GIFConvert(Photo $photo){
        $animator=new Animator();
        $gifConverter=new GIFConverter($animator);
        return $gifConverter->convertToGIF($photo);
    }
    public function JPEGConvert(Photo $photo){
        $colorCorrection=new ColorCorrection($photo);
        $photo->setType($colorCorrection->correctColor($photo));
        $jpgConverter=new JPEGConverter();
        return $jpgConverter->convertToJPEG($photo);
    }

}