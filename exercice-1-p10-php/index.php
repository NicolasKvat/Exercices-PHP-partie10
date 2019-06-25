<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice TP1 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice TP1</h1>
          <h4 class="text-white m-4 text-center">Faire une page pour enregistrer un futur apprenant.</h4>
        </div>
      </header>
        <main class="d-flex flex-column align-items-center shadow p-4">
            <h1>Formulaire</h1>
            <?php
                if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['bornDate']) && isset($_POST['bornZone']) && isset($_POST['nationality']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['diploma']) && isset($_POST['poleNumber']) && isset($_POST['badgeNumber']) && isset($_POST['codeAcademy']) && isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3'])) {?>
            <div class="d-flex flex-column w-100">
                <h2 class="p-2">Nom :</h2>
                <p class="text-center p-2"><?= $_POST['lastName'] ?></p>
                <h2 class="p-2">Prénom :</h2>
                <p class="text-center p-2"><?= $_POST['firstName'] ?></p>
                <h2 class="p-2">Date de naissance :</h2>
                <p class="text-center p-2"><?= $_POST['bornDate'] ?></p>
                <h2 class="p-2">Pays de naissance :</h2>
                <p class="text-center p-2"><?= $_POST['bornZone'] ?></p>
                <h2 class="p-2">Nationalité :</h2>
                <p class="text-center p-2"><?= $_POST['nationality'] ?></p>
                <h2 class="p-2">Adresse :</h2>
                <p class="text-center p-2"><?= $_POST['address'] ?></p>
                <h2 class="p-2">Email :</h2>
                <p class="text-center p-2"><?= $_POST['email'] ?></p>
                <h2 class="p-2">Téléphone :</h2>
                <p class="text-center p-2"><?= $_POST['phoneNumber'] ?></p>
                <h2 class="p-2">Diplôme :</h2>
                <p class="text-center p-2"><?= $_POST['diploma'] ?></p>
                <h2 class="p-2">Numéro pôle emploi :</h2>
                <p class="text-center p-2"><?= $_POST['poleNumber'] ?></p>
                <h2 class="p-2">Nombre de badge :</h2>
                <p class="text-center p-2"><?= $_POST['badgeNumber'] ?></p>
                <h2 class="p-2">Liens codecademy :</h2>
                <p class="text-center p-2"><?= $_POST['codeAcademy'] ?></p>
                <h2 class="p-2">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? :</h2>
                <p class="text-center p-2"><?= $_POST['question1'] ?></p>
                <h2 class="p-2">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</h2>
                <p class="text-center p-2"><?= $_POST['question2'] ?></p>
                <h2 class="p-2">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? :</h2>
                <p class="text-center p-2"><?= $_POST['question3'] ?></p>
            </div>
            <?php } else { ?>
            <form name="form" action="index.php" method="POST" class="form d-flex flex-column w-75">
                <label class="font-weight-bold">Nom :</label>
                <input type="text" name="lastName" required class="input m-4">
                <label class="font-weight-bold">Prénom :</label>
                <input type="text" name="firstName" required class="input m-4">
                <label class="font-weight-bold">Date de naissance :</label>
                <input type="text" name="bornDate" required class="input m-4">
                <label class="font-weight-bold">Pays de naissance :</label>
                <input type="text" name="bornZone" required class="input m-4">
                <label class="font-weight-bold">Nationalité :</label>
                <input type="text" name="nationality" required class="input m-4">
                <label class="font-weight-bold">Adresse :</label>
                <input type="text" name="address" required class="input m-4">
                <label class="font-weight-bold">Email :</label>
                <input type="text" name="email" required class="input m-4">
                <label class="font-weight-bold">Téléphone :</label>
                <input type="text" name="phoneNumber" required class="input m-4">
                <label class="font-weight-bold">Diplôme :</label>
                <input type="text" name="diploma" required class="input m-4">
                <label class="font-weight-bold">Numéro pôle emploi :</label>
                <input type="text" name="poleNumber" required class="input m-4">
                <label class="font-weight-bold">Nombre de badge :</label>
                <input type="text" name="badgeNumber" required class="input m-4">
                <label class="font-weight-bold">Liens codecademy :</label>
                <input type="text" name="codeAcademy" required class="input m-4">
                <label class="font-weight-bold">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? :</label>
                <input type="text" name="question1" required class="input m-4">
                <label class="font-weight-bold">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                <input type="text" name="question2" required class="input m-4">
                <label class="font-weight-bold">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? :</label>
                <input type="text" name="question3" required class="input m-4">
                <input type="submit" name="validForm" value="Valider" class="btn btn-outline-primary m-4">
            </form>
            <p class="text-center">
                <?php
                    echo 'Veuillez entrer les informations.';
                 }
                ?>
            </p>
        </main>
    </div>
  </body>
</html>
