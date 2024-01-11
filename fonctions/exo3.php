<?php
function isOdd(int $a):bool
{
    if($a % 2 === 0) 
    
        return true;
    
    
    return false;
    
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";

?>