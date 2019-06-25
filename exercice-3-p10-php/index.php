<?php
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
    $arrayOfArrays = [$portrait1, $portrait2, $portrait3, $portrait4];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice TP3 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice TP3</h1>
          <h4 class="text-white m-4 text-center">Faire une fonction qui permet d'afficher les données des tableaux suivants : Les afficher tous sur une même page.</h4>
        </div>
      </header>
          
          <?php foreach ($arrayOfArrays as $i => $value) { ?>
            <div class="d-flex flex-column align-items-center shadow m-4 p-4">
                <p class='text-center font-weight-bold'><?= $arrayOfArrays[$i]['name'] . ' ' . $arrayOfArrays[$i]['firstname'];?></p>
                <img width="300" class="text-center" src="<?= $arrayOfArrays[$i]['portrait'] ?>" alt="portrait de <?= $arrayOfArrays[$i]['name'] . ' ' . $arrayOfArrays[$i]['firstname']; ?>"/>
            </div>
          <?php
            }
          ?>
        
        <a href="../index.php">Retour</a>
    </div>
  </body>
</html>
