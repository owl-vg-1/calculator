<?php

namespace App;

class Calculator
{

    public function sum(...$values)
    {
        $s = 0;

        foreach ($values as $value) {
            $s += $value;
        }

        return $s;
    }

    public function pow($base, $exp)
    {
        return pow($base, $exp);
    }

    public function minus(float $a, float $b): float {
        return ($a-$b); 
    }

    public function divide(float $a, float $b): float {
        return ($a/$b); 
    }

    public function multiply(float $a, float $b): float {
        return ($a*$b);
    }

    public function per(float $a, float $b): float {
        return ($a%$b);
    }

    public function equality($a, $b): bool {
        if ($a == $b) {
            return true;
        }
    }

    public function more($a, $b): bool {
        if ($a > $b) {
            return true;
        }
    }
    
    public function smaller($a, $b): bool {
        if ($a < $b) {
            return true;
        }
    }

}