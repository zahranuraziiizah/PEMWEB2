<?php
//Tangkap input login
$email =$_POST["email"];
$password =$_POST["password"];

//validasi login
if ($email == 'admin@gmail.com' && $password == '12345678'){
    header('Location: dashboard.php');
} else {
    echo "Email atau Password Tidak Valid";
}