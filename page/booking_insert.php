<?php
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];
//echo $day." ".$month." ".$year;
//echo $_POST["day"]." ".$_POST["month"]." ".$_POST["year"];

$conn = new mysqli("localhost", "root", "");
mysqli_select_db($conn,"classroom");
$query="INSERT INTO booking (day, month, year) VALUES ($day, '$month', $year)";
//echo $query;
mysqli_query($conn,$query); // mysqli_query คำสั่งส่ง string ขึ้นไป db
echo "<div> เพิ่มข้อมูลเรียบร้อยแล้ว </div>";