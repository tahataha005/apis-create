<?php

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$expression = pow($a,3) + $b*$c - $a/$b;

$result = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "expression" => $expression
];

echo json_encode($result)
?>