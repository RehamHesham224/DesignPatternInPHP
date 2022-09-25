<?php

namespace Others\Repository;

class ArrayEntityManager implements PersistenceInterface
{
    private array $db;
    public function __construct(array $db)
    {
        $this->db = $db;
    }

    public function persist(array $data): void
    {
       $this->db[]=$data;
    }

    public function retrieve(int $id):array
    {
        return $this->db[$id];
    }

    public function delete(int $id): void
    {
        unset($this->db[$id]);
    }
}