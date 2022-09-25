<?php

namespace Behavioural\Memento;

class Originator
{
    private $codeFile;
    public function __construct()
    {
        $this->codeFile =new CodeFile();
    }
    public function addNewEcho(){
        $this->codeFile->addNewLine('Echo Test New Line');
    }
    public function addNewVar(){
        $this->codeFile->addNewLine('$X = 15');
    }
    public function save():MementoInterface
    {
        return new ConcreteMemento($this->codeFile);
    }
    public function CtrlZ(MementoInterface $memento):MementoInterface
    {
        $this->codeFile = $memento->getSnapshot();
    }
    public function getCodeFile():CodeFile
    {
        return $this->codeFile;
    }

}