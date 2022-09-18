<?php

namespace Creational\Prototype;

abstract class AbstractCarPrototype
{
    protected $model;
    private $flag;

    abstract public function __clone();

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param mixed $flag
     */
    public function setFlag($flag): void
    {
        $this->flag = $flag;
    }


}