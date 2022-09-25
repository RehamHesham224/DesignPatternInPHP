<?php

namespace Behavioural\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(CV $cv) :bool;
}