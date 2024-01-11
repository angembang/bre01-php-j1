<?php
$numbers = [28, 32, 44, -67, 18, 24, -98];

// Parcourir le tableau numbers
foreach($numbers as $number) {
    if($number < 0) {
        echo $number."<br>";
    };
};
?>