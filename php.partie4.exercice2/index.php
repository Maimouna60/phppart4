<?php
$string = "welcome la Manu"
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Php partie 4 Exercice 2</title>
    </head>
    <body>
        <p><?php
            function retour($string)
            {
                return $string;
            }
            ?><p><?= retour ($string); ?></p><?php
        ?></p>
    </body>
</html>
 














