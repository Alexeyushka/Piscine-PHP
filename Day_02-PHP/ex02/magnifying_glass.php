#!/usr/bin/php
<?php
    $homepage = file_get_contents("page.html");
    $i = 0;
    while ($homepage[$i] != "\"")
        $i++;
    $i++;
    while ($homepage[$i] != "\"")
    {
        if($homepage[$i] >= 97 && $homepage[$i] <= 122);
            $homepage[$i] = strtoupper($homepage[$i]);
        $i++;
    }
    while ($homepage[$i] != "T")
        $i++;
    while ($homepage[$i] != "<")
    {
        if($homepage[$i] >= 97 && $homepage[$i] <= 122);
            $homepage[$i] = strtoupper($homepage[$i]);
        $i++;
    }
    while ($homepage[$i] != "A")
        $i++;
    while ($homepage[$i] != "<")
    {
        if($homepage[$i] >= 97 && $homepage[$i] <= 122);
            $homepage[$i] = strtoupper($homepage[$i]);
        $i++;
    }
    while ($homepage[$i] != "A")
        $i++;
    while ($homepage[$i] != "\"")
    {
        if($homepage[$i] >= 97 && $homepage[$i] <= 122);
            $homepage[$i] = strtoupper($homepage[$i]);
        $i++;
    }
    file_put_contents("new_page.html", $homepage);
?>