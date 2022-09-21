<?php

namespace Strctural\Mapper;

class StorageManager
{
    private array $data=[];
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function find(string $id){
        return $this->data[$id];
    }
    public function save(array $user){
        $this->data[]=$user;
        return true;
    }

}