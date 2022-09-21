<?php

namespace Behavioural\Command;

class CliInvoker
{
    private Command $command;
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }
    public function run(): void
    {
        $this->command->execute();
    }
}