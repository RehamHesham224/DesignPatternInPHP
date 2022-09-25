<?php

namespace Tests;

use Others\Repository\ArrayEntityManager;
use Others\Repository\PersistenceInterface;
use Others\Repository\User;
use Others\Repository\UserDataMapper;
use Others\Repository\UserRepository;
use Others\Repository\UserRepositoryInterface;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    private PersistenceInterface $persistence;
    private UserRepositoryInterface $userRepository;
    protected function setUp(): void
    {
        $dataSource=[
            1=>['name'=>'foo', 'email'=>'foo@bar.com','password'=>'foo@bar.com']
        ];
        $this->persistence=new ArrayEntityManager($dataSource);
        $this->userRepository=new UserRepository($this->persistence,new UserDataMapper());
    }
    public function testCanFindUserById()
    {
        $user=$this->userRepository->find(1);
        self::assertInstanceOf(User::class,$user);
        self::assertEquals('foo',$user->getName());
    }
    public function testCanSaveUserById()
    {
      $user=new User();
      $user->setEmail('rehamhesham680@gmail.com')
      ->setPassword('###')
      ->setName('Reham');
      self::assertTrue($this->userRepository->save($user));
      $newUser=$this->userRepository->find(2);
      self::assertInstanceOf(User::class, $newUser);
      self::assertEquals('Reham',$newUser->getName());
    }
}