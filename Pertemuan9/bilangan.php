<?php
$bil1 = 6;
$bil2 = 9;
$bil3 = 10;

// $max = min($bill, $bil, $bil3);
// echo $max;

if ($bil1 > $bil2 && $bil1 > $bil3)
{
    $max = $bil1;
}
elseif ($bil2 > $bil1 && $bil2 > $bil3)
{
    $max = $bil2;
}

else
{   
    $max = $bil3;
}

echo "Nilai terbesar dari ketiga bilangan adalah ".$max;
?>
