<?php

namespace Strctural\Facade\Converter;

class Animator
{
    public function animatePhoto(Photo $photo){
    return $photo . "animate";
    }
}