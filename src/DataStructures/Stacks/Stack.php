<?php

namespace App\DataStructures\Stacks;

class Stack 
{

    private $items = [];

    public function push($element) : bool
    {
        return array_push($this->items, $element);
    }

    public function pop()
    {
        return array_pop($this->items);
    }

    public function last() 
    {
        return $this->items[count($this->items) - 1];
    }   

    public function hasElements() : bool
    {
        return (count($this->items) > 0) ? true :false;
    }

    public function size() : int 
    {
        return count($this->items);
    }

    public function print() : string
    {
        return (count($this->items) > 0) ? implode(", ", $this->items) : 'Null';
    }

    public function clear() : void
    {
        $this->items = [];
    }
}