<?php

namespace Behavioural\Template;

abstract class Page
{
    private array $renderSteps;
    final public function renderPage(){
        $this->renderSteps[]=$this->getPageHeader();
        $this->renderSteps[]=$this->getPageNav();
        $this->renderSteps[]=$this->getPageBody();
        $this->renderSteps[]=$this->getPageFooter();
        return implode(" ",$this->renderSteps);
    }
    abstract public function getPageHeader(): string;
    abstract public function getPageNav(): string;
    abstract public function getPageBody(): string;
    abstract public function getPageFooter(): string;
}