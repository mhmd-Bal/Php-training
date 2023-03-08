<?php
    $ip = file_get_contents('https://api.ipify.org');
    
    // $ip = $_SERVER["REMOVE_ADDR"];

    echo json_encode($ip);
?>