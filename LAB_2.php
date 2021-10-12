<table border="1">
<?php
$rows=8; // число строк
$cols=8; // число столбцов

    for($tr=1; $tr<=8 ; $tr++){
        echo "<tr>";
        for($td=1; $td<=8 ; $td++){
            if(($tr==1) + ($td==1)){
                echo "<th style='background-color:yellow;font-weight:900'>",
                $tr * $td, "</th>";
            }
            else{
                echo"<td>",$tr*$td,"</td>";
            }
        }
        echo "</tr>";
    }
?>
</table>