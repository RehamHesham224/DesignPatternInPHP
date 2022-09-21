<?php

namespace Tests;


use Behavioural\Command\CliInvoker;
use Behavioural\Command\DeployCommand;
use Behavioural\Command\GitReceiver;
use Behavioural\Command\RevertCommand;
use PHPUnit\Framework\TestCase;
class CommandTest extends TestCase
{
    private $invoker;
    protected function setUp(): void
    {
      $this->invoker = new CliInvoker();
    }
    public function testcanExcuteDeployCommand(){
        $receiver=new GitReceiver();
        $command=new DeployCommand($receiver);
        $this->invoker->setCommand($command);
        $this->invoker->run();

        $this->assertCount(3, $receiver->getGitLog());
        self::assertEquals(
            [
                'Git - Add',
                ' Git - Commit',
                'Git - Push'
            ],
            $receiver->getGitLog());
    }
    public function testcanRevertCommand()
    {
        $receiver=new GitReceiver();
        $command=new DeployCommand($receiver);
        $this->invoker->setCommand($command);
        $this->invoker->run();
        $command2=new RevertCommand($receiver);
        $this->invoker->setCommand($command2);
        $this->invoker->run();
        $this->assertCount(1, $receiver->getGitLog());
        self::assertEquals(
            [
                'Git - Revert'
            ],
            $receiver->getGitLog());

    }

}