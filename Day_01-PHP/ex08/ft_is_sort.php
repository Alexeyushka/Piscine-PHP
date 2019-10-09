<?php
function ft_is_sort($tab)
{
    $default = $tab;
    sort($tab);
    if ($default == $tab)
        return (true);
    else
        return (false);
}
?>