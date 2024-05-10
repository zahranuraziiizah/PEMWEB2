<?php
include_once "koneksi.php";

$email = $_POST["email"];
$password = md5($_POST["password"]);

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$result = $dbh->query($query)->fetch();

if ($result) {
    //set session
    session_start ();
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];

    header("location:dashboard.php");
} else {
    echo "Login gagal";
}