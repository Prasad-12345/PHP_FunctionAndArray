<?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 3; $j++){
            echo $cars[$i][$j];
        }
    }

?>