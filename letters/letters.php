<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letters PHP</title>
    <link rel="stylesheet" href="letters.css?=<?php echo time(); ?>">
</head>
<body>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <header>PHP Simple Project</header>
    <input type="text" name="input" placeholder="Enter any word...">
    <input type="submit" name="submit" class="submit">
    <button type="clear" class="clear">Clear</button>

</form>

<div class="output">

    <h5>Output Here</h5>

<?php

if(isset($_GET['submit'])){

    $input = strtoupper($_GET['input']);

    $vowels = array("A", "E", "I", "O", "U");
    $consonants = array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Y", "Z");

    $newVowels = array();
    $newCons = array();

        for($i = 0; $i < strlen($input); $i++){
            $letter = $input[$i];

            if(in_array($letter, $vowels)){
                $newVowels[] = $letter;
            }
        }

        echo "Vowels : ";
        foreach($newVowels as $output){
            echo $output. " ";
        } 

        for($i = 0; $i < strlen($input); $i++){
            $letter = $input[$i];

            if(in_array($letter, $consonants)){
                $newCons[] = $letter;
            }
        }

        echo "<br>Consonants : ";
        foreach($newCons as $output){
            echo $output. " ";
        }

}

?>

</div>
    
</body>
</html>