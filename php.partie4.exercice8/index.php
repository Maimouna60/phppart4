<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Partie 4 exo 8</title>
</head>
    <body> 
        <p><?php
        function SommeNum ($prix1,$prix2,$prix3) {
            $Somme = 4+5+6;
            return $Somme;
        }
        $Somme = SommeNum(4, 5, 6);
        echo 'Le prix total est de'.' ' .$Somme.'€';
        ?>
    </body>
</html>

<?php 
    function tripleSum($nb1 = 0, $nb2 = 0, $nb3 = 0) {
        return $nb1 + $nb2 + $nb3;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo8</title>
    </head>
    <body>
        <p><?= tripleSum(1, 1) ?></p>
        <p><?= tripleSum(5, 6, 8) ?></p>
        <p><?= tripleSum(5) ?></p>
        <p><?= tripleSum() ?></p>
    </body>
</html>



