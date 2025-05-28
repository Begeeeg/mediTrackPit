<?php

    $db_server = "localhost:3500";
    $db_user = "begeeeg"; // Corrected username
    $db_pass = ""; 
    $db_name = "meditrack.git";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch(mysqli_sql_exception) {
        echo "Connected not successfully";
    }

?>