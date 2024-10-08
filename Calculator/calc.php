<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator PHP</title>
    <link rel="stylesheet" href="calc.css?=<?php echo time(); ?>">
</head>
<body>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <header>PHP Calculator</header>
        <input type="text" name="input1" class="input1" placeholder="Enter a number...">
        <input type="text" name="input2" class="input2" placeholder="Enter a number...">
        <select name="operator" class="operator">
            <option value="Add">+</option>
            <option value="Subtract">-</option>
            <option value="Multiply">*</option>
            <option value="Division">/</option>
        </select>
        <input type="submit" name="submit" class="submit">
        <button type="clear" name="clear" class="clear">Clear</button>
        <div class="output">
        <?php

            $total = 0;
           
            if(isset($_GET["submit"])){
                if($_GET["operator"] == "Add"){
                    $total = intval($_GET["input1"]) + intval($_GET["input2"]);
                    echo intval($total);
                } elseif($_GET["operator"] == "Subtract"){
                    $total = intval($_GET["input1"]) - intval($_GET["input2"]);
                    echo intval($total);
                } elseif($_GET["operator"] == "Multiply"){
                    $total = intval($_GET["input1"]) * intval($_GET["input2"]);
                    echo intval($total);
                } elseif($_GET["operator"] == "Division"){
                    $total = intval($_GET["input1"]) / intval($_GET["input2"]);
                    echo intval($total);
                } 
            }
            ?>
        </div>
    </form>
    
</body>
</html>