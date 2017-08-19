<?php

include_once "../config/config.php";

$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if(!$conn){
    die("Connection failed with error: " . mysqli_connect_error());
}


?>