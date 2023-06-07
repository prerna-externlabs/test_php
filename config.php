<?php

// $keyId = 'rzp_test_e21DBIZjmzMmsB';
// $keySecret = 'FWGf6dWQLpmIPzOTqIm7nDQH';
$displayCurrency = 'INR';

error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_php";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
?>
