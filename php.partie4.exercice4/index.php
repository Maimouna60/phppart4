<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie4 Exo 4</title>
    </head>
    <body>        
    <?php
    function number($numb1,$numb2){
        if ($numb1 > $numb2) {
        return 'Nombre 1 superieur à nombre 2';  
        } else if ($numb1 < $numb2){
        return 'Nombre 1 inferieur à nombre 2';
        } else {
        return 'Nombre 1 egal nombre 2';
        }}
        ?>
    <p><?= number(5,7);?></p><?php
    ?><p><?= number(7,5);?></p><?php
    ?><p><?= number(2,2);?></p><?php
    ?>
    </body>
</html>


<?php
    function testNumber($nb1, $nb2){
            $message = 'une erreur est survenue';
            if ($nb1 > $nb2){
                $message = 'Le premier nombre est plus grand';
            }else if ($nb1 < $nb2){
                $message = 'Le premier nombre est plus petit';
            }else if ($nb1 === $nb2){
                $message = 'Les deux nombres sont identiques';
            }
            return $message;
        } 
?>