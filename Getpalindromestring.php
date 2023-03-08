<?php

$string_to_check = $_GET['string'];
$response = [];

if($string_to_check == strrev($string_to_check)){
    $response['String is palindrome'] = "True";
}else{
    $response['String is palindrome'] = "False";
}

echo json_encode($response);