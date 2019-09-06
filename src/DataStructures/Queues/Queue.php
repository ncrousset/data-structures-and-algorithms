<?php

namespace App\DataStructures\Queues;

class Queue 
{
    private $items = [];

    public function enqueue($item) : bool
    {
        return array_push($this->items, $item);
    }

    public function dequeue() 
    {
        return array_shift($this->items);
    }

    public function front() 
    {
        return $this->items[0];
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
        return $this->hasElements() ? implode(", ", $this->items) : 'Null';
    }

    public function clear() : void
    {
        $this->items = [];
    }

}