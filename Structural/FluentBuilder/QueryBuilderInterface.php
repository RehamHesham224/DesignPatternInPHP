<?php

namespace Strctural\FluentBuilder;

interface QueryBuilderInterface
{
    public function select(array $columns);
    public function from(string $table ,string $alias);
    public function where(array $conditions);
}