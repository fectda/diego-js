<?php

use DiegoJS\FirstClass;

class FirstTest extends PHPUnit_Framework_TestCase {

  public function testFirstClassIsAGoogDay()
  {
    $first_class = new FirstClass;
    $this->assertTrue($first_class->isAGoogDay());

  }

}
