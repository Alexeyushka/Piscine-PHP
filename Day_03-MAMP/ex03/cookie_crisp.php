<?php
    $value = $_GET;
    if ($value[action] == "set" && $value[name] != "" && $value[value] != "")
    {
        setcookie($value["name"], $value["value"], time() + 3600, "/");
    }
    if ($value[action] == "get" && $value[name] != "" && !$value[value])
    {
        $name = $value[name];
        if ($_COOKIE[$name])
        {
            echo "$_COOKIE[$name]\n";
        }
    }
    if ($value[action] == "del" && $value[name] != "" && !$value[value])
    {
        setcookie($tab[name], "", time() - 3600);
    }
?>