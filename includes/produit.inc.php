<?php
$json = file_get_contents("products.json");
$lecture = json_decode($json,true);
echo "<pre>";
print_r($lecture);
echo "</pre>";

?>