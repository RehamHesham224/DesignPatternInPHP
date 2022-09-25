<?php
namespace Tests;

use Behavioural\Memento\CareTracker;
use Behavioural\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    private $originator;
    protected function setUp(): void
    {
    $this->originator = new Originator();
    $this->careTracker=new CareTracker($this->originator);
    }

    public function testCanSaveCodeFileUpdates(){
        $this->originator->addNewEcho();
        $this->originator->addNewEcho();
        $this->careTracker->commit();

        $codeFile=$this->originator->getCodeFile();
        $this->assertEquals(3,count($codeFile->getLines()));
    }
    public function testCanRestoreCodeFileUpdates(){
        $this->originator->addNewEcho();
        $this->originator->addNewEcho();
        $this->careTracker->commit();
        $this->originator->addNewEcho();
        $this->originator->addNewEcho();
        $this->careTracker->rollBack();

        $codeFile=$this->originator->getCodeFile();
        $this->assertEquals(3,count($codeFile->getLines()));
    }
}