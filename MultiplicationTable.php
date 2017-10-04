<?php

function product ($x, $y){
  $z = $x * $y;
  return $z;
}

$rows = 100;
$cols = 100;

function createTable($rows, $cols){
  echo "<table border = '1'>";

  for ($i = 1; $i <= $rows; $i++){
    echo "<tr>";
        for ($j = 1; $j <= $cols; $j++){
          echo "<td align = 'center'>". product($i, $j). "</td>";
        }
    echo "</tr>";
  }
  echo "</table>";
}

createTable (100,100);








  ?>
