<?php
if(isset($_POST['submit']))
{
 $num1=$_POST['num1'];
 echo "<br>";
 $num2=$_POST['num2'];

 if($num1%2==0)
 {
    echo "even";
    echo "<br>";
 }
 else
 {
    echo "odd";
    echo "<br>";
 }

 if($num2%2==0)
 {
    echo "even";
    echo "<br>";
 }
 else
 {
    echo "odd";
    echo "<br>";
 }

}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            Number 1 : <input type="text" name="num1"> <br>
            Number 2 : <input type="text" name="num2"> <br>
            <input type="submit" class="btn" name="submit" value="Submit">
        </form>
    </body>
</html>
