<?php


require_once('postVariables.php');

$to1 = '';
$to2 = $mail;

$from = "From: EmK Calw";

$subject = $vorname . " " . $nachname . ' aus ' . $ort . ' hat sich zum Zeltlager angemeldet!';
$subject2 = 'Juhu ' . $vorname . ', du hast dich erfolgreich zum Zeltlager angemeldet';

//Mail an Leiter
$message =
    'Juhu! Es hat sich ein neues Kind zum Zeltlager angemeldet' . PHP_EOL .
    'Jetzt sind es noch: ' . $daysToJsl .' Tage bis zum Start'  . PHP_EOL . PHP_EOL .
    'Vorname: ' . $vorname . PHP_EOL .
    'Nachname: ' . $nachname . PHP_EOL .
    'Geburtstag: ' . $geburtstag . PHP_EOL .
    'Telefonnummer: ' . $telefonnummer . PHP_EOL .
    'Straße: ' . $strasse . PHP_EOL .
    'Nr.: ' . $nr . PHP_EOL .
    'PLZ: ' . $plz . PHP_EOL .
    'Ort: ' . $ort . PHP_EOL .
    'E-Mail: ' . $mail . PHP_EOL .
    'Alternative Kontakt (wenn Eltern nicht zuhause): ' . $alternativeAdresse . PHP_EOL .
    'Impfungen: ' . $impfungen . PHP_EOL .
    'Haftpflichtversicherung: ' . $haftpflichtversicherung . PHP_EOL .
    'Haftpflichtversichert bei: ' . $haftpflichtversichertBei . PHP_EOL .
    'Krankenversicherung: ' . $haftpflichtversicherung . PHP_EOL .
    'Krankenversichert bei: ' . $krankenversicherung . PHP_EOL .
    'Hausarzt: ' . $hausarzt . PHP_EOL .
    'Kind darf baden: ' . $darfBaden . PHP_EOL .
    'Fotos sind erlaubt: ' . $fotosSindErlaubt . PHP_EOL;

//Mail an Teilnehmer
$message2 = 'ANMELDEBESTÄTIGUNG' . PHP_EOL .
    'Juhu ' . $vorname . '! Du hast dich erfolgreich zum Zeltlager der Evangelisch-methodistischen Kirche angemeldet. Schön, das Du mitkommst. Aus gesetzlichen Gründen, benötigen wir noch eine Unterschrift eines Erziehungsberechtigten. Drucke dazu bitte die Tabelle auf der Webseite aus und bringe sie unterschrieben zum Zeltlager mit. Alternativ kannst Du auch diese E-Mail ausdrucken und unterschrieben mitbringen.' . PHP_EOL . PHP_EOL .
    'Nur noch ' . $daysToJsl . ' Tage, bis das Zeltlager beginnt.'  . PHP_EOL . PHP_EOL .

    'Deine Anmeldedaten: ' . PHP_EOL . PHP_EOL .
    'Vorname: ' . $vorname . PHP_EOL .
    'Nachname: ' . $nachname . PHP_EOL .
    'Geburtstag: ' . $geburtstag . PHP_EOL .
    'Telefonnummer: ' . $telefonnummer . PHP_EOL .
    'Straße: ' . $strasse . PHP_EOL .
    'Nr.: ' . $nr . PHP_EOL .
    'PLZ: ' . $plz . PHP_EOL .
    'Ort: ' . $ort . PHP_EOL .
    'E-Mail: ' . $mail . PHP_EOL .
    'Kontakt (deine Eltern nicht zuhause sind): ' . $alternativeAdresse . PHP_EOL .
    'Impfungen: ' . $impfungen . PHP_EOL .
    'Haftpflichtversicherung: ' . $haftpflichtversicherung . PHP_EOL .
    'Haftpflichtversichert bei: ' . $haftpflichtversichertBei . PHP_EOL .
    'Krankenversicherung: ' . $haftpflichtversicherung . PHP_EOL .
    'Krankenversichert bei: ' . $krankenversicherung . PHP_EOL .
    'Hausarzt: ' . $hausarzt . PHP_EOL .
    'Kind darf baden: ' . $darfBaden . PHP_EOL .
    'Fotos sind erlaubt: ' . $fotosSindErlaubt . PHP_EOL . PHP_EOL .

    'Wir bitten um Überweisung des Teilnehmerbeitrages bis spätestens einen Tag vor Zeltlagerbeginn.' . PHP_EOL . PHP_EOL .
    'Empfänger: Jungschar der EmK (zu Hd. Fr. Rahel Blaich)' . PHP_EOL .
    'IBAN: DE93 6665 0085 0000 0462 48' . PHP_EOL .
    'Bank: SK Pforzheim-Calw' . PHP_EOL .
    'BIC: PZHSDE66XXX' . PHP_EOL .
    'Verwendungszweck: JSL 2018' . PHP_EOL .
    'Kosten erstes Kind: 110 €' . PHP_EOL .
    'Kosten jedes weitere Kind: 90 €' . PHP_EOL . PHP_EOL .

    'Kontakt: ' . PHP_EOL . 'Rahel Blaich,' . PHP_EOL .
    'Meisenweg 3,' . PHP_EOL . '75365 Calw- Stammheim,' . PHP_EOL .
    'E-Mail: anna.rahel.blaich@gmail.com' . PHP_EOL . PHP_EOL .
    'Weitere Informationen bezüglich der An - und Abreise, Transport des Gepäcks und andere Einzelheiten werden rechtzeitig vor der Freizeit in einem Rundbrief erfolgen' . PHP_EOL . PHP_EOL .
    'Über Deine Anmeldung freut sich das gesamte Jungscharzeltlager-Team!';

mail($to1, $subject, $message, $from);
mail($to2, $subject2, $message2, $from);





