<?php
    //FONCTION Test de l'age et genre
    function WhoIs($gender, $age)
    {
        if($age >= 18 && $gender == "Homme"){
            return "Vous êtes un $gender et vous êtes majeur";
        }
        elseif($age < 18 && $gender == "Homme"){
            return "Vous êtes un $gender et vous êtes mineur";
        }
        elseif($age >= 18 && $gender == "Femme"){
            return "Vous êtes une $gender et vous êtes majeure";
        }
        else{
            return "Vous êtes une $gender et vous êtes mineure";
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
        echo WhoIs("Homme", 10);
    ?>
</body>
</html>