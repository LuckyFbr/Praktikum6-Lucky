<?php

function intToRoman(int $value)
{
    $map = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    $result = '';

    while ($value > 0) {
        foreach ($map as $roman => $int) {
            if ($value >= $int) {
                $value -= $int;
                $result .= $roman;
                break;
            }
        }
    }

    return $result;
}

echo intToRoman(40); // LVIII

echo "<br>";

echo intToRoman(1994); // MCMXCIV