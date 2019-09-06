<?php

namespace Tests\DataStructures\Queues;


use PHPUnit\Framework\TestCase;
use App\DataStructures\Queues\Queue;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue;
    }


    public function testPushItems() : Queue
    {
        // first item on the stack
        $this->assertTrue($this->queue->enqueue('first'));
        
        //second item on the stack
        $this->assertTrue($this->queue->enqueue('second'));

        // third item on the stack
        $this->assertTrue($this->queue->enqueue('third'));

        return $this->queue;
    }


    /**
     * @depends testPushItems
     */
    public function testGeFrontItem(Queue $queue)
    {
        $frontItem = $queue->front();
        $this->assertEquals($frontItem, 'first');
    }


     /**
     * @depends testPushItems
     */
    public function testRemoveFrontItemWithDequeue(Queue $queue)
    {

        $this->assertEquals($queue->dequeue(), 'first');   
        $this->assertEquals($queue->dequeue(), 'second');    
    }

     /**
     * @depends testPushItems
     */
    public function testHasElementIsTrue(Queue $queue)
    {
        $this->assertTrue($queue->hasElements());
    }

    public function testHasElementIsFalse()
    {
        $this->assertTrue(!(new Queue)->hasElements());
    }

    public function testSizeZero()
    {
        $this->assertEquals((new Queue)->size(), 0);
    }

    public function testSizeNotZero()
    {
        $queue = new Queue;
        $queue->enqueue('first');

        $this->assertEquals($queue->size(), 1);
    }

    public function testPrintStack()
    {
        $queue = new Queue;
        $queue->enqueue('first');

        $this->assertEquals($queue->print(), 'first');
    }

    public function testPrintStackNull()
    {
        $queue= new Queue;
      
        $this->assertEquals($queue->print(), 'Null');
    }

    public function testClearStack()
    {
        $queue = new Queue;
        $queue->enqueue('first');
        $queue->clear();

        $this->assertEquals($queue->size(), 0);
    }


}