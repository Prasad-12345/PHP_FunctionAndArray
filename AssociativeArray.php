<?php
    $age = array("peter"=>"20", "ben"=>"22", "joe"=>"24");
    
    foreach($age as $x => $x_value){
        echo $x . "age is" . $x_value;
    }

    echo "peter age is" . $age['peter'];
?>