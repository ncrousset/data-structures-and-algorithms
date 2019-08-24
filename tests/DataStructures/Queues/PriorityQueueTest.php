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

   
    public function testDequeueWithEmpty() 
    {
        $this->expectExceptionMessage("Queue is empty.");
        $this->expectException(Exception::class);

        $priorityQueue->dequeue();
        
    }



}