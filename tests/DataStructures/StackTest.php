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

    public function testPushItems() : Stack
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

     /**
     * @depends testPushItems
     */
    public function testHasElementIsTrue(Stack $stack)
    {
        $this->assertTrue($stack->hasElements());
    }

    public function testHasElementIsFalse()
    {
        $this->assertTrue(!(new Stack)->hasElements());
    }

    public function testSizeZero()
    {
        $this->assertEquals((new Stack)->size(), 0);
    }

    public function testSizeNotZero()
    {
        $stack = new Stack;
        $stack->push('first');

        $this->assertEquals($stack->size(), 1);
    }

    public function testPrintStack()
    {
        $stack = new Stack;
        $stack->push('first');

        $this->assertEquals($stack->print(), 'first');
    }

    public function testPrintStackNull()
    {
        $stack = new Stack;
      
        $this->assertEquals($stack->print(), 'Null');
    }

    public function testClearStack()
    {
        $stack = new Stack;
        $stack->push('first');
        $stack->clear();

        $this->assertEquals($stack->size(), 0);
    }

}