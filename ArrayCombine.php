<?php
    $name = array("Ram", "Prasad", "Vicky");
    $age = array(20, 23, 24);

    array_push($name, "Manoj");
    array_push($age, 23);

    $c = array_combine($name, $age); //combine array
    print_r($c);

    array_pop($name);
    array_pop($age);
  
    $c = array_combine($name, $age); //combine array
    print_r($c);
?>