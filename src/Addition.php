<?php

class Addition
{
    public function add($argument1, $argument2)
    {
        return $argument1 + $argument2;
    }

    public function sum(…$numbers)
    {
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }
}
