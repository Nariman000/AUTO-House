<?php

require_once("db.php");
$Login = $_POST['Login'];
$password = $_POST['password'];
$FamNa = $_POST['FamNa'];

if(empty($Login) || empty($password) || empty($FamNa))
{
    echo "Заполните все поля";
} else {
    $sql = " SELECT * FROM `users` WHERE Login = '$Login' AND password = '$password' AND FamNa = '$FamNa'";
    $result = $conn -> query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
            header('Location: Page/indexA.php');
        }
    } else {
        header('Location: error.php');
    }

} ?>