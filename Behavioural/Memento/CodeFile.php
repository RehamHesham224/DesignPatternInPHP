<?php

namespace Behavioural\Memento;

class CodeFile
{
    private $lines=[];
    public function __construct()
    {
        $this->lines[]="<?php";
    }

    /**
     * @return array
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    public function addNewLine($line): void
    {
        $this->lines[]=$line;
    }
}