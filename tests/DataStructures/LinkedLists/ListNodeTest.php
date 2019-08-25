<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;
use App\DataStructures\LinkedLists\ListNode;

class ListNodeTest extends TestCase
{

    public function testCreateInstanceAndReadNode()
    {

        $data = [10, 5];

        $listNode = new ListNode($data);
        
        $this->assertEquals($listNode->readNode(), $data);
    }

}