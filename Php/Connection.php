<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpdatabase';

$connection = new mysqli($host, $username, $password, $database);

$FirstName = $_POST['Fname_textbox'];
$LastName = $_POST['Lname_textbox'];
$Birthdate = $_POST['Date_textbox'];
$Age = $_POST['Age_textbox'];
$Gender = $_POST['Gender_textbox'];
$Email = $_POST['Email_textbox'];
$ConNum = $_POST['Connum_textbox'];
$Username = $_POST['Username_textbox'];
$Password = $_POST['Password_textbox'];
$Conpass = $_POST['Conpass_textbox'];

$databasequery = "CREATE DATABASE IF NOT EXISTS $database";
if($connection->query($databasequery) === TRUE){
}

$connection->select_db($database);

$tablequery = "CREATE TABLE IF NOT EXISTS phpaccount(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR(35),
    Last_Name VARCHAR(35),
    Birthdate DATE,
    Age INT(100),
    Gender VARCHAR(15),
    Email VARCHAR(40),
    Con_Num VARCHAR(11),
    Username VARCHAR(100),
    Password VARCHAR(100),
    Con_Pass VARCHAR(100)
)";

if($connection->query($tablequery) === TRUE){
}

$alterquery = "ALTER TABLE phpaccount AUTO_INCREMENT = 1";
if($connection->query($alterquery) === TRUE){
}
?>