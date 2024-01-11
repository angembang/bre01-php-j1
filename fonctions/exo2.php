<?php

// Fonction qui calcule la moyenne des valeurs d'un tableau
function average(array $a): float
{
    $sum = 0;
    /*for($i = 0; $i < count($a); $i++)
    {   
        $sum += $a[$i];
    }
    return $sum / count($a);
    */
    foreach($a as $b)
    {
        $sum += $b;
    }
    return $sum / count($a);
}

echo average([12, 15, 18, 9])."<br>";
echo average([12, 15, 18, 11, 14])."<br>";
?>