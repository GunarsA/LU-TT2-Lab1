<?php

header("Content-Type: text/plain");

$letters = ['a', 'ā', 'b', 'c', 'č', 'd', 'e', 'f', 'g', 'ģ'];

for ($i = 1; $i <= count($letters); ++$i) {
    for ($j = 0; $j < $i; ++$j) {
        echo $letters[$j];
    }
    echo "\n";
}

echo "\n\n";

function getFirstMondayOfYear($year)
{
    return strtotime("first monday of january " . str_pad($year, 4, '0', STR_PAD_LEFT));
}

for ($i = 0; $i < 10; ++$i) {
    $temp = rand(1970, 2030);
    echo "First monday of the year [" . str_pad($temp, 4, '0', STR_PAD_LEFT) . "]: " . date("d M Y", getFirstMondayOfYear($temp)) . "\n";
}
