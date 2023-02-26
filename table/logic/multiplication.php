<?php
function multiplication_f($x=10,$y=10){
    $table = [];
    for($i=1;$i <= $y;$i++){
        $row = [];
        for($j=1;$j <= $x;$j++){
            $row[] = $i*$j;
        }
        $table[] = $row;

    }
    return $table;
}