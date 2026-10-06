<?php

if(isset($_POST['submit']))
{
    $name1=$_POST['name1'];
    echo "<br>";
    $email=$_POST['email'];
    echo "<br>";
    $contact_no=$_POST['contact_no'];
    echo "<br>";
    $address=$_POST['address'];

    ?>
    Name:<?php echo $name1; ?><br/>
    Email:<?php echo $email; ?><br/>
    Contact_no:<?php echo $contact_no; ?><br/>
    Address:<?php echo $address; ?><br/>
    <?php
}

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <h1>READ DATA USING PHP</h1>
        </div>
        <form action="" method="post">
            name : <input type="text" name="name1"> <br>
            email : <input type="email" name="email"> <br>
            contact no : <input type="text" name="contact_no"> <br>
            address : <textarea name="address"></textarea> <br>
            <input type="submit" class="btn" name="submit" value="Submit">
        </form>
    </body> 
</html>