<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];

        $num1 = $_POST['num1'];

        if (empty($name)) 
        {
            echo "Name is empty";
        } 
        else 
        {
            echo " <br> $name ";
        }

        for ($num1 = 1; $num1 <= 10; $num1++)
        {
            echo " <br> $num1 ";
        }

    }

    

?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            Name : <input type="text" name="name"> <br>
            Number : <input type="text" name="num1">
            <input type="submit" class="btn" name="submit" value="Submit">
        </form>
    </body>
</html>