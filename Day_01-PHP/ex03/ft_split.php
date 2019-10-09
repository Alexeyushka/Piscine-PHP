<?php
function ft_split($str)
{
    $arr = explode(" ", $str);
    $filter = array_filter($arr);
    $values = array_values($filter);
    $sorted = sort($values);
    return ($values);    
}
?>