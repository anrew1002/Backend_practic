<?php require "logic/multiplication.php";
    $table = multiplication_f();
    echo "<table class='multi_table'>\n";
    foreach ($table as $key1 => $row){
        echo '<tr>';
        foreach ($row as $key2 => $cell){
            if ($key1==$key2){
                echo '<td class="d_td">',$cell,'</td>';
            } else{
            echo '<td>',$cell,'</td>';
        }}
        echo "</tr>\n";
    }
    echo '</table>';