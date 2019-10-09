#!/usr/bin/php
<?php
if ($argc > 1)
{
    $first = trim($argv[1]);
    $first_elem = preg_split("/\s+/", $first);
    $others = trim($argv[1]);
    $others_d = preg_split("/\s+/", $others);
    $final = array_splice($others_d, 1);

foreach ($final as $elem)
    echo $elem." ";
echo $first_elem[0]."\n";
}
?>