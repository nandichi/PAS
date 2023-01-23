<?php
include '../private/connection.php';

$bedrijf = $_POST["bedrijf"];
$datum = $_POST["datum"];
$gewicht = $_POST["gewicht"];
$verzekerd = isset($_POST["verzekerd"]) ? 1 : 0;
$spoed = isset($_POST["spoed"]) ? 1 : 0;
$afmeting = $_POST["afmeting"];

$prijs = 0;
if ($gewicht > 0 && $gewicht <= 10) {
    $prijs = 5.85;
} elseif ($gewicht > 10 && $gewicht <= 30) {
    $prijs = 11.44;
}


if ($verzekerd) {
    $prijs += ($prijs * 0.1);
}
if ($spoed) {
    $prijs += ($prijs * 0.2);
}

$stmt = $conn->prepare("INSERT INTO pakketten (bedrijf, datum, prijs, gewicht, verzekerd, spoed, afmeting) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$bedrijf, $datum, $prijs, $gewicht, $verzekerd, $spoed, $afmeting]);

if ($stmt->rowCount() > 0) {
    echo "Data has been saved.";
} else {
    print_r($stmt->errorInfo());
}
?>