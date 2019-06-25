<?php include 'variables.php' ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>TP n°1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <?php include 'header.php'; ?>
          </header>
          <!-- main -->
          <main>
              <?php
                include 'regex.php';
                // Si les valeurs des input respectent les regex, on affiche les résultats. Sinon, le formulaire est affiché, avec les messages d'erreurs
                // propres à chaque input pour ceux qui ne sont pas valides.
                if(preg_match($lastNameRegex, $lastName) && preg_match($firstNameRegex, $firstName) && preg_match($dateRegex, $birthDate) &&
                   preg_match($shortString, $nationality) && preg_match($lastNameRegex, $birthCountry) && preg_match($addressRegex, $physicalAddress) ||
                   preg_match($mailRegex, $mailAddress) && preg_match($phoneRegex, $phoneNumber) && preg_match($degreeRegex, $degree) &&
                   preg_match($poleEmploiRegex, $poleEmploi) && preg_match($badgesRegex, $badges) && preg_match($urlRegex, $codecademyLinks) &&
                   preg_match($longString, $superhero) && preg_match($longString, $hack) && preg_match($yesNoRegex, $experience)){
                include 'results.php';
                }else{
              ?>
              <!-- Début du formulaire -->
              <p class="text-danger">
                <?php echo '* : champs obligatoires'; ?>
              </p>
              <?php include 'form.php'; ?>
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
