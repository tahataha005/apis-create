<?php

$today = date_create("Y-m-d");
$christmasDay = date_create(date("Y")."-12-25");

$interval = date_diff($today,$christmasDay);

$daysleft = [
    "today" => $today,
    "days left for christmas" => $interval
];

echo json_encode($daysleft)

?>

