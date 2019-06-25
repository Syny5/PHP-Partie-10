<p><?= $lastName ?></p>
<p><?= $firstName ?></p>
<p><?= $birthDate ?></p>
<p><?= $birthCountry ?></p>
<p><?= $nationality ?></p>
<p><?= $physicalAddress ?></p>
<p><?= $mailAddress ?></p>
<p><?= $phoneNumber ?></p>
<p><?= $degree ?></p>
<p><?= $poleEmploi ?></p>
<p><?= $badges ?></p>
<p><?= $superhero ?></p>
<p><?= $hack ?></p>
<p><?= $experience ?></p>
<!-- Le lien codecademy n'étant pas obligatoire, nous ne l'afficherons que si la regex est respectée. -->
<p><?php if(preg_match($urlRegex, $codecademyLinks)){
  echo $codecademyLinks
} ?></p>
