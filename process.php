<?php

require_once "./helpers/db.php";
require_once "./helpers/cache.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// database connection variables
$server_name = $_ENV["DB_HOST"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PASS"];
$db_name = $_ENV["DB_NAME"];

// connect to mysql database
$con = new mysqli($server_name, $username, $password, $db_name);

// check if connection is successful
if($con  -> connect_error) {
    die("Connection failed" . $con -> connect_error);
}

// get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// prepare and bind
$stmt = $con -> prepare("INSERT INTO users (fullname, email, phone, address, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt -> bind_param("ssssss", $first_name, $last_name, $email, $phone, $address, $password);

if ( $stmt -> execute() ) {
    echo "Registration was successful";
} else {
    echo "An error occurred". $stmt -> error;
}

$stmt -> close();
$con -> close();