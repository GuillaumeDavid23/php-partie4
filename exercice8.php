<?php
    
    //FONCTION TEST des nombres
     function TestNumber($firstNumber = 1, $secondNumber = 1, $thirdNumber = 1)
     {
        
        return $firstNumber + $secondNumber + $thirdNumber;


     }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 4</title>
</head>
<body>
    <?php
        //Appel de la fonction
        echo TestNumber(40, 40, 40);
    ?>
</body>
</html>