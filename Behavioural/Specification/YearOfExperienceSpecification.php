<?php

namespace Behavioural\Specification;

class YearOfExperienceSpecification implements SpecificationInterface
{
    private int $minYears;

    public function __construct(int $minYears)
    {
        $this->minYears = $minYears;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        return  $cv->getYOfEx() >= $this->minYears;
    }

}