<?php

$servername = "localhost";
$dbUsername = "secureit_admin";
$dbPassword = "Admin123*";
$dbName = "secureit_pnewconnect";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
?>
