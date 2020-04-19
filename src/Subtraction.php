<?php

class Subtraction
{
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    public function sub($firstNumber, …$numbers)
    {
        $sub = $firstNumber;

        foreach ($numbers as $number) {
            $sub -= $number;
        }

        return $sub;
    }
}
