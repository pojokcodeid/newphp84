<?php

class MyClass
{
  public function __construct(private int $foo)
  {
    echo 'Accessing a method triggers initialization' . PHP_EOL;
  }

  public function getFoo(): int
  {
    return $this->foo;
  }
}

$initializer = static function (MyClass $ghost): void {
  $ghost->__construct(123);
};

$reflector = new ReflectionClass(MyClass::class);
$object = $reflector->newLazyGhost($initializer);

echo 'Lazy objeck created' . PHP_EOL;
echo 'call lazy objeck ' . $object->getFoo() . PHP_EOL;