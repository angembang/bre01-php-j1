<?php
function getFirst(array $a): ? int
    {
        if(count($a) !== 0)
        {
            return $a[0];
        } else
        {
            return null;
        }
    }
echo getFirst([13, 24, 45]);
echo "<br>";
var_dump(getFirst([]));
echo "<br>";
?>