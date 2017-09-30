<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Anmeldung JSL | JSL EmK Calw</title>

    <link href="style/styling.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src='js/formular-steps.js'></script>
    <script src='js/main.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/7128a2f6c2.js"></script>
</head>
<body>
<h3 class="text-center">Jungscharlager Anmeldung 2018</h3>
<div class="container" style="margin-top: 30px;">
<!--    <div class="col-md-12">-->
<!--        <p>Liebe JungscharlerInnen, liebe Eltern,-->
<!--            Spiel, Spaß und jede Menge Action. Das alles werden wir vom 29.07.2018-05.08.2018-->
<!--            auf dem Zeltplatz in Nürtingen-Owen erleben.-->
<!--            Dieses mal begeben wir uns unter die Detektive. Gefährlichen Gaunern und Gangstern-->
<!--            auf den Fersen, wollen wir gemeinsam Rätsel lösen und Geheimnisse lüften. Dabei-->
<!--            erwarten uns jede Menge verrückter Abenteuer. Pläne schmieden in unserer Zentrale,-->
<!--            leise auf der Lauer liegen und schließlich……Zugriff!! Gemeinsam scheuen wir keine-->
<!--            Wege und Mittel, um die Kriminellen zu fassen. Nach Spuren suchen werden wir auch-->
<!--            in der Vergangenheit und die Helden der Bibel kennen lernen.-->
<!--            Außerdem bietet uns der Zeltplatz in Nürtingen-Owen eine Spielwiese, einen-->
<!--            Fußballplatz, ein Haus, das uns als Unterschlupf bei schlechtem Wetter dienen soll und-->
<!--            einiges mehr. Neben Geländespielen, Workshops, Lagerfeuer und Sportangeboten,-->
<!--            stehen auch spannende Bibelarbeiten auf dem Programm.-->
<!--            Aber psssssst….! Das alles ist noch top secret!!-->
<!--            Für unser Detektiv-Abenteuer gibt es leider nur begrenzt Plätze . Melde dich deshalb-->
<!--            schnell an!-->
<!--            Auf deine Anmeldung freut sich...-->
<!--            ...das gesamte Jungscharzeltlager-Team.</p>-->
<!--    </div>-->

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p>
                    <small>Kontaktdaten</small>
                </p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>
                    <small>Gesundheit</small>
                </p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>
                    <small>Allgemeines</small>
                </p>
            </div>
            <div class="stepwizard-step col-xs-3">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>
                    <small>Absenden</small>
                </p>
            </div>
        </div>
    </div>

    <form action="sucess.php" method="post" enctype="multipart/form-data">

        <!----------------- Schritt 1 ------------------------------------------------------------------------------->

        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                <h3 class="panel-title">Schritt 1 / 4</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-sm-5">
                    <label class="control-label" for="Vorname">Vorname</label>
                    <input maxlength="100" type="text" id="Vorname" name="Vorname" class="form-control"/>
                </div>
                <div class="form-group col-sm-5">
                    <label class="control-label" for="Nachname">Nachname</label>
                    <input maxlength="100" type="text" id="Nachname" name="Nachname" class="form-control"/>
                </div>
                <div class="form-group col-sm-5">
                    <label class="control-label" for="Geburtstag">Geburtstag</label>
                    <input maxlength="100" type="date" id="Geburtstag" name="Geburtstag" class="form-control"/>
                </div>

                <div class="form-group col-sm-5">
                    <label class="control-label" for="Telefonnummer">Telefonnummer</label>
                    <input maxlength="100" type="text" id="Telefonnummer" name="Telefonnummer" class="form-control"/>
                </div>

                <div class="form-group col-sm-5">
                    <label class="control-label" for="Straße">Straße</label>
                    <input maxlength="100" type="text" id="Straße" name="Strasse" class="form-control"/>
                </div>

                <div class="form-group col-sm-5">
                    <label class="control-label" for="Nr.">Nr.</label>
                    <input maxlength="100" type="text" id="Nr." name="Nr" class="form-control"/>
                </div>

                <div class="form-group col-sm-5">
                    <label class="control-label" for="PLZ">PLZ</label>
                    <input maxlength="100" type="text" id="PLZ" name="PLZ" class="form-control"/>
                </div>

                <div class="form-group col-sm-5">
                    <label class="control-label" for="Ort">Ort</label>
                    <input maxlength="100" type="text" id="Ort" name="Ort" class="form-control"/>
                </div>

                <div class="form-group col-sm-10">
                    <label class="control-label" for="E-Mail">E-Mail</label>
                    <input maxlength="100" type="text" id="E-Mail" name="Mail" class="form-control"/>
                </div>
                <div class="form-group col-sm-10">
                    <label class="control-label" for="Kontakt, wenn Eltern nicht zu Hause">Falls deine Eltern während der
                        Freizeit unter einer
                        anderen Adresse oder Telefonnummer zu erreichen sind, gebe sie bitte hier an:</label>
                    <input maxlength="100"
                           type="text"
                           id="Kontakt, wenn Eltern nicht zu Hause"
                           class="form-control"
                           name="Alternative-Adresse"/>
                </div>

                <div class="form-group col-sm-12">
                    <button class="btn btn-danger nextBtn pull-right" type="button">Nächster Schritt</button>
                </div>
            </div>
        </div>
        <!----------------- Schritt 2 ------------------------------------------------------------------------------->
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                <h3 class="panel-title">Schritt 2 / 4</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-10" for="Impfungen bestehen gegen:">Impfungen bestehen gegen:</label>
                    <div class="col-sm-10">
                        <p><input class="checkboxes"
                                  type="checkbox"
                                  name="impfung[1]"
                                  value="Zecken"> Zecken (FSME)
                        </p>

                        <p><input class="checkboxes"
                                  type="checkbox"
                                  name="impfung[2]"
                                  value="Masern, Mumps"> Masern, Mumps & Röteln</p>

                        <p><input class="checkboxes"
                                  type="checkbox"
                                  name="impfung[3]"
                                  value="Grippe"> Grippe</p>

                        <p><input class="checkboxes"
                                  type="checkbox"
                                  name="impfung[4]"
                                  value="Wundstarrkrampf"> Wundstarrkrampf</p>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-10" for="Krankenversicherung">
                        Besteht eine Krankenversicherung?</label>
                    <div class="col-sm-10">
                        <input type="radio"
                               name="krankenversicherung"
                               value="Ja"
                               checked> Ja<br>

                        <input type="radio"
                               name="krankenversicherung"
                               value="Nein"> Nein<br>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <input maxlength="100"
                               type="text"
                               class="form-control"
                               name="krankenversichert-bei"
                               placeholder="Versichert über (Vorname, Nachname)"/>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <label class="control-label" for="Hausarzt">Name des Hausarztes</label>
                        <input maxlength="100"
                               type="text"
                               id="Hausarzt"
                               name="hausarzt"
                               class="form-control"/>
                    </div>
                </div>

                <div class="form-group col-md-12 next-button">
                    <button class="btn btn-danger nextBtn pull-right" type="button">Nächster Schritt</button>
                </div>
            </div>
        </div>

        <!----------------- Schritt 3 ------------------------------------------------------------------------------->
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                <h3 class="panel-title">Schritt 3 / 4</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <label class="control-label" for="Haftpflichtversicherung">
                            Besteht eine Haftpflichtversicherung?</label>
                        <div>
                            <input type="radio"
                                   name="haftpflichtversicherung"
                                   maxlength="100"
                                   value="Ja"
                                   checked> Ja<br>

                            <input type="radio"
                                   name="haftpflichtversicherung"
                                   maxlength="100"
                                   value="Nein"> Nein
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <input maxlength="100"
                               type="text"
                               class="form-control"
                               name="haftpflichtversichert-bei"
                               placeholder="Haftpflichtversichert bei..."/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <label class="control-label" for="Baden">
                            Beim Baden darf teilgenommen werden:</label>
                        <div>
                            <input type="radio"
                                   name="baden"
                                   maxlength="100"
                                   value="Ja"
                                   checked> Ja<br>

                            <input type="radio"
                                   name="baden"
                                   maxlength="100"
                                   value="Nein"> Nein
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group col-sm-10">
                        <label class="control-label" for="Fotos düfen veröffentlicht werden">
                            Fotos dürfen im Internet + Zeitung veröffentlicht werden:</label>
                        <div>
                            <input type="radio"
                                   name="fotos"
                                   maxlength="100"
                                   value="Ja"
                                   checked> Ja<br>

                            <input type="radio"
                                   name="fotos"
                                   maxlength="100"
                                   value="Nein"> Nein
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-10">
                    <label class="control-label" for="Geworbene Personen">Folgende Freunde habe ich geworben:
                        <a href="#" data-toggle="freunde-werben"
                           title="Neu: Unsere Rabatt-Aktion. Bring Freunde mit aufs Zeltlager, die noch nie dabei waren
                           und erhalte Rabatte auf den Beitrag: 1. Freund = 10 € 2. Freund = 15 € 3. Freund = 20 €"><i
                                    class="fa fa-question-circle"></i></a>
                    </label>
                    <input maxlength="100" type="text" name="geworben" id="Geworbene Personen"
                           class="form-control"/>
                </div>

                <div class="form-group col-sm-10">
                    <label class="control-label" for="T-Shirt Größe">T-Shirt Größe (für dein JSL-T-Shirt):</label>
                    <input maxlength="100" type="text" name="t-shirt" id="T-Shirt Größe" class="form-control"/>
                </div>


                <div class="form-group col-md-12 next-button">
                    <button class="btn btn-danger nextBtn pull-right" type="button">Nächster Schritt</button>
                </div>
            </div>
        </div>

        <!----------------- Schritt 4 ------------------------------------------------------------------------------->

        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                <h3 class="panel-title">Schritt 4 / 4</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-10"
                           for="Sonstige Bemerkungen">Sonstige Bemerkungen oder Mitteilungen bspw. Vegetarier, Allergien,
                        Einnahme von Medikamenten etc.</label>
                    <div class="col-sm-10">
                        <textarea
                                name="sonstige-anmerkungen"
                                id="Sonstige Bemerkungen"
                                class="form-control">
                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <p style="margin-top: 37px;">Falls du deine Daten nochmals prüfen möchtest,
                        kannst du dich an den oberen Zahlen zum jeweiligen Schritt durchklicken.</p>
                </div>
                <div class="form-group col-md-12 next-button ">
                    <button class="btn btn-danger nextBtn pull-right" type="submit">Anmeldung jetzt absenden</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
</body>
</html>