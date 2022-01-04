<?php 
    $shost = "";
    $sname = "";
    $spassword = "";
    $dbName = "";

    $conn = mysqli_connect($shost, $sname, $spassword, $dbName);

    if(!$conn) {
        echo "Connect Failed!";
        echo mysqli_connect_error();
    }
?>