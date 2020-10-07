<?php
$conn = new mysqli("localhost", "root", "");
mysqli_select_db($conn,"classroom");

$query="SELECT * FROM booking";
$table=mysqli_query($conn,$query);
while($row=mysqli_fetch_object($table)){
    echo "<div>".$row->id." ".$row->day." ".$row->month." ".$row->year."</div>";
}