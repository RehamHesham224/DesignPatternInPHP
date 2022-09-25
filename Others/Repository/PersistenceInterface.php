<?php

namespace Others\Repository;

interface PersistenceInterface
{
    public function persist(array $data):void;
    public function retrieve(int $id):array;
    public function delete(int $id):void;
}