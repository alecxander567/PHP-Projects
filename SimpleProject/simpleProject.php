<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Project</title>
    <link rel="stylesheet" href="simpleProject.css?=<?php echo time(); ?>">
</head>
<body>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="cont">
        <input type="text" name="input" placeholder="Enter some numbers...">
        <button type="submit" name="submit">Enter</button>
        <button type="clear">Clear</button>
    </div>

    </form>

<div class="output">
    
    <h5>Output here</h5>

<?php

    if(isset($_GET['submit'])){

        $input = $_GET['input'];

        $myArray = array();

        for($i = 0; $i < strlen($input); $i++){
            $eachNum = $input[$i];

            if(!in_array($input, $myArray)){
                $myArray[] = $eachNum;
            }
        }

        echo "Inputs : ";
        foreach($myArray as $output){
            echo $output. " ";
        }

        $length = count($myArray);

        echo "<br><br>";
        for($i = 0; $i < $length; $i++){
            if($myArray[$i] % 2 == 0){
                echo "Even Numbers :". $myArray[$i]. "<br>";
            } else{
                echo "Odd Numbers :". $myArray[$i] ."<br>";
            }
        }

        function isPrime($num){
            if($num <= 1) return false;

            if($num % 2 == 0) return false;

            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0) return false;
            }

            return true;
        }

        echo "<br>";
        foreach($myArray as $num){
            if(isPrime($num)){
                echo $num. " is Prime<br>";
            } else{
                echo $num. " is not Prime<br>";
            }
        }

            $max = $myArray[0];
            $min = $myArray[0];

            for($i = 0; $i < $length; $i++){
                if($myArray[$i] > $max){
                    $max = $myArray[$i];
                } elseif($myArray[$i] < $min){
                    $min = $myArray[$i];
                }
            }

            echo "<br>";
            echo "Max : " .$max. "<br>";
            echo "Min : " .$min. "<br>";

            $total = 0;

            for($i = 0; $i < $length; $i++){
                $total = $myArray[$i] + $total;
            }

        echo "<br>";
        echo "Total is : " .$total;
    }

?>
</div>
    
</body>
</html>