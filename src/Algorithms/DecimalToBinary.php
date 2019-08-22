<?php

namespace App\Algorithms;

use App\DataStructures\Stacks\Stack;

class DecimalToBinary
{
    public function getBinary(int $decimal) : string
    {
        if($decimal === 0) return '0';

        $stack = new Stack;
        $remainder = null;
        $binaryString = "";

        while($decimal > 0) {
            $remainder = floor($decimal % 2);

            // push in stack
            $stack->push($remainder);

            // Divide by 2
            $decimal = floor($decimal / 2);
        } 

        while($stack->hasElements()) {
            $binaryString .= strval($stack->pop());        
        }

        return $binaryString;
    }
}