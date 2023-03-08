<?php

$string = $_POST['string'];
$consonants = [];

$array_of_string = explode("", $string);

for($i=0; $i<sizeof($array_of_string); $i++){
    if($array_of_string[$i] == "a" || $array_of_string[$i] == "e"|| $array_of_string[$i] == "o" || $array_of_string[$i] == "u" || $array_of_string[$i] == "i"){
        continue;
    }else{
        $counter = 1;
        for($j=$i+1; $j<sizeof($array_of_string); $j++){
            if($array_of_string[$j] == "a" || $array_of_string[$j] == "e"|| $array_of_string[$j] == "o" || $array_of_string[$j] == "u" || $array_of_string[$j] == "i"){
                $consonants = array_splice($array_of_string, $i,$counter);
                break;
            }else{
                continue;
            }
        }
        break;
    }
}

array_push($consonants, "ay");
implode("",$consonants);
array_push($array_of_string, $consonants);
implode("",$array_of_string);

$response=[];
$response['Final string'] = $array_of_string;

echo json_encode($response);