<?php
$word = $_GET["word"];
$test = "";

if (strrev($word) == $word){
    $test = "Palindrome";
} 
else{
    $test = "Not a Palindrome";
}

$object = [
    "word" => $word,
    "result" => $test
];

echo json_encode($object);
?>