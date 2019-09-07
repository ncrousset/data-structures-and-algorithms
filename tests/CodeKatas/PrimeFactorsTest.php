<?php

namespace Tests\CodeKatas;

use PHPUnit\Framework\TestCase;
use App\CodeKatas\PrimeFactors;


class PrimeFactorsTest extends TestCase
{

    protected $primeFactors;

    public function setUp(): void
    {
        parent::setUp();
        $this->primeFactors = new PrimeFactors;
    }

    public function testItReturnsAnEmptyArrayFor1()
    {
        $generate = $this->primeFactors->generate(1);
        $this->assertIsArray($generate);
        $this->assertEquals($generate, []);
    }

    public function testItComputesPrimeFactorsOf2()
    {
        $this->assertEquals( $this->primeFactors->generate(2), [2]);
    }

    public function testItComputesPrimeFactorsOf3()
    {
        $this->assertEquals( $this->primeFactors->generate(3), [3]);
    }

    public function testItComputesPrimeFactorsOf4()
    {
        $this->assertEquals( $this->primeFactors->generate(4), [2, 2]);
    }

    public function testItComputesPrimeFactorsOf5()
    {
        $this->assertEquals( $this->primeFactors->generate(5), [5]);
    }

    public function testItComputesPrimeFactorsOf6()
    {
        $this->assertEquals( $this->primeFactors->generate(6), [2, 3]);
    }

    public function testItComputesPrimeFactorsOf8()
    {
        $this->assertEquals( $this->primeFactors->generate(8), [2, 2, 2]);
    }

    public function testItComputesPrimeFactorsOf9()
    {
        $this->assertEquals( $this->primeFactors->generate(3), [3, 3]);
    }

    public function testItComputesPrimeFactorsOf100()
    {
        $this->assertEquals( $this->primeFactors->generate(100), [2, 2, 5, 6]);
    }
}
