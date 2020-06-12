
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>partie4 Exo 6</title>
    </head>
    <body>        
    <?php
    function concat() {
            $firstname = "KANTE";
            $surname = "Maimouna";
            $age= 35; {
            return 'Bonjour'.' '.$firstname.' '.$surname.','.' '.'tu as'.' '.$age.'ans';
        }}
        ?><p><?= concat(); ?></p><?php
        ?>
    </body>
</html>