<?php

$year_of_birth = $_POST['yearofbirth'];
$current_year = date("Y");
$Age_of_user = $current_year - $year_of_birth;
$response = [];
$is_prime = TRUE;

if($Age_of_user == 1){
    $is_prime = FALSE;
}else if ($Age_of_user > 1){
    for($i=2; $i<$Age_of_user; $i++){
        if($Age_of_user % $i == 0){
            $is_prime = FALSE;
            break
        }
    }
    
    if($is_prime){
        $response['Age prime'] = "False";
    }else{
        $response['Age prime'] = "True";
    }
}

echo json_encode($response);
