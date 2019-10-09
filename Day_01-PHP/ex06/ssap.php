#!/usr/bin/php
<?php
if ($argc >= 2)
{
    $arr = array();
    foreach ($argv as $elem)
    {
        if ($elem != "./ssap.php")
        {
            $temp = preg_split("/\s+/", trim($elem));
            if ($temp[0] != "")
                $arr = array_merge($arr, $temp);
        }
    }
    sort($arr);
    foreach ($arr as $elem)
        echo "$elem"."\n";
}
?>