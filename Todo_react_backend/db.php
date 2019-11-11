<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/12/20
 * Time: 14:18
 */
$servername = "localhost";
$username = "sandathe_athena";
$password = "athena1997";
$dbname = 'sandathena_react_todo';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}