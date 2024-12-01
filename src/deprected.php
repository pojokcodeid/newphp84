<?php

// sebelum php 8.4
class PhpVersion
{
  /**
   * @deprecated 8.3 use PhpVersion::getVersion() instaead
   */
  public function getPhpVersion(): string
  {
    return $this->getVersion();
  }

  public function getVersion(): string
  {
    return '8.3';
  }
}

$phpVersion = new PhpVersion();
echo $phpVersion->getPhpVersion();

// PADA PHP 8.4

class PhpVersion2
{
  #[\Deprecated(
    message: "use PhpVersion::getVersion() instead",
    since: "8.4",
  )]
  public function getPhpVersion(): string
  {
    return $this->getVersion();
  }

  public function getVersion(): string
  {
    return '8.4';
  }
}

$phpVersion2 = new PhpVersion2();
echo $phpVersion2->getPhpVersion();