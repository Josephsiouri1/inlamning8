<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbserverprogrammering";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$comment = $_POST["comment"];

$sql = "SELECT * FROM Guestbook;";
$result = $conn->query($sql);


$sql = "INSERT INTO guestbook (id, name, email, tel, comment, time) VALUES ($result->num_rows+1, '$name', '$email', $tel, '$comment', NOW())";
$result = $conn->query($sql);


$conn->close();

header('Location: ' . './guestbook.php');
