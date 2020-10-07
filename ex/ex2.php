<?php
include "function.php";

// function แบบไม่ต้อง return ค่า
hello("nan");
hello("tu");
hello("tom");
function hello($name){
    echo "Hello ".$name."<br>";
}

// function แบบ return ค่า
$result=calculate(1,200);
echo $result*5;
function calculate($num1, $num2){
    return $num1 + $num2;
}

///////////////////////////////////////////

$conn = connectDB();
find($conn,$_GET["id"]);