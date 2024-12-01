<?php
// php sebelum 8.4
class user
{
  private $emailAddress;
  public function setEmailAddress($emailAddress)
  {
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
      throw new \InvalidArgumentException('email is not valid');
    }
    $this->emailAddress = $emailAddress;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
}

// try {
//   $user = new user();
//   $user->setEmailAddress('test');
//   echo $user->getEmailAddress();
// } catch (\InvalidArgumentException $e) {
//   echo $e->getMessage();
// }

// contoh pada versi 8.4
class User2
{
  public string $emailAddress {
    set {
      if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        throw new ValueError('email is not valid');
      }
      $this->emailAddress = $value;
    }
  }
}

try {
  $user2 = new User2();
  $user2->emailAddress = 'test';
  echo $user2->emailAddress;
} catch (ValueError $e) {
  echo $e->getMessage();
}