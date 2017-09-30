<?php
/**
 * Created by PhpStorm.
 * User: karstenschuetz
 * Date: 30.09.17
 * Time: 11:38
 */

$vorname = $_POST["Vorname"];
$nachname = $_POST["Nachname"];
$geburtstag = $_POST["Geburtstag"];
$telefonnummer = $_POST["Telefonnummer"];
$strasse = $_POST["Strasse"];
$nr = $_POST["Nr"];
$plz = $_POST["PLZ"];
$ort = $_POST["Ort"];
$mail = $_POST["Mail"];
$alternativeAdresse = $_POST["Alternative-Adresse"];
$haftpflichtversichertBei = $_POST["haftpflichtversichert-bei"];
$krankenversichertBei = $_POST["krankenversichert-bei"];
$hausarzt = $_POST["hausarzt"];
$haftpflichtversicherung = $_POST["haftpflichtversicherung"];
$krankenversicherung = $_POST["krankenversicherung"];
$darfBaden = $_POST["baden"];
$fotosSindErlaubt = $_POST["fotos"];

$impfungenArray = [];

if (!empty($_POST["impfung"])) {
    foreach ($_POST["impfung"] as $impfungen) {
        $impfungenArray[] = $impfungen;
    }
}
$impfungen = implode(",", $impfungenArray);

$startTimeStamp = strtotime(date('Y/m/d'));
$endTimeStamp = strtotime("2018/07/29");

$timeDiff = abs($endTimeStamp - $startTimeStamp);
$numberDays = $timeDiff/86400;

$daysToJsl = intval($numberDays);