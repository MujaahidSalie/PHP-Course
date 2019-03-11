<?php
include_once 'dbh.inc.php';
//Protect your database against SQL injection
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO users (user_first, user_last, user_email, user_id, user_pwd)
VALUES ('$first', '$last', '$email', '$uid', '$password');";
$result = mysqli_query($conn, $sql);
header("Location: ../index.php?signup=success");
