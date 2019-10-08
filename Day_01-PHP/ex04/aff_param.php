#!/usr/bin/php
<?php
if ($argc >= 2)
{
    $i = 1;
    while ($i < $argc)
    {
        $str = $argv[$i];
        $i++;
        echo "$str\n";
    }
}
?>