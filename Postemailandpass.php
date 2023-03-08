<?php

$email = $_POST['email'];
$password = $_POST['password'];

$response = [];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $response['email valid'] = "true";
}else{
    $response['email valid'] = "false";
}

if(strlen($password) < 8 or !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password) or !preg_match('/[A-Z]/', $domain)){
    $response['password valid'] = "false";
}else{
    $response['password valid'] = "True";
}

echo json_encode($response);