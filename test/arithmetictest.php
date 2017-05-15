<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\arithmetic;

class URLTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $expectedResult=7;

        $arth = new arithmetic();

        $result = $arth->add(6,1);

        $this->assertEquals($expectedResult, $result);
    }
     public function testminus()
    {
        $expectedResult=5;

        $arth = new arithmetic();

        $result = $arth->minus(6,1);

        $this->assertEquals($expectedResult, $result);
    }
     public function testmultiply()
    {
        $expectedResult=6;

        $arth = new arithmetic();

        $result = $arth->multiply(6,1);

        $this->assertEquals($expectedResult, $result);
    }
     public function testdivide()
    {
        $expectedResult=3;

        $arth = new arithmetic();

        $result = $arth->divide(6,2);

        $this->assertEquals($expectedResult, $result);
    }
}
?>