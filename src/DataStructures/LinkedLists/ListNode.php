<?php

namespace App\DataStructures\LinkedLists;

class ListNode 
{
    public $data;

    public $next;

    public function __construct($data) 
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}
