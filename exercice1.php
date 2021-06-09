<?php
    $myBoolean = false;
    function testingTrue()
    {   
        $myBoolean = true;
        return $myBoolean;
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
        echo testingTrue();
    ?>
</body>
</html>