<?php
function connectDB(){
    $conn = new mysqli("localhost", "root", "");
    mysqli_select_db($conn,"xxx");
    return $conn;
}

function find($conn,$user_id){
    $query="SELECT * FROM user WHERE user_id={$user_id}";
    $table=mysqli_query($conn,$query);
    while($row=mysqli_fetch_object($table)){
        echo $row->user_id."/ Hello ".$row->fname." ".$row->lname;
    }
}