<?php

$host = "localhost";
$db = "Codi_1";
$user = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$pdo){
    echo "connection failed";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php
    $fullname = "";
    $username = "";
    $password = "";
    $confirmpass = "";
    $email = "";
    $phone = "";
    $birthDate = "";
    $socialSecNum = "";


    if (isset($_GET["login"])) {
        $username = $_GET["username"];
        $password = $_GET["pass"];

        $sql = 'SELECT * FROM `Users` WHERE username= "' . $username . '" AND password="' . $password . '" ';

        $stmt = $pdo->query($sql);
        $user = $stmt->fetch();

        // if ($user > 0) {
        //     echo 'data found';
        // } else {
        //     echo 'no user found';
        // }

        echo "This is All the user information <br>";
        echo "Full Name: " . $user['fullname'] . "<br>";
        echo "User: " . $user['username'] . "<br>";
        echo "Password: " . $user["password"] . "<br>";
        echo "Email: " . $user["email"] . "<br>";
        echo "Phone: " . $user["phone"] . "<br>";
        echo "Date of Birth: " . $user["birthDate"] . "<br>";
        echo "Social Secure Number: " . $user["socialSecNum"] . "<br>";
    }

    if (isset($_POST["register"])) {

        if ($_POST["pass"] == $_POST["confirmpass"]) {

            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["pass"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $birthDate = $_POST["birthDate"];
            $socialSecNum = $_POST["socialSecNum"];


            $sql = "INSERT INTO Users(`fullname`, `username`, `password`, `email`, `phone`, `birthDate`, `socialSecNum`) VALUES(?,?,?,?,?,?,?)";
            $statement = $pdo->prepare($sql);
            
            $statement->execute([
                $fullname,
                $username,
                $password,
                $email,
                $phone,
                $birthDate,
                $socialSecNum
            ]);
        }
        else {
            echo "the password didn't match the confirmed password";
        }

    }

    ?>

</body>

</html>