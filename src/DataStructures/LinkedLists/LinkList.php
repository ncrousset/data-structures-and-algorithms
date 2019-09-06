<?php

namespace App\DataStructures\LinkedLists;

use App\DataStructures\LinkedLists\ListNode;

class LinkList
{
    protected $firstNode;

    protected $lastNode;

    private  $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;

        $this->count = 0;
    }

    public function isEmtyp(): bool
    {
        return is_null($this->firstNode);
    }

    public function insertFirstNode($data) : void 
    {
        $listNode = new ListNode($data);
        $listNode->next = $this->firstNode;
        $listNode->firstNode = &$listNode;

        if(is_null($this->lastNode)) 
            $this->lastNode = &$listNode;

        $this->count++;
    }

    public function insertLastNode($data) : void
    {
        if(!is_null($this->firstNode)) {
            $firstNode = new ListNode($data);
            $this->lastNode->next = $firstNode;
            $firstNode->next = null;
            $this->lastNode = &$firstNode;
            $this->count++;
        } else {
            $this->insertFirstNode($data);
        }
    }

    public function deleteFirstNode()
    {
        $temp = $this->firstNode;
        $this->firstNode = $this->firstNode->next;

        if(!is_null($this->firstNode)) $this->count--;

        return $temp;
    }

    public function deleteLastNode() : void
    {
        if(!is_null($this->firstNode)) {

            if($this->firstNode->next == null){
                $this->firstNode = null;
                $this->count--;
            } else {
                $previousNode = $this->firstNode;
                $currentNode = $this->firstNode->next;
 
                while($currentNode->next != null) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
 
                $previousNode->next = null;
                $this->count--;
            }
        }
    }

    public function deleteNode($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
 
        while($current->data != $key) {
            if($current->next == null)
                return null;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }
 
        if($current == $this->firstNode) {
            if($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if($this->lastNode == $current) {
                 $this->lastNode = $previous;
            }
            
            $previous->next = $current->next;
        }

        $this->count--;  
    }

    public function find($key) 
    {
        $current = $this->firstNode;
        
        while($current->data != $key){
            if($current->next == null)
                return null;
            else
                $current = $current->next;
        }

        return $current;
    }

    public function readNode($nodePos)
    {
        if($nodePos <= $this->count) {

            $current = $this->firstNode;
            $pos = 1;
            
            while($pos != $nodePos){
                if(is_null($current->next))
                    return null;
                else
                    $current = $current->next;
 
                $pos++;
            }

            return $current->data;
        } 
        
        
        return null;
    }
    
}