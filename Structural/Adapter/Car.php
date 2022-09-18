<?php

namespace Strctural\Adapter;

class Car
{
 protected $engine;
 public function __construct(EngineInterface $engine)
 {
     $this->engine = $engine;
 }
 public function start(){
     return $this->engine->startEngine();
 }
}