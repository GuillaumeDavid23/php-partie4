<?php
    //FONCTION Concaténation
    function Concatenate($firstname, $lastname, $age)
    {
        return "Bonjour $lastname $firstname, tu as $age ans";

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
        echo Concatenate("Guillaume", "David", 21);
    ?>
</body>
</html>