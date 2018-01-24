<?php

$j="*";

for($k=1;$k<6;$k++)
{
    for($i=1;$i<6;$i++)
    {
      echo "$j" . PHP_EOL;
      $j="$j*";
    }
    $j="*";
}
