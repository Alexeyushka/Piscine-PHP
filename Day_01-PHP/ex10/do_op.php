#!/usr/bin/php
<?php
if ($argc == 4)
{
    $first = trim($argv[1]);
    $sign = trim($argv[2]);
    $second = trim($argv[3]);
    if ($sign == "+")
        echo $first + $second . "\n";
    if ($sign == "-")
        echo $first - $second  . "\n";
    if ($sign == "*")
        echo $first * $second  . "\n";
    if ($sign == "/")
        echo $first / $second  . "\n";
    if ($sign == "%")
        echo $first % $second  . "\n";
}
else
    echo "Incorrect Parameters\n"
?>