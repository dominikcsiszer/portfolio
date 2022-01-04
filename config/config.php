<?php 
    $shost = "185.129.138.45:3306";
    $sname = "b21949";
    $spassword = "vhQW69ns";
    $dbName = "b21949";

    $conn = mysqli_connect($shost, $sname, $spassword, $dbName);

    if(!$conn) {
        echo "Connect Failed!";
        echo mysqli_connect_error();
    }
?>