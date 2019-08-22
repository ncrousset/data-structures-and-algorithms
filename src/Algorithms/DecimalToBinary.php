<?php

namespace App\Algorithms;

use App\DataStructures\Stacks\Stack;

class DecimalToBinary
{

    private $stack;

    public $binary;

    public function setBinary(int $decimal) : DecimalToBinary
    {
        if($decimal === 0)
            $this->binary = '0';
        
        $this->stack = new Stack;

        $remainder = null;
       

        while($decimal > 0) {
            $remainder = floor($decimal % 2);

            // push in stack
            $this->stack->push($remainder);

            // Divide by 2
            $decimal = floor($decimal / 2);
        } 

        return $this;
    }

    public function getBinary() : string
    {

        $this->binary = ""; 

        while($this->stack->hasElements()) {
            $this->binary .= strval($this->stack->pop());        
        }

        return $this->binary;
    }
}