<?php

namespace Strctural\Facade\Converter;

class Photo
{
    private $type='';

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }
    public function __toString(): string
    {
        return $this->getType() ;
    }

}