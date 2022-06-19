<?php declare(strict_types = 1);//strict requirement
    function add($x, $y) : int{ //return type declaration
        return $x + $y;
    }
    $sum = add(5, 5);
    echo $sum;
?>