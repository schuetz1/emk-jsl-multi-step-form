<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Anmeldebestätigung | JSL EmK Calw</title>
    <link href="style/styling.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src='js/formular-steps.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/7128a2f6c2.js"></script>
</head>
<body>
<?php

require_once('Helper/sendMail.php');

?>
<h2 class="text-center">Zeltlager Anmeldung 2018</h2>
<div class="container" style="margin-top: 30px;">
    <div class="no-print">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-2">
                    <p href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</p>
                    <p>
                        <small></small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <p href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</p>
                    <p>
                        <small></small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <p href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</p>
                    <p>
                        <small></small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <p href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">4</p>
                    <p>
                        <small></small>
                    </p>
                </div>
                <div class="stepwizard-step col-xs-2">
                    <p href="#step-1" type="button" class="btn btn-success btn-circle">5</p>
                    <p>
                        <small>Ausdrucken</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h3>ANMELDEBESTÄTIGUNG</h3>
    <h4>Juhu! Du hast dich erfolgreich zum Zeltlager der EmK angemeldet. Schön, dass Du mitkommst.</h4>
    <p>Aus gesetzlichen Gründen benötigen wir noch eine Unterschrift eines Erziehungsberechtigten.</p>
    <p>Drucke dazu bitte die untere Tabelle aus und bringe sie <strong>unterschrieben</strong> zum
        Zeltlager mit.</p>
    <div class="print">
        <i class="fa fa-print" aria-hidden="true"></i> <a href="javascript:window.print()">Diese Seite drucken</a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Formular</th>
            <th>Deine Daten</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once('Helper/postVariables.php');


        if (!empty($_POST["geworben"])) {
            $geworbenePerson = $_POST["geworben"];
        }

        if (!empty($_POST["t-shirt"])) {
            $tshirt = $_POST["t-shirt"];
        }

        if (!empty($_POST["sonstige-anmerkungen"])) {
            $sonstigeAnmerkungen = $_POST["sonstige-anmerkungen"];
        }


        echo '<tr>';
        echo '<td>Vorname & Nachname</td>';
        echo '<td>' . $vorname . ' ' . $nachname . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Geburtstag</td>';
        echo '<td>' . $geburtstag . '</td>';
        echo '</tr>';

        if (!empty($alternativeAdresse)) {
            echo '<tr>';
            echo '<td>Telefonnummer</td>';
            echo '<td>' . $telefonnummer . '</td>';
            echo '</tr>';
        }

        echo '<tr>';
        echo '<td>Straße + Nr.</td>';
        echo '<td>' . $strasse . ' ' . $nr . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>PLZ & Ort</td>';
        echo '<td>' . $plz . ' ' . $ort . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>E-Mail Adresse</td>';
        echo '<td>' . $mail . '</td>';
        echo '</tr>';

        if (!empty($alternativeAdresse)) {
            echo '<tr>';
            echo '<td>Kontakt, falls Eltern während der Freizeit anders erreichbar sind</td>';
            echo '<td>' . $mail . '</td>';
            echo '</tr>';
        }

        if (!empty($_POST["impfung"])) {
            echo '<tr>';
            echo '<td>Geimpft gegen</td>';
            echo '<td>';
            foreach ($_POST["impfung"] as $impfungen) {
                echo $impfungen . ' ';
            }
            echo '</td>';
            echo '</tr>';
        }

        echo '<tr>';
        echo '<td>Besteht eine Haftpflichtversicherung?</td>';
        echo '<td>' . $_POST["haftpflichtversicherung"] . '</td>';
        echo '</tr>';


        echo '<tr>';
        echo '<td>Haftpflichtversichert bei</td>';
        echo '<td>' . $haftpflichtversichertBei . '</td>';
        echo '</tr>';


        echo '<tr>';
        echo '<td>Besteht eine Krankenversicherung?</td>';
        echo '<td>' . $_POST["krankenversicherung"] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Krankenversichert bei (Vorname, Nachname)</td>';
        echo '<td>' . $krankenversichertBei . '</td>';
        echo '</tr>';


        echo '<tr>';
        echo '<td>Name des Hausarztes</td>';
        echo '<td>' . $hausarzt . '</td>';
        echo '</tr>';

        if (!empty($_POST["baden"])) {
            echo '<tr>';
            echo '<td>Beim Baden darf teilgenommen werden</td>';
            echo '<td>' . $_POST["baden"] . '</td>';
            echo '</tr>';
        }

        if ($_POST["fotos"]) {
            echo '<tr>';
            echo '<td>Fotos dürfen in Zeitung und im Internet veröffentlich werden</td>';
            echo '<td>' . $_POST["fotos"] . '</td>';
            echo '</tr>';
        }

        if (!empty($geworbenePerson)) {
            echo '<tr>';
            echo '<td>Geworbene Personen</td>';
            echo '<td>' . $geworbenePerson . '</td>';
            echo '</tr>';
        }

        if (!empty($tshirt)) {
            echo '<tr>';
            echo '<td>T-Shirt Größe</td>';
            echo '<td>' . $tshirt . '</td>';
            echo '</tr>';
        }

        if (!empty($sonstigeAnmerkungen)) {
            echo '<tr>';
            echo '<td>Sonstige Anmerkungen</td>';
            echo '<td>' . $sonstigeAnmerkungen . '</td>';
            echo '</tr>';
        }


        ?>
        </tbody>
    </table>

    <div class="col-md-8">
        <h3>Bezahlung</h3>
        <p style="padding-right:87px;">Wir bitten um Überweisung des
            Teilnehmerbeitrages bis spätestens einen Tag
            vor Zeltlagerbeginn.
            Weitere Informationen bezüglich der An - und
            Abreise, Transport des Gepäcks und
            andere Einzelheiten werden rechtzeitig vor
            der Freizeit in einem Rundbrief erfolgen.</p>
        <p></p>
        <p><strong>Empfänger: Jungschar der EmK (zu Hd. Fr. Rahel Blaich)</strong></p>
        <p><strong>IBAN:</strong> DE93 6665 0085 0000 0462 48</p>
        <p><strong>Bank:</strong> SK Pforzheim-Calw</p>
        <p><strong>BIC:</strong> PZHSDE66XXX</p>
        <p><strong>Verwendungszweck:</strong> JSL<?php echo date("Y") + 1; ?> - Name</p>
        <p><strong>Kosten erstes Kind:</strong> 110 €</p>
        <p><strong>Kosten jedes weitere Kind:</strong> 90 €</p>
    </div>

    <div class="col-md-4">
        <h3>Kontakt</h3>
        <p>Rahel Blaich</p>
        <p>Meisenweg 3, 75365 Calw- Stammheim</p>
        <p>E-Mail: <a href="mailto:anna.rahel.blaich@gmail.com">anna.rahel.blaich@gmail.com</a></p>
    </div>
    <div class="col-md-12">
        <p style="margin-top: 40px;">Mir ist bekannt, dass für Geld und Wertsachen
            keine Haftung übernommen werden kann. Mit
            der Ausübung der Aufsichtspflicht durch zum Teil
            Minderjährige erkläre ich mich einverstanden.</p>
    </div>
    <div class="col-md-12 print-signature">
        <table class="table">
            <thead>
            <tr>
                <th><strong>Datum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                </th>
                <br><br>
                <th><strong>Unterschrift&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                </th>
            </tr>
            </thead>
        </table>


    </div>
</div>

</div>
</body>
</html>


