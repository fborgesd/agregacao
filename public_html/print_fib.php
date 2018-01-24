<?php

$j=0;
$k=1;

for($l=1;$l<8;$l++)
{
      echo "$j,";
      echo "$k";
      if($l!=7)
      {
        echo ',';
      }
      $j = $j+$k;
      $k = $j+$k;
}
    echo "" . PHP_EOL;
