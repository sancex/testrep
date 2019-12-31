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
    $db="dev_cex_2";
    $uname="dev_taproot";
    $pwd="taproot";
    $conn=mysqli_connect("10.204.2.26",$uname,$pwd,$db);
    $res = mysqli_query($conn,"select * from boxes limit 1");
    $row = mysqli_fetch_row($res);
    return $row;
  }
}
