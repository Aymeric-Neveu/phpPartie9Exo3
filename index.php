<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <?php
    $today = date('l j F');
    echo $today;
    ?>
    <?php
    setlocale(LC_TIME, 'fr_FR.UTF8');
    echo 'En francais : '. strftime('%A %d %B %Y');
    ?>
  </body>
</html>
