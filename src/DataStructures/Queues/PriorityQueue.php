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

    public function hasElements() : bool
    {
        return ($this->size() > 0) ? true : false;
    }

    public function size() : int
    {
        return count($this->items);
    }

    public function print() : string
    {

        if($this->hasElements()) {
            $stringItems = "";

            foreach($this->items as $itemsForPriority) {
                $stringItems .=  implode("| ", $itemsForPriority);
            }

            return $stringItems;
        }

        return "Null";
    }

    public function clear() : void
    {
        $this->items = [];
    }



}