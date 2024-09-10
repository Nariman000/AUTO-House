 <?php

 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'mysqr';

$conn = mysqli_connect($servername, $username, $password, $dbname);

 if(!$conn){
    die("Conn Failed");
 } else{
   "Успех";
 } ?>