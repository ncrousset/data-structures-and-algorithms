<?php

namespace App\DataStructures;


use PHPUnit\Framework\TestCase;
use App\DataStructures\Stacks\Stack;

class StackTest extends TestCase
{

    protected $stack;

    protected function setUp(): void 
    {
        $this->stack = new Stack;
    }

    public function testPushItems()
    {
        // first item on the stack
        $this->assertTrue($this->stack->push('first'));
        
        //second item on the stack
        $this->assertTrue($this->stack->push('second'));

        // third item on the stack
        $this->assertTrue($this->stack->push('third'));

        return $this->stack;
    }


    /**
     * @depends testPushItems
     */
    public function testGetLastItem(Stack $stack)
    {
        $lastItem = $stack->last();
        $this->assertEquals($lastItem, 'third');
    }


     /**
     * @depends testPushItems
     */
    public function testRemoveLastItemWithPop(Stack $stack)
    {
        $this->assertTrue($stack->pop());
        $this->assertEquals($stack->last(), 'second');
    }

}