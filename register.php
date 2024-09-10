<?php

require_once("db.php");
$Login = $_POST['Login'];
$password = $_POST['password'];
$FamNa = $_POST['FamNa'];

$sql = " INSERT INTO `users` (login, password, FamNa) VALUES ( '$Login' , '$password' , '$FamNa')";

$conn -> query($sql);

header('Location: Page/indexA.php');

?>