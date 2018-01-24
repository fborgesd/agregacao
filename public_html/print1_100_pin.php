<?php

for($i=1;$i<101;$i++)
{
    if ($i%4===0)
    {
        echo "PIN" . PHP_EOL;
    }
    else
    {
        echo "$i*" . PHP_EOL;
    }
}
