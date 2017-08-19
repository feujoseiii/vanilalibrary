<?php 

require "connect.php";

function stripHTML($string) {
    return strip_tags($string);
}

function escapeString($string) {
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}

function hasResult($result) {
    return mysqli_num_rows($result);
}

function query($statement) {
    global $conn;
    return mysqli_query($conn, $statement);
} 

function getQueryError($result) {
    global $conn;
    return mysqli_error($conn);
}

function close_db(){
    global $conn;
    mysqli_close($conn);
}


?>