<?php

namespace Strctural\Mapper;

class DataMapper
{
    private $manager;
    public function __construct(StorageManager $manager)
    {
        $this->manager = $manager;
    }
    public function findById($id){
        return $this->manager->find($id);
    }
    public function saveUser(User $user){
        return $this->manager->save(
            [
                $user->getId()=>
                ['username' => $user->getUsername(),'password' => $user->getPassword()],
            ]
        );
    }

}