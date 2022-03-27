<?php

function process($m)
{
    $sum=0;
    foreach($m as $value)
    {
        $sum +=$value;
    }
    return $sum;
}

$rohan = [1,2,3,4,5,6];
$summarks = process($rohan);
echo "Total sum is $summarks <br> ";

?>
