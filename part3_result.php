<?php

function getFirstMondayOfYear($year)
{
    return strtotime("first monday of january " . str_pad($year, 4, '0', STR_PAD_LEFT));
}

if(!$_GET["start"] || !$_GET["end"])
{
    echo "Missing input";
    exit();
}

$start = intval($_GET["start"]);
$end = intval($_GET["end"]);

if (
    $end < $start ||
    $start < 0 ||
    $end < 0
) {
    echo "Invalid input";
    exit();
}

for ($i = $start; $i <= $end; ++$i) {
    echo "First monday of the year [" . str_pad($i, 4, '0', STR_PAD_LEFT) . "]: " . date("d M Y", getFirstMondayOfYear($i)) . "<br>";
}
