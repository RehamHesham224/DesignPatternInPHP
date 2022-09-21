<?php

namespace Behavioural\ChainOfResponsibility;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    public function handle(Request $request);
}