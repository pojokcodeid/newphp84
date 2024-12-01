<?php

// contoh sebelum php 8.4

class User
{
  private int $userId;
  public function __construct(int $userId)
  {
    $this->userId = $userId;
  }

  public function getUserId(): int
  {
    return $this->userId;
  }

  private function setUserId(int $userId): void
  {
    $this->userId = $userId;
  }
}

$user = new User(123);
echo $user->getUserId() . PHP_EOL;
// $user->setUserId(456);

class User2{
  public private(set) int $userId;

  public function __construct(int $userId){
    $this->userId = $userId;
  }
}

$user2=new User2(123);
echo $user2->userId.PHP_EOL;
$user2->userId=1212;