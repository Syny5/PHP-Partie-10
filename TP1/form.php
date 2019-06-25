<form action="index.php" class="text-info" method="POST">
    <div class="form-group">
      <label for="lastName">Nom :</label><span class="error">* <?= !empty($_POST) && (preg_match($lastNameRegex, $lastName) == false) ? 'Nom invalide !' : '' ;?></span>
      <input name="lastName" type="text" class="form-control" value="<?= $_POST['lastName'] ?>">
    </div>
    <div class="form-group">
      <label for="firstName">Prénom :</label><span class="error">* <?= !empty($_POST) && (preg_match($firstNameRegex, $firstName) == false) ? 'Prénom invalide !' : '' ;?></span>
      <input name="firstName" type="text" class="form-control" value="<?= $_POST['firstName'] ?>">
    </div>
    <div class="form-group">
      <label for="birthDate">Date de naissance :</label><span class="error">* <?= !empty($_POST) && (preg_match($dateRegex, $birthDate) == false) ? 'Date de naissance invalide !' : '' ;?></span>
      <input name="birthDate" type="date" class="form-control" value="<?= $_POST['birthDate'] ?>">
    </div>
    <div class="form-group">
      <label for="birthCountry">Pays de naissance :</label><span class="error">* <?= !empty($_POST) && (preg_match($lastNameRegex, $birthCountry) == false) ? 'Pays de naissance invalide !' : '' ;?></span>
      <input name="birthCountry" type="text" class="form-control" value="<?= $_POST['birthCountry'] ?>">
    </div>
    <div class="form-group">
      <label for="nationality">Nationalité :</label><span class="error">* <?= !empty($_POST) && (preg_match($shortString, $nationality) == false) ? 'Nationalité invalide !' : '' ;?></span>
      <input name="nationality" type="text" class="form-control" value="<?= $_POST['nationality'] ?>">
    </div>
    <div class="form-group">
      <label for="physicalAddress">Adresse :</label><span class="error">* <?= !empty($_POST) && (preg_match($addressRegex, $physicalAddress) == false) ? 'Adresse invalide ! Veuillez commencer par entrer votre numéro, puis votre nom de rue.' : '' ;?></span>
      <input name="physicalAddress" type="text" class="form-control" value="<?= $_POST['physicalAddress'] ?>">
    </div>
    <div class="form-group">
      <label for="mailAddress">Adresse email :</label><span class="error">* <?= !empty($_POST) && (preg_match($mailRegex, $mailAddress) == false) ? 'Adresse mail invalide !' : '' ;?></span>
      <input name="mailAddress" type="mail" class="form-control" value="<?= $_POST['$mailAddress'] ?>">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Numéro de téléphone :</label><span class="error">* <?= !empty($_POST) && (preg_match($phoneRegex, $phoneNumber) == false) ? 'Numéro de téléphone invalide' : '' ;?></span>
      <input name="phoneNumber" type="text" class="form-control" value="<?= $_POST['phoneNumber'] ?>">
    </div>
    <div class="form-group">
      <label for="degree">Niveau d'étude :</label><span class="error">* <?= !empty($_POST) && (preg_match($degreeRegex, $_POST['degree']) == false) ? 'Niveau invalide !' : '' ;?></span>
      <select class="custom-select" name="degree" value="<?= $_POST['degree'] ?>">
        <option selected>Diplôme</option>
        <option value="1">Sans diplôme</option>
        <option value="2">Bac</option>
        <option value="3">Bac +2</option>
        <option value="4">Bac +3 ou supérieur</option>
      </select>
    </div>
    <div class="form-group">
      <label for="poleEmploi">Numéro pôle emploi :</label><span class="error">* <?= !empty($_POST) && (preg_match($poleEmploiRegex, $poleEmploi) == false) ? 'Numéro pôle-emploi invalide !' : '' ;?></span>
      <input name="poleEmploi" type="text" class="form-control" value="<?= $_POST['poleEmploi'] ?>">
    </div>
    <div class="form-group">
      <label for="badges">Nombre de badge :</label><span class="error">* <?= !empty($_POST) && (preg_match($badgesRegex, $badges) == false) ? 'Nombre de badges invalide !' : '' ;?></span>
      <input name="badges" type="number" class="form-control" value="<?= $_POST['badges'] ?>">
    </div>
    <div class="form-group">
      <label for="codecademyLinks">Liens codecademy :</label><span class="error"> <?= !empty($_POST) && (preg_match($urlRegex, $codecademyLinks) == false) ? 'Lien codacademy invalide !' : '' ;?></span>
      <input name="codecademyLinks" type="text" class="form-control" value="<?= $_POST['codecademyLinks'] ?>">
    </div>
    <div class="form-group">
      <label for="superhero">Si vous étiez un super-héros/une super-héroïne, qui seriez-vous et pourquoi ?</label><span class="error">* <?= !empty($_POST) && (preg_match($longString, $superhero) == false) ? 'Réponse invalide ! Votre texte doit contenir entre 30 et 500 mots et ne peut contenir que des lettres ou les caractères spéciaux suivants : !;,.-\'()' : '' ;?></span>
      <textarea name="superhero" type="text" class="form-control" value="<?= $_POST['superhero'] ?>"></textarea>
    </div>
    <div class="form-group">
      <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label><span class="error">* <?= !empty($_POST) && (preg_match($longString, $hack) == false) ? 'Réponse invalide ! Votre texte doit contenir entre 30 et 500 mots et ne peut contenir que des lettres ou les caractères spéciaux suivants : !;,.-\'()' : '' ;?></span>
      <textarea name="hack" type="text" class="form-control" value="<?= $_POST['hack'] ?>"></textarea>
    </div>
    <div class="form-group">
      <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><span class="error">* <?= !empty($_POST) && (preg_match($yesNoRegex, $experience) == false) ? 'Vous n\'avez pas coché de réponse !' : '' ;?></span>
      <div class="d-flex">
        <div class="custom-control custom-radio">
            <input type="radio" id="yesExperience" name="experience" class="custom-control-input" value="<?= $_POST['experience'] ?>">
            <label class="custom-control-label" for="yesExperience">Oui</label>
        </div>
        <div class="custom-control custom-radio ml-3">
            <input type="radio" id="noExperience" name="experience" class="custom-control-input" value="<?= $_POST['experience'] ?>">
            <label class="custom-control-label" for="noExperience">Non</label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success mb-3">Envoyer le formulaire</button>
</form>
