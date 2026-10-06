<?php

    // for loop
    for($x = 1; $x <= 50; $x++)
    {
        if(s%5==0)
        {
            $('h1').append("Hello<br/>");
        }
        else if(s%7==0)
        {
            $('h1').append("Hello 7<br/>");
        }
        else
        {
            $('h1').append(s+"<br/>");
        }
        
    }

    echo " $x <br> ";


?>