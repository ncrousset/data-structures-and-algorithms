<?php

namespace Tests\CodeKatas;

use PHPUnit\Framework\TestCase;
use App\CodeKatas\PrimeFactors;


class PrimeFactorsTest extends TestCase
{
    public function testItReturnsAnEmptyArrayFor1()
    {
        $generate = (new PrimeFactors())->generate(1);
        $this->assertIsArray($generate);
        $this->assertEquals($generate, []);
    }
}
