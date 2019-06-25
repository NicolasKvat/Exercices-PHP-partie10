<?php
    $regexString = '/^[a-zA-ZéèôöîïçÉÈÎÏ \'-]+([-\'\s][a-zA-ZéèôöîïçÉÈÎÏ \'-][a-zéèôöîïç \']+)?$/';
    $regexNumber = '/^[0-9]{2}$/';
    $regexGenderSelect = '/^[1-2]{1}$/';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice TP2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice TP2</h1>
          <h4 class="text-white m-4 text-center">Faire une page permettant de saisir les informations suivantes : A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</h4>
        </div>
      </header>
        <main class="d-flex justify-content-center">
            <form name="form" action="index.php" method="POST" class="form d-flex flex-column w-75 shadow p-4 mb-4">
              <div class="form-group">
                <label for="genderSelect">Civilité <span class="error">* <?= !empty($_POST) && (preg_match($regexGenderSelect, $_POST['genderSelect']) == false) ? 'Civilité invalide !' : '' ;?></span></label>
                <select name="genderSelect" value="<?= $_POST['genderSelect'] ?>" class="form-control" id="genderSelect">
                    <option value="1" name="Mme" <?= (!empty($_POST) && $_POST['genderSelect'] == 1) ? 'selected' : '' ?>>Mme</option>
                    <option value="2" name="Mr" <?= (!empty($_POST) && $_POST['genderSelect'] == 2) ? 'selected' : '' ?>>Mr</option>
                </select>
              </div>
              <div class="form-group">
                <label for="lastname">Nom <span class="error">* <?= !empty($_POST) && (preg_match($regexString, $_POST['lastname']) == false) ? '<p class="text-danger">Nom invalide !</p>' : '' ;?></span></label>
                <input type="text" class="form-control" name="lastname" value="<?= $_POST['lastname'] ?>" required>
              </div>
              <div class="form-group">
                  <label for="firstname">Prénom <span class="error">* <?= !empty($_POST) && (preg_match($regexString, $_POST['firstname']) == false) ? '<p class="text-danger">Prénom invalide !</p>' : '' ;?></span></label>
                <input type="text" name="firstname" class="form-control" value="<?= $_POST['firstname'] ?>" required>            
              </div>
                <div class="form-group">
                  <label for="age">Age <span class="error">* <?= !empty($_POST) && (preg_match($regexNumber, $_POST['age']) == false) ? '<p class="text-danger">Age invalide !</p>' : '' ;?></span></label>
                <input type="text" name="age" class="form-control" value="<?= $_POST['age'] ?>" required>            
              </div>
                <div class="form-group">
                  <label for="society">Société <span class="error">* <?= !empty($_POST) && (preg_match($regexString, $_POST['society']) == false) ? '<p class="text-danger">Nom de société invalide !</p>' : '' ;?></span></label>
                <input type="text" name="society" class="form-control" value="<?= $_POST['society'] ?>" required>            
              </div>
              <button type="submit" class="btn btn-primary">Valider</button>
              <?php
                if (preg_match($regexGenderSelect, $_POST['genderSelect']) && preg_match($regexString, $_POST['lastname']) 
                    && preg_match($regexString, $_POST['firstname']) && preg_match($regexNumber, $_POST['age']) 
                    && preg_match($regexString, $_POST['society'])) {
                    switch ($_POST['genderSelect']) {
                        case 1:
                            $nameCivility = 'Madame';
                            break;
                        case 2:
                            $nameCivility = 'Monsieur';
                            break;
                    }
                echo '<p class="text-center">Wesh ' . $nameCivility . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ', t\'a ' . $_POST['age'] . ' ' . ' ans et tu taff chez ' . $_POST['society'] . '.'; 
                }
              ?>
            </form>
        </main>
    </div>
  </body>
</html>
