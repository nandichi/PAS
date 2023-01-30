<?php
session_start();

include '../private/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = 'SELECT password, role FROM users WHERE username= :username';
$query = $conn->prepare($sql);
$query->bindParam(':username', $username);
$query->execute();


$result = $query->fetch(PDO::FETCH_ASSOC);
$hashed_password = $result['password'];
$role = $result['role'];


if (password_verify($password, $hashed_password)) {
    if ($role == "admin") {
        $_SESSION['ingelogd'] = true;
        $_SESSION['username'] = $username;
        header('location: ../index.php?page=admin');
    } elseif ($role == "klant") {
        $_SESSION['ingelogd1'] = true;
        $_SESSION['username'] = $username;
        header('location: ../index.php?page=homepage');
    } else {
        $_SESSION['ingelogd1'] = true;
        $_SESSION['username'] = $username;
        header('location: ../index.php?page=homepage');
    }
} else {
    $_SESSION['melding'] = 'Combinatie gebruikersnaam en wachtwoord onjuist.';
    header('location: ../index.php?page=login');
}
?>