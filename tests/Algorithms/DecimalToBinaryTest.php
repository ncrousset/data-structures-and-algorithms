<?php

namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use App\Algorithms\DecimalToBinary;

class DecimalToBinaryTest extends TestCase
{
    public function testGetBinarys()
    {
        $decimalToBinary = new DecimalToBinary();

        $this->assertEquals($decimalToBinary->getBinary(0), '0000');
        $this->assertEquals($decimalToBinary->getBinary(1), '0001');
        $this->assertEquals($decimalToBinary->getBinary(2), '0010');
        $this->assertEquals($decimalToBinary->getBinary(3), '0011');
        $this->assertEquals($decimalToBinary->getBinary(4), '0100');
        $this->assertEquals($decimalToBinary->getBinary(5), '0101');
        $this->assertEquals($decimalToBinary->getBinary(6), '0110');
        $this->assertEquals($decimalToBinary->getBinary(7), '0111');
        $this->assertEquals($decimalToBinary->getBinary(8), '1000');
        $this->assertEquals($decimalToBinary->getBinary(9), '1001');
        $this->assertEquals($decimalToBinary->getBinary(10), '1010');
        $this->assertEquals($decimalToBinary->getBinary(11), '1011');
        $this->assertEquals($decimalToBinary->getBinary(12), '1100');
        $this->assertEquals($decimalToBinary->getBinary(13), '1101');
        $this->assertEquals($decimalToBinary->getBinary(14), '1110');
        $this->assertEquals($decimalToBinary->getBinary(15), '1111');

    }
}