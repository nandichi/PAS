<?php
include 'private/connection.php';

try {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM pakketten WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $paket = $stmt->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<div class="welcome">
    <h1>Pakket #<?php echo $paket['id']; ?></h1>
    <p>Afmeting: <?php echo $paket['afmeting']; ?></p>
    <p>Bedrijf: <?php echo $paket['bedrijf']; ?></p>
    <p>Datum: <?php echo $paket['datum']; ?></p>
    <p>Gewicht: <?php echo $paket['gewicht']; ?> KG</p>
    <p>Verzekerd: <?php echo $paket['verzekerd']; ?></p>
    <p>Spoed: <?php echo $paket['spoed']; ?></p>
    <p>Prijs: <?php echo $paket['prijs']; ?></p>
</div>