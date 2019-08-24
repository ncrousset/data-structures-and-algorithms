<?php

namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use App\Algorithms\DecimalToBinary;

class DecimalToBinaryTest extends TestCase
{
    public function testGetBinarys()
    {
        $decimalToBinary = new DecimalToBinary();

        $this->assertEquals($decimalToBinary->setBinary(0)->binary, '0');
        $this->assertEquals($decimalToBinary->setBinary(1)->getBinary(), '1');
        $this->assertEquals($decimalToBinary->setBinary(2)->getBinary(), '10');
        $this->assertEquals($decimalToBinary->setBinary(3)->getBinary(), '11');
        $this->assertEquals($decimalToBinary->setBinary(4)->getBinary(), '100');
        $this->assertEquals($decimalToBinary->setBinary(5)->getBinary(), '101');
        $this->assertEquals($decimalToBinary->setBinary(6)->getBinary(), '110');
        $this->assertEquals($decimalToBinary->setBinary(7)->getBinary(), '111');
        $this->assertEquals($decimalToBinary->setBinary(8)->getBinary(), '1000');
        $this->assertEquals($decimalToBinary->setBinary(9)->getBinary(), '1001');
        $this->assertEquals($decimalToBinary->setBinary(10)->getBinary(), '1010');
        $this->assertEquals($decimalToBinary->setBinary(11)->getBinary(), '1011');
        $this->assertEquals($decimalToBinary->setBinary(12)->getBinary(), '1100');
        $this->assertEquals($decimalToBinary->setBinary(13)->getBinary(), '1101');
        $this->assertEquals($decimalToBinary->setBinary(14)->getBinary(), '1110');
        $this->assertEquals($decimalToBinary->setBinary(15)->getBinary(), '1111');

    }
}

