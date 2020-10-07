<?php
session_start();
$email = @$_POST["email"];
$password = @$_POST["password"];
if($email == "nan" && $password == "111"){
    $_SESSION["email"]=$email;
    header("location:/smart_classroom_booking/?page=booking"); // คำสั่ง redirect หน้า
}else{
    echo "wrong password";
}