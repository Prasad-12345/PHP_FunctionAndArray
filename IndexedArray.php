<?php
    $colours = array("red", "green", "blue", "yellow", "orange");

    print_r($colours);
    
    sort($colours);

    for($i = 0; $i < count($colours); $i++){
        echo $colours[$i] . " ";
    }

    echo "\n";

    rsort($colours);
    foreach($colours as $value){
        echo $value . " ";
    }

    echo count($colours);
?>
