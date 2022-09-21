<?php

namespace Strctural\Facade\Converter;

class JPEGConverter
{
    public function convertToJPEG(Photo $photo){
        $photo->setType($photo->getType() . ".JPEG");
       return $photo;
    }

}