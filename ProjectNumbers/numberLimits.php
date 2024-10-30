<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Limiter</title>
    <link rel="stylesheet" href="NumberLimiter.css">
</head>
<body>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <header>Number Nigger</header>
    <div class="input-cont">
        <input type="text" name="input1" placeholder="Enter a staring point...">
        <input type="text" name="input2" placeholder="Enter an ending point...">
    </div>
    <div class="btn-cont">
    <input type="submit" name="submit" class="submit">
    <button type="clear" name="clear" class="clear">Clear</button>
</div>
</form>

<div class="output">

<h1>Output Here</h1>

<?php

    if(isset($_GET['submit'])){
        $input1 = $_GET['input1'];
        $input2 = $_GET['input2'];

        for($i = $input1; $i <= $input2; $i++){
            if($input1 < $input2){
                echo $i. " ";
            }
        }

        for($i = $input1; $i >= $input2; $i--){
            if($input1 > $input2){
                echo $i. " ";
            }
        }
    }

?>

</div>
    
</body>
</html>