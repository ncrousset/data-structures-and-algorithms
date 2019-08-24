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

        return true;
    }

    public function dequeue()
    {
        if(count($this->items) == 0) {
            throw new Exception('Queue is empty.');
        }

        $priorities = array_keys($this->items);
        $keyFirstPriority = min($priorities);

        if(count($this->items[$keyFirstPriority]) === 1) {
          return array_shift($this->items);  
        } 
        
        return array_shift($this->items[$keyFirstPriority]);
    }

    public function next() 
    {
        $priorities = array_keys($this->items);
        $keyFirstPriority = min($priorities);

        return min($this->items[$keyFirstPriority]);
    }



}