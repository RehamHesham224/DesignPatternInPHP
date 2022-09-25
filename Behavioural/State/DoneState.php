<?php

namespace Behavioural\State;

class DoneState extends State
{
    protected string $state = StateEnum::DONE_STATE;

    public function proceed()
    {
        // Do nothing
        $this->transitionTo(new ArchivedState());
    }
}