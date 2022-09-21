<?php

namespace Strctural\FluentBuilder;

class QueryBuilder implements QueryBuilderInterface
{
    private array $columns;
    private array $conditions;
    private string $table;
    private string $alias;

    public function select(array $columns):self
    {
        $this->columns = $columns;
        return $this;
    }

    public function from(string $table, string $alias):self
    {
        $this->table = $table;
        $this->alias = $alias;
        return $this;
    }

    public function where(array $conditions):self
    {
        $this->conditions = $conditions;
        return $this;
    }
    public function getSQL(){
        return sprintf('SELECT %s FROM %s As %s WHERE %s ',
            implode(', ', $this->columns),
            $this->table,
            $this->alias,
            implode(' AND ', $this->conditions)
        );
    }
}