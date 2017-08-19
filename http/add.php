<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "../database/helper.php";
    include "../database/request.php";

    $isbn = stripHTML(escapeString($_POST['isbn']));
    $title = stripHTML(escapeString($_POST['title']));
    $date = escapeString($_POST['date']);

    $stmt = "INSERT INTO books(ISBN,TITLE,DATE) VALUES ";
    $stmt .= "('{$isbn}', '{$title}', '{$date}')";

    $result = query($stmt);
    
    if($result) {
        $response = [
            "status" => "success",
            "data_inserted" => array(
                "ISBN" => $isbn,
                "TITLE" => $title,
                "DATE" => $date
            )
        ];
        send($response);
    } else {
        $response = [
            "status" => "failed",
            "with error" => getQueryError($result)
        ];
        send($response);
    }

    close_db();
}

?>