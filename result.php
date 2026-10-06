<?php

    $mark_1 = 40;
    $mark_2 = 39;
    $mark_3 = 35;

    $operand1 = $mark_1 + $mark_2 + $mark_3;

    $operand = $operand1 / 3;

    if($operand >= 80 && $operand <= 100)
    {
        echo "Disc";
    }
    else if($operand >= 60 && $operand <= 80)
    {
        echo "First";
    }
    else if($operand >= 45 && $operand <= 60)
    {
        echo "Second";
    }
    else if($operand >= 33 && $operand <= 45)
    {
        echo "Pass";
    }
    else if($operand <= 33)
    {
        echo "Fail";
    }
    else
    {
        echo "Invalid";
    }

?>