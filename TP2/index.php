<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>TP n°2</title>
  </head>
  <body>
      <!-- Conteneur principal -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 10 - TP 2</h1>
                <p class="lead">Faire une page permettant de saisir les informations suivantes :</p>
                <ul>
                  <li>Civilité (liste déroulante)</li>
                  <li>Nom</li>
                  <li>Prénom</li>
                  <li>Âge</li>
                  <li>Société</li>
                </ul>
                <p class="lead">À la validation, les données saisies devront apparaître sous le formulaire.
                Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $genderRegex = '/Monsieur|Madame/'; // La valeur ne peut être que "Monsieur" ou "Madame"
              $shortString = '/^[a-zA-Zéèêëiîïôöüäç\' -]{2,30}$/'; // Texte de 2 à 30 caractères pouvant contenir des lettes ou des symboles indiqués
              $ageRegex = '/[1-9]{1}+[0-9]{1}/'; // 2 chiffres allant de 0 à 9, le premier ne peut pas être 0. (Donc âge mini = 10 et âge maxi = 99)
            ?>
            <!-- Début du formulaire -->
            <form class="index.php" action="index.php" method="post">
              <div class="form-group">
                <label for="gender">Niveau d'étude :</label><span class="error">* <?= !empty($_POST) && (preg_match($genderRegex, $_POST['gender']) == false) ? 'Choisissez une civilité !' : '';?></span>
                <select class="custom-select" name="gender" value="<?= $_POST['gender'] ?>">
                  <option selected>Civilité</option>
                  <option value="Monsieur">Monsieur</option>
                  <option value="Madame">Madame</option>
                </select>
              </div>
              <div class="form-group">
                <label for="lastName">Nom :</label><span class="error">* <?= !empty($_POST) && (preg_match($shortString, $_POST['lastName']) == false) ? 'Nom invalide !' : ''; ?></span>
                <input name="lastName" type="text" class="form-control" value="<?= $_POST['lastName'] ?>">
              </div>
              <div class="form-group">
                <label for="firstName">Prénom :</label><span class="error">* <?= !empty($_POST) && (preg_match($shortString, $_POST['firstName']) == false) ? 'Prénom invalide !' : ''; ?></span>
                <input name="firstName" type="text" class="form-control" value="<?= $_POST['firstName'] ?>">
              </div>
              <div class="form-group">
                <label for="age">Âge :</label><span class="error">* <?= !empty($_POST) && (preg_match($ageRegex, $_POST['age']) == false) ? 'Âge invalide !' : ''; ?></span>
                <input type="number" name="age" class="form-control" value="<?= $_POST['age'] ?>">
              </div>
              <div class="form-group">
                <label for="society">Société :</label><span class="error">* <?= !empty($_POST) && (preg_match($shortString, $_POST['society']) == false) ? 'Société invalide !' : ''; ?></span>
                <input type="text" name="society" class="form-control" value="<?= $_POST['society'] ?>">
              </div>
              <button type="submit" class="btn btn-success mb-3">Envoyer le formulaire</button>
            </form>
            <?php // Si les conditions regex sont remplis, nous afficherons les réponses du formulaire.
              if(preg_match($genderRegex, $_POST['gender']) && preg_match($shortString, $_POST['lastName']) && preg_match($shortString, $_POST['firstName'])
              && preg_match($ageRegex, $_POST['age']) && preg_match($shortString, $_POST['society'])){
            ?>
            <p><?= $_POST['gender'] ?></p>
            <p><?= $_POST['lastName'] ?></p>
            <p><?= $_POST['firstName'] ?></p>
            <p><?= $_POST['age'] ?></p>
            <p><?= $_POST['society'] ?></p>
            <?php }else{ ?>
              <p class="text-danger font-weight-bold">
                <?php
                    echo 'Veuillez remplir les informations ci-dessus.';
                  }
                ?>
              </p>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
