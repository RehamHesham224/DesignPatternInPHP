<?php

namespace Behavioural\Iterator;

class City
{
    private string $name;
    private string $area;

    public function __construct(string $name, string $area)
    {
        $this->name = $name;
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

}