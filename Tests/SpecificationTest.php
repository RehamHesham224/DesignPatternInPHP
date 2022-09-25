<?php

namespace Tests;

use Behavioural\Specification\AgeSpecification;
use Behavioural\Specification\ANDSpecification;
use Behavioural\Specification\CV;
use Behavioural\Specification\LanguageSpecification;
use Behavioural\Specification\ORSpecification;
use Behavioural\Specification\SkillSpecification;
use Behavioural\Specification\TechSpecification;
use Behavioural\Specification\YearOfExperienceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    private function getSeniorBackendDevSpecification()
    {
        $yearOfEx=new YearOfExperienceSpecification(5);
        $phpSpec=new LanguageSpecification('php');
        $ageSpecification=new AgeSpecification(25,39);
        $javaSpec=new LanguageSpecification('java');
        $gitSpec=new TechSpecification('git');
        $psSkill=new SkillSpecification('problem-solving');
        $seniorSpecification=new ANDSpecification(
            $yearOfEx,$phpSpec,$ageSpecification,$javaSpec,$gitSpec,$psSkill
        );
        return $seniorSpecification;
    }
    private function getJuniorBackendDevSpecification()
    {
        $yearOfEx=new YearOfExperienceSpecification(5);
        $phpSpec=new LanguageSpecification('php');
        $javaSpec=new LanguageSpecification('java');
        $gitSpec=new TechSpecification('git');
        $ageSpecification=new AgeSpecification(25,39);
        $psSkill=new SkillSpecification('problem-solving');
        $juniorSpecification=new ANDSpecification(
            $yearOfEx,
            $ageSpecification,
            new ORSpecification($phpSpec,$javaSpec),
            $gitSpec,$psSkill
        );
        return $juniorSpecification;
    }
    public function testCanMatchCVWithSeniorSpecification()
    {
        $cv=new CV('6',['problem-solving'],30,['git','docker'],['java','php']);
        $this->assertTrue($this->getSeniorBackendDevSpecification()->isSatisfiedBy($cv));
    }

}