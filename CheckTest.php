<?php
use PHPUnit\Framework\TestCase;

Class CheckTest extends TestCase{
  public function testCheckDbFn(){
    $a = new Check();
    $s=$a->checkDb();
    $this->assertInternalType('array',$s);
  }
}
Class Check{
  public function checkDb(){
    $row=[];
    return $row;
  }
}
