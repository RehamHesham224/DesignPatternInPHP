<?php

namespace Behavioural\Command;

class DeployCommand implements Command
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
        $this->gitReceiver->gitAdd();
        $this->gitReceiver->gitCommit();
        $this->gitReceiver->gitPush();
    }
}