#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = trim($argv[1]);
    $new_arr = preg_replace('/\s+/', ' ', $arr);
    echo $new_arr . "\n";
}
?>