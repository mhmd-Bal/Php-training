<?php

$stringofnumbers = $_GET['numbers'];

$list_of_numbers = [];
$list_of_numbers = $stringofnumbers.explode(",", $stringofnumbers);

$how_many_numbers = sizeof($list_of_numbers);
for($i=0; $i < $how_many_numbers; $i++){
    $min_index = $i;

    for($j=$i+1; $j < $how_many_numbers; $j++){
        if($list_of_numbers[$j] < $list_of_numbers[$min_index]){
            $min_index = $j;
        }
    }

    $temporary_number = $list_of_numbers[$min_index];
    $list_of_numbers[$min_index] = $list_of_numbers[$i];
    $list_of_numbers[$i] = $temporary_number;
}

echo json_encode($list_of_numbers);