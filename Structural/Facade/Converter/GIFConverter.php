<?php

namespace Strctural\Facade\Converter;

class GIFConverter
{
    private Animator $animator;

    public function __construct(Animator $animator)
    {

        $this->animator = $animator;
    }
    public function convertToGIF(Photo $photo){
        $type=$photo->getType() . ".GIF";
        $photo->setType($type);
        $photo->setType($this->animator->animatePhoto($photo));
        return  $photo;
    }
}