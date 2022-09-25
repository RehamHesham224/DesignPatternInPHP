<?php

namespace Behavioural\Visitor;

interface VisitorInterface
{
    //method overloading is not on php
    public function visitCairo(Cairo $cairo);
    public function visitParis(Paris $Paris);
    public function visitLondon(London $London);
}