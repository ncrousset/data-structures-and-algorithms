<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;
use App\DataStructures\Queues\PriorityQueue;

class PriorityQueueTest extends TestCase
{
    protected $priorityQueue;

    protected function setUp(): void
    {
        $this->priorityQueue = new PriorityQueue;
    }

    public function testPushItems() : PriorityQueue
    {
        // first item on the stack
        $this->assertTrue($this->priorityQueue->enqueue(1, 1));
        
        //second item on the stack
        $this->assertTrue($this->priorityQueue->enqueue(1, 2));

        // third item on the stack
        $this->assertTrue($this->priorityQueue->enqueue(2,8));

        $this->assertTrue($this->priorityQueue->enqueue(2,9));

        // echo var_dump($this->priorityQueue);

        return $this->priorityQueue;
    }

     /**
     * @depends testPushItems
     */
    public function testRemoveFrontItemWithDequeue(PriorityQueue $priorityQueue)
    {
    
        $priorityQueue->dequeue();
        $this->assertEquals($priorityQueue->next(), 2); 


        $priorityQueue->dequeue();
        $this->assertEquals($priorityQueue->next(), 8); 

        $priorityQueue->dequeue();
        $this->assertEquals($priorityQueue->next(), 9); 
    
    }

     /**
     * @depends testPushItems
     */
    public function testEnqueueWithNoIntPriority(PriorityQueue $priorityQueue) 
    {
        $this->expectExceptionMessage("The priority must be a positive interger");
        $this->expectException(InvalidArgumentException::class);
        $this->priorityQueue->enqueue('ere',9);
    }

     /**
     * @depends testPushItems
     */
    public function testHasElementIsTrue(PriorityQueue $priorityQueue)
    {
        $this->assertTrue($priorityQueue->hasElements());
    }

    public function testHasElementIsFalse()
    {
        $this->assertTrue(!(new PriorityQueue)->hasElements());
    }

    public function testSizeZero()
    {
        $this->assertEquals((new PriorityQueue)->size(), 0);
    }

    public function testSizeNotZero()
    {
        $priorityQueue = new PriorityQueue;
        $priorityQueue->enqueue(1, 'first');
 
        $this->assertEquals($priorityQueue->size(), 1);
    }

    public function testPrintQueue()
    {
        $priorityQueue = new PriorityQueue;
        $priorityQueue->enqueue(1, 'first');
        $this->assertEquals($priorityQueue->print(), 'first');
    }

    public function testPrintQueueNull()
    {
        $priorityQueue= new PriorityQueue;
      
        $this->assertEquals($priorityQueue->print(), 'Null');
    }

    public function testClearQueue()
    {
        $priorityQueue = new PriorityQueue;
        $priorityQueue->enqueue(1,'first');
        $priorityQueue->clear();

        $this->assertEquals($priorityQueue->size(), 0);
    }

   


}