<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie4 Exo 7</title>
    </head>
    <body>        
    <?php
    function person($age,$gender){
        if ($age >= 18 && $age < 125 && $gender =='Homme') {
        return 'Vous etes un homme et vous etes majeur';  
        } else if ($age < 18 && $age > 0 && $gender =='Homme'){  
        return 'Vous etes un homme et vous etes mineur';
        } else if ($age >= 18 && $age < 125 && $gender =='Femme'){
        return 'Vous etes une femme et vous etes majeur';
        }elseif ($age < 18 && $age > 0 && $gender =='Femme'){
        return 'Vous etes une femme et vous etes mineur';
        } else{ 
        return 'Votre âge ou votre genre n\'est pas valide';
        }
    }
    ?>
    <p><?= person(16,'Homme');?></p><?php
    ?><p><?= person(3,'Homme');?></p><?php
    ?><p><?= person(18,'Femme');?></p><?php
    ?><p><?= person(2,'Femme');?></p><?php
    ?>
    </body>
</html>

<?php 
    function identification($gender, $age) {
        $message = 'Il y a eu une erreur';
        if ($gender == 'Homme' && $age >= 18) {
            $message = 'Vous êtes un homme et vous êtes majeur';
        }else if ($gender == 'Homme' && $age < 18 ) {
            $message = 'Vous êtes un homme et vous êtes mineur';
        }else if ($gender == 'Femme' && $age >= 18) {
            $message = 'Vous êtes une femme et vous êtes majeure';
        }else if ($gender == 'Femme' && $age < 18) {
            $message = 'Vous êtes une femme et vous êtes mineure';
        }
        return $message;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie4-exo7</title>
    </head>
    <body>
        <p><?= identification('Homme', 22) ?></p>
    </body>
</html>
