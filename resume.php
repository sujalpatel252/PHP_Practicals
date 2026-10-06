<?php
    if(isset($_POST['submit']))
    {
        $name1=$_POST['name1'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $contact_no=$_POST['contact_no'];
        $objective=$_POST['objective'];

        $bcom_university=$_POST['bcom_university'];
        $bcom_passing_year=$_POST['bcom_passing_year'];
        $bcom_percentage=$_POST['bcom_percentage'];

        $hsc_university=$_POST['hsc_university'];
        $hsc_passing_year=$_POST['hsc_passing_year'];
        $hsc_percentage=$_POST['hsc_percentage'];

        $ssc_university=$_POST['ssc_university'];
        $ssc_passing_year=$_POST['ssc_passing_year'];
        $ssc_percentage=$_POST['ssc_percentage'];

        $skill_1=$_POST['skill_1'];
        $skill_2=$_POST['skill_2'];

        $hobbies=$_POST['hobbies'];

        $experience=$_POST['experience'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .border_dark{
            border:4px solid #000000;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .set_text{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: x-large;
        }
        .set_computer{
            font-weight: 400;
        }
        .set_typing{
            font-weight: 400;
        }
        .set_address{
            width: 70%;
        }
        .obj{
            background-color: #d9d9d9;
            padding: 5px;
        }
        i{
            font-size: 27px;
        }
    </style>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row" style="margin-right: 22px;">
                <form action="" method="post">
                    Name: <input type="text" class="name" name="name1"> <br>
                    Address: <textarea name="address" class="address"></textarea> <br>
                    Email: <input type="text" class="email" name="email"> <br>
                    Contact No: <input type="text" class="contact_no" name="contact_no"> <br>
                    Objective: <input type="text" class="objective" name="objective"> <br>

                    Bcom University: <input type="text" class="bcom_university" name="bcom_university"> <br>
                    Bcom Passing Year: <input type="text" class="bcom_passing_year" name="bcom_passing_year"> <br>
                    Bcom Percentage: <input type="text" class="bcom_percentage" name="bcom_percentage"> <br>

                    HSC University: <input type="text" class="hsc_university" name="hsc_university"> <br>
                    HSC Passing Year: <input type="text" class="hsc_passing_year" name="hsc_passing_year"> <br>
                    HSC Percentage: <input type="text" class="hsc_percentage" name="hsc_percentage"> <br>

                    SSC University: <input type="text" class="ssc_university" name="ssc_university"> <br>
                    SSC Passing Year: <input type="text" class="ssc_passing_year" name="ssc_passing_year"> <br>
                    SSC Percentage: <input type="text" class="ssc_percentage" name="ssc_percentage"> <br>

                    Technical Skills: <input type="text" class="skill_1" name="skill_1"> <br>
                                        <input type="text" class="skill_2" name="skill_2"> <br>
                    Hobbies: <input type="text" class="hobbies" name="hobbies"> <br>
                    Experience: <input type="text" class="experience" name="experience"> <br>
                    <input type="submit" name="submit" class="submit">
                </form>
                </div>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="col">
            <div class="border_dark p-5 mt-5 w-75 mx-auto">
                <h3 class="text-center">RESUME</h3>
                <div class="row">
                    <div class="col">
                        <h4 class="set_name"><?php echo $name1; ?></h4>
                        <p class="set_address"><?php echo $address; ?></p>
                    </div>
                    <div class="col mt-5">
                        <h6 class="mt-4"><b>Email :</b> <span class="set_email"><?php echo $email; ?></span></h6>
                        <h6 class="phone_no"><b>Contact No :</b> <span class="set_contact_no"><?php echo $contact_no; ?></span></h6>
                    </div>
                    <div class="row mt-5">
                        <h6 class="obj">Objective :</h6>
                        <p class="set_text mt-4"><i><?php echo $objective; ?></i></p>
                    </div>
                    <div class="row table-responsive mt-5">
                        <h6 class="obj">Educational Qualifications :</h6>
                        <table class="table text-center mt-4">
                            <tr>
                                <th>Courses</th>
                                <th>University</th>
                                <th>Passing Year</th>
                                <th>Percentage</th>
                            </tr>
                            <tr>
                                <td>Bcom</td>
                                <td class="set_bcom_university"><?php echo $bcom_university; ?></td>
                                <td class="set_bcom_passing_year"><?php echo $bcom_passing_year; ?></td>
                                <td class="set_bcom_percentage"><?php echo $bcom_percentage; ?></td>
                            </tr>
                            <tr>
                                <td>H.S.C</td>
                                <td class="set_hsc_university"><?php echo $hsc_university; ?></td>
                                <td class="set_hsc_passing_year"><?php echo $hsc_passing_year; ?></td>
                                <td class="set_hsc_percentage"><?php echo $hsc_percentage; ?></td>
                            </tr>
                            <tr>
                                <td>S.S.C</td>
                                <td class="set_ssc_university"><?php echo $ssc_university; ?></td>
                                <td class="set_ssc_passing_year"><?php echo $ssc_passing_year; ?></td>
                                <td class="set_ssc_percentage"><?php echo $ssc_percentage; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row mt-5">
                        <h6 class="obj">Technical Skills :</h6>
                        <h6 class="mt-4"><li><b>Computer :</b> <span class="set_computer"><?php echo $skill_1; ?></span></li></h6>
                        <h6><li><b>Typing :</b> <span class="set_typing"><?php echo $skill_2; ?></span></li></h6>
                    </div>
                    <div class="row mt-5">
                        <h6 class="obj">Hobbies :</h6>
                        <p class="mt-4"><li class="set_hobbies"><?php echo $hobbies; ?></li></p>
                    </div>
                    <div class="row mt-5">
                        <h6 class="obj">Experience :</h6>
                        <p class="mt-4"><li class="set_experience"><?php echo $experience; ?></li></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>