<?php

require '../vendor/autoload.php';

namespace App\Tests;

use DataStructures\Stacks\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{

    public function testPush()
    {

        var_dump(new Stack);

        $this->assertTrue(true);
    }

}