<?php
    //FONCTION TEST des nombres
     function TestNumber($firstNumber, $secondNumber)
     {
         //Déclaration des messages
        $Number1Win = "Le premier nombre est plus grand";
        $Number1Lose = "Le premier nombre est plus petit";
        $Number1Equal = "Les deux nombres sont identiques";

        //Test
        if($firstNumber > $secondNumber){
            return $Number1Win;
        }
        elseif($firstNumber < $secondNumber){
        return $Number1Lose;
        }
        else{
        return $Number1Equal;
        }

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
        echo TestNumber(40, 40);
    ?>
</body>
</html>