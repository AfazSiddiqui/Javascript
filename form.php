<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if(isset($_POST['add'])){
        echo "</b>" . $num1 + $num2;
    }
    
    elseif(isset($_POST['multiply'])){
        echo "</b>" . $num1 * $num2;
    }

    elseif(isset($_POST['subtract'])){
        echo "</b>" . $num1 - $num2;
    }

    elseif(isset($_POST['divide'])){
        
        if($num2 == 0){
            echo "Division by 'Zero' is not allowed.";
        }
        echo "</b>" . $num1 / $num2;
    }

    else{
        echo "No operation selected";
    }
    // echo "</b>" . $num1 + $num2;
};



// $calc = isset($_POST['add, multiply, subtract, divide'])

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="Post">
        <input type="text" name="num1" placeholder="Enter First Number">
        <input type="text" name="num2" placeholder="Enter Second Number">
        <!-- <input type="submit" name="submit" > -->
        <input type="submit" name="add" value="+">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="subtract" value="-">
        <input type="submit" name="divide" value="/">
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>