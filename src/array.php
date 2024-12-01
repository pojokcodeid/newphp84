<?php

// sebelum php 8.4
// mencari array yang dimulai dengan huruf c
$animal = null;
foreach (['dog', 'cat', 'cow', 'duck', 'goose'] as $value) {
  if (str_starts_with($value, 'c')) {
    $animal = $value;
    break;
  }
}
var_dump($animal);

// pada php 8.4
$animal = array_find(
  ['dog', 'cat', 'cow', 'duck', 'goose'],
  static fn(string $value): bool => str_starts_with($value, 'c')
);
var_dump($animal);