<?php

namespace App\DataStructures\Queues;

class PriorityQueue 
{

    protected $items = [];

    public function enqueue($priority, $value)
    {
        if(!is_int($priority) || $priority < 1) {
            throw new \InvalidArgumentException('The priority must be a positive interger');
        }

        $this->items[$priority][] = $value;
    }

    public function dequeue()
    {
        if(count($this->items) == 0) {
            throw new Exception('Queue is empty.');
        }

        $maxPriority = max($this->items);

        return array_shift($maxPriority);
    }



}