#!/usr/bin/php
<?php
function cmp($a, $b)
{
	$i = 0;
	$characters = "abcdefghijklmnopqrstuvwxyz0123456789!\"
			#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$a_pos = stripos($characters, $a[$i]);
		$b_pos = stripos($characters, $b[$i]);
		if ($a_pos > $b_pos)
			return (1);
		else if ($a_pos < $b_pos)
			return (-1);
		else
			$i++;
	}
}
if ($argc >= 2)
{
    $arr = array();
    foreach ($argv as $elem)
    {
        if ($elem != "./ssap2.php")
        {
            $temp = preg_split("/\s+/", trim($elem));
            if ($temp[0] != "")
                $arr = array_merge($arr, $temp);
        }
    }
    usort($arr, "cmp");
    foreach ($arr as $elem)
        echo "$elem"."\n";
}
?>