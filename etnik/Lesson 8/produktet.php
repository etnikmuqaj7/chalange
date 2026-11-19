

<?php

$host = "localhost";
$user = "root";
$db = "test";
$pass = "";


?>

<?php


try {

$pdo = new PDO("mysql:host=localhost;dbname=test","root","");

$sql = "ALTER TABLE products ADD email VARCHAR(255)";

$pdo->exec($sql);

echo "Kolona u shtua me sukses!";
}
catch(PDOException $e){
    echo "ERROR";
}

?>

























// try {



// $pdo = new PDO("mysql:host=localhost;dbname=test","root","");

// $username = "Jack";

// $password = password_hash("mypassword", PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

// $pdo->exec($sql);

// echo "Te dhenat jane shtuar";

// }
// catch(PDOException $e){
//     echo "Nuk funksionon";
// }


// shtimi i nje kolone te re permes php-----------------------------------


// try {

// $pdo = new PDO("mysql:host=localhost;dbname=testdb","root","");

// $sql = "ALTER TABLE users ADD email VARCHAR(255)";

// $pdo->exec($sql);

// echo "Kolona u shtua me sukses!!!!!!!!!!!!!!!!!!!!!!!";
// }
// catch(PDOException $e){
//     echo "ERROR";
// }


// fshirja e kolones-----------------------------


// try {

// $pdo = new PDO("mysql:host=localhost;dbname=testdb","root","");

// $sql = "ALTER TABLE users DROP COLUMN username";
// $pdo->exec($sql);

// echo "Kolona u fshi me sukses!!!!!!!!!!!!!!!!!!!!!!!";
// }

// catch(PDOException $e){
//     echo "ERROR";
// }

// fshirja e tabeles--------------
// try {

// $pdo = new PDO("mysql:host=localhost;dbname=testdb","root","");

// $sql = "DROP TABLE products";
// $pdo->exec($sql);

// echo "Tabela u fshi me sukses!!!!!!!!!!!!!!!!!!!!!!!";
// }

// catch(PDOException $e){
//     echo "ERROR";
// }



// try {
//     $conn = new PDO("mysql:host = $host; dbname = $dbname;", $user , $pass);

//     echo "Connected";
// }
// catch (Exeption $e) {
//     echo "Not connected";
// };

// try{
//     $conn = new PDO("mysql:host=$host", $user,$pass);

//     $sql = "CREATE DATABASE testdb";
//     $conn->exec($sql);

//     echo "Databasa u krijua";
// }
// catch (Exception $e){
//     echo "Databaza nuk eshte kriju";
// }





// Lesson i ri



// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db", $user,$pass);

//     $sql= "CREATE TABLE products (id INT (6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL )";

//     $pdo->exec($sql);

//     echo "Tabela u krijua me sukses";

// }
// catch(Expetion $e){
//     echo"Tabela nuk u krijua";
// }    


