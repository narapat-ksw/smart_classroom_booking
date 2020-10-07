<?php
$id = $_GET["id"]; // รับค่า id จาก url มาเก็บไว้ในตัวแปร $id
$conn = new mysqli("localhost", "root", ""); // การเชื่อม db: "host", "username", "pw" เก็บผลลัพธ์การเชื่อมไว้ที่ตัวแปร $conn
mysqli_select_db($conn,"xxx"); // เลือก db โดยการส่งค่าตัวแปร $conn, ชื่อ database ให้ php
$query="SELECT * FROM user WHERE user_id={$id}"; // ภาษา sql : เก็บตัวแปร $query
$table=mysqli_query($conn,$query); // function : mysqli_query ส่งตัวแปรการเชื่อมต่อ $conn และ คำสั่ง $query เข้าไป แล้วเอาผลลัพธ์เก็บไว้ตัวแปร $table คือผลลัพธ์ของ mysqli
while($row=mysqli_fetch_object($table)){
    echo $row->user_id."/ Hello ".$row->fname." ".$row->lname;
}
