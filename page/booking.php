<?php
session_start();
if(isset($_SESSION["email"])){
    echo "HELLO".$_SESSION["email"];
    echo "<a href='/smart_classroom_booking/logout.php'>Logout</a>";
    $month=[
        "มกราคม",
        "กุมภาพันธ์",
        "มีนาคม",
        "เมษายน",
        "พฤษภาคม",
        "มิถุนายน",
        "กรกฎาคม",
        "สิงหาคม",
        "กันยายน",
        "ตุลาคม",
        "พฤศจิกายน",
        "ธันวาคม"
    ];

    // เลือกวัน
    echo '<select class="custom-select">';
    for($i=1;$i<=31;$i++){
        echo "<option value='{$i}'>{$i}</option>";
    }
    echo "</select>";

    // เลือกเดือน
    echo '<select class="custom-select">';
    for($i=0;$i<=11;$i++){

        echo "<option value='{$i}'>{$month[$i]}</option>";
    }
    echo "</select>";

    // เลือกปี
    echo '<select class="custom-select">';
    $y=date("Y");
    for($i=$y;$i<=$y+1;$i++){
        echo "<option value='{$i}'>{$i}</option>";
    }
    echo "</select>";
}else{
    header("location:/smart_classroom_booking");
}