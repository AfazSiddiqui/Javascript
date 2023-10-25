<?php

if(isset($_POST['submit'])) {

    if(empty($_POST['percent'])) {

        echo "Please enter your percentage";

    }

    else {

        $percentage = $_POST['percent'];

        if($percentage >= 80) {

            $message = 'Passed 💯<br>';

        }

        elseif($percentage >= 70) {

             $message = 'Passed<br>';

        }

        elseif($percentage >= 60) {

             $message = 'Passed<br>';

        }

        elseif($percentage >= 50) {

             $message = 'Passed<br>';

        }

        elseif($percentage >= 40) {
             $message = 'Passed<br>';

        }

        else {
             $message = 'Failed<br>';
        }
    }

    $grade = @$percentage;

switch($grade){
    case '$percentage':
        $grade_mesg = 'Grade: A+ 😀<br>
        Remarks: You did an outstanding job';
        break;

    case '$percentage':
        $grade_mesg = 'Grade: A 😀<br>
        Remarks: You did an excellent job';
        break;

    case '$percentage':
        $grade_mesg = 'Grade: B 😀<br>
        Remarks: You did a good job';
        break;

    case '$percentage':
        $grade_mesg = 'Grade: C 😀<br>
        Remarks: You did need to work harder';
        break;

    case '$percentage':
        $grade_mesg = 'Grade: D 😀<br>
        Remarks: You need to work harder';
        break;

    case '$percentage':
        $grade_mesg = 'Grade: F 😀<br>
        Remarks: You did an outstanding job';
        break;
}
}

?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style>
        form  h3{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 2rem;
        }

        .input{
            width: 250px;
            height: 30px;
            border-radius: 4px;
            border: 3px solid grey;
            margin-right: 10px;
        }

        .submit{
            background-color: blanchedalmond;
            color: gray;
            font-size: 1rem;
            font-weight: medium;
            border: none;
            border-radius: 10px;
            padding: 5px;
        }
        
    </style>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for=""><h3>Enter Your Percentage</h3></label>
        <input class="input" type="text" name="percent" placeholder="Percentage Here">
        <input class="submit" type="submit" name="submit" value="Get Results"><br>
        <br>
        <hr>

    </form>

        <h4><?php echo $message ?? ''?></h4>

</body>

</html>