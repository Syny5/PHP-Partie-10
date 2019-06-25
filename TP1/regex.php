<?php
    // On établit nos Expressions Régulières pour sécuriser notre formulaire
    $firstNameRegex = '/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/';
    $lastNameRegex = '/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \']?[a-zA-Zéèêëiîïôöüäç ]{2,18}/';
    $addressRegex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \'-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \'-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \'-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/'
    $shortString = '/^[A-Z]{0,1}[a-zéèêëiîïôöüäç]{2,25}$/';
    $middleString = '/^[a-zA-Zéèêëiîïôöüäç\' -,.0-9]{3,50}$/';
    $longString = '/^[a-zA-Zéèêëiîïôöüäç\' -,!.;:?()]{20,500}$/';
    $phoneRegex = '/[0]+[0-9]{9}/';
    $dateRegex = '/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/';
    $mailRegex = '/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/';
    $urlRegex = '/https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/';
    $poleEmploiRegex = '/[0-9]{7}[a-zA-Z]{1}/';
    $badgesRegex ='/[0-9]{1}+[0]?/';
    $degreeRegex = '/^[1-2-3-4]{1}$/';
    $yesNoRegex = '/Oui|Non/';
?>
