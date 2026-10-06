<?php

    $mark_1 = 180;
    $mark_2 = 900;
    $mark_3 = 110;

    $operand1 = $mark_1 + $mark_2 + $mark_3;

    $operand = $operand1 / 3;

    switch($operand)
    {
        case ($operand >= 80 && $operand <= 100):    
            echo "Disc";
            break;
            
        case ($operand >= 60 && $operand <= 80): 
            echo "First";
            break;

        case ($operand >= 45 && $operand <= 60):    
            echo "Second";
            break;

        case ($operand >= 33 && $operand <= 45):  
            echo "Pass";
            break;

        case ($operand <= 33): 
            echo "Fail";
            break;

        default:
            echo "Invalid";
            break;
    }

?>