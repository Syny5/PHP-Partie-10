<?php
    // On établit nos Expressions Régulières pour sécuriser notre formulaire
    $firstNameRegex = '/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/'; // Le prénom peut être simple ou composé, il ne pourra excéder 24 caractères ni terminer par un caractère spécial.
    $lastNameRegex = '/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \']{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \']{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/'; // Le nom peut être simple ou composé, il n'excédera pas 43 caractères et ne contiendra pas plus de 2 caractères spéciaux (-') à l'intérieur du texte.
    $addressRegex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \'-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \'-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \'-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/' // L'adresse commence par un numéro allant de 1 à 999. Elle enchaine par une virgule ou un espace, puis par une suite de caractères. Les caractères spéciaux disponibles sont " ',- ". Ils ne peuvent pas être placés à la fin de l'adresse.
    $shortString = '/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/'; // Chaîne de 2 à 25 lettres.
    $longString = '/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\' -,!.;:?()]{20,500}$/'; // Chaîne de 20 à 500 caractères pluôt libre.
    $phoneRegex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/'; // Le numéro doit commencer par un zéro, puis 9 autres chiffres doivent être indiqués. L'utilisateur peut mettre un espace toutes les deux lettres s'il le souhaite.
    $dateRegex = '/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/'; // Date au format dd-mm-yyyy
    $mailRegex = '/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/'; // Chaîne de caractères (lettres, nombres, caractères spéciaux). "@" obligatoire. Puis deuxième chaîne de caractères. "." obligatoire. Puis 2 à 6 lettres.
    $urlRegex = '/https?:\/\/(www\.)?(codecademy)\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/'; // Lien libre renvoyant vers le site codecademy.
    $poleEmploiRegex = '/[0-9]{7}[a-zA-Z]{1}/'; // 7 chiffres + 1 lettre à la fin.
    $badgesRegex ='/[0-9]{1}+[0]?/'; // 1 chiffre de 1 à 9 + un 0 optionnel
    $degreeRegex = '/[1-4]{1}/'; // Un numéro de 1 à 4 correspondant à la valeur des options.
    $yesNoRegex = '/Oui|Non/'; // La valeur doit être soit oui, soit non.
?>
