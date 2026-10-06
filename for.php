<?php

    for ($x = 1; $x <= 50; $x++)
    {
        if($x % 5 == 0)
        {
            echo " Hello ";
            echo " <br> ";
        }
        else if($x % 7 == 0)
        {
            echo " Hello ";
            echo " <br> ";
        }
        else
        {
            echo $x;
            echo "<br>";
        }
        
    }

?>