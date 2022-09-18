<?php

namespace Strctural\Adapter;

class EngineAdapter implements EngineInterface
{
    private $engine;
    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
        return $this->engine->startTurbo();
    }
}