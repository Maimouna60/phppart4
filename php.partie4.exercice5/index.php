<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie4 Exo 5</title>
    </head>
    <body>        
    <?php
    function concat()
    {
        $chaine = "Hello je m' appelle Maimouna j'ai";
        $age= 35;
        return $chaine .' ' .$age.' '.'ans';
    }
    ?><p><?= concat(); ?></p><?php
    ?>
    </body>
</html>

<?php
    function concat($str, $nb){
        return $str . ' a ' . $nb . ' ans';
        } 
?>
<p><?php echo concat('tony', 24) ?></p>
exercice 6
<?php
    function concatenation($name, $firstname, $age){
        return 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' .  $age . 'ans.';
        } 
?>
<p><?= concatenation('Rouyer', 'Tony', 24) ?></p>

