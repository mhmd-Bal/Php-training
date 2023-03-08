<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$response = [];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $response['email valid'] = "true";
}else{
    $response['email valid'] = "false";
}

if()