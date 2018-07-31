<?php
// tableau ou on stocke les mois de l'année
$arrayMonths = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'décembre');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title> exercice 1</title>
  </head>
  <body>
    <p>
      <?php
      // changement de l'index aout et rajout de l'accent sur le u
        echo $arrayMonths[7] = 'août';
        ?>
    </p>
  </body>
</html>
