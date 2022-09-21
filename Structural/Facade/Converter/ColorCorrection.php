<?php

namespace Strctural\Facade\Converter;

class ColorCorrection
{
    public function correctColor(Photo $photo){
    return $photo . 'color-correction';
    }
}