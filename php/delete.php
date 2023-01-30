<?php
include '../private/connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM pakketten WHERE id = ?";
$sth = $conn->prepare($sql);
$sth->execute([$id]);
header("Location:../index.php?page=pakket");
?>
