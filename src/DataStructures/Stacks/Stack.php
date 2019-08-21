<?php

namespace App\DataStructures\Stacks;

class Stack 
{

    private $items = [];

    public function push($element) : bool
    {
        return array_push($this->items, $element);
    }

    public function pop() : bool
    {
        return (array_pop($this->items)) != null ? true : false;
    }

    public function last() 
    {
        return $this->items[count($this->items) - 1];
    }   

    public function hasElements() : bool
    {
        return (count($this->items) > 0) ? false :true;
    }

    public function size() : integer 
    {
        return count($this->items);
    }

    public function print() : void
    {
        echo ($this->size > 0) ? implode(", ", $this->items) : 'Null';
    }

    public function clear() : void
    {
        $this->items = [];
    }
}