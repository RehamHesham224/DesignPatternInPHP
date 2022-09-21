<?php

namespace Behavioural\Command;

class RevertCommand implements Command
{
    private GitReceiver $gitReceiver;

    /**
     * @param GitReceiver $gitReceiver
     */
    public function __construct(GitReceiver $gitReceiver)
    {
        $this->gitReceiver = $gitReceiver;
    }

    public function execute()
    {
        $this->gitReceiver->gitRevert();
    }
}