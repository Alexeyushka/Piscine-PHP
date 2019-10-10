#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $weekday_check = 0;
        $month_check = 0;
        $date_check = 0;

        $format = $argv[1];
        $date = (date_parse_from_format("j M Y H:i:s", $format));
        $i = 0;
        while ($format[$i] != " ")
        {    
            $weekday[$i] = $format[$i];
            $i++;
        }
        $str = implode("", $weekday);
        if ($str == "Lundi" || $str == "lundi")
            $weekday_check = 1;
        else if ($str == "Mardi" || $str == "mardi")
            $weekday_check = 1;
        else if ($str == "Mercredi" || $str == "mercredi")
            $weekday_check = 1;
        else if ($str == "Jeudi" || $str == "jeudi")
            $weekday_check = 1;
        else if ($str == "Vendredi" || $str == "vendredi")
            $weekday_check = 1;
        else if ($str == "Samedi" || $str == "samedi")
            $weekday_check = 1;
        else if ($str == "Dimanche" || $str == "dimanche")
            $weekday_check = 1;
        else
        {   
            echo "Wrong Format\n";
            exit(-1);
        }
        $i++;
        if ($weekday_check == 1)
        {
            while ($format[$i] != " ")
                $i++;
        }
        $i++;
        while ($format[$i] != " ")
        {
            $monthname[$i] = $format[$i];
            $i++;
        }
        $month = implode("", $monthname);
        if ($month == "Janvier" || $month == "janvier")
        {
            $date[month] = 1;
            $month_check = 1;
        }
        else if ($month == "Fevrier" || $month == "fevrier")
        {
            $date[month] = 2;
            $month_check = 1;
        }
        else if ($month == "Mars" || $month == "mars")
        {
            $date[month] = 3;
            $month_check = 1;
        }
        else if ($month == "Avril" || $month == "avril")
        {
            $date[month] = 4;
            $month_check = 1;
        }
        else if ($month == "Mai" || $month == "mai")
        {
            $date[month] = 5;
            $month_check = 1;
        }
        else if ($month == "Juin" || $month == "juin")
        {
            $date[month] = 6;
            $month_check = 1;
        }
        else if ($month == "Juillet" || $month == "juillet")
        {
            $date[month] = 7;
            $month_check = 1;
        }
        else if ($month == "Aout" || $month == "aout")
        {
            $date[month] = 8;
            $month_check = 1;
        }
        else if ($month == "Septembre" || $month == "septembre")
        {
            $date[month] = 9;
            $month_check = 1;
        }
        else if ($month == "Octobre" || $month == "octobre")
        {
            $date[month] = 10;
            $month_check = 1;
        }
        else if ($month == "Novembre" || $month == "novembre")
        {
            $date[month] = 11;
            $month_check = 1;
        }
        else if ($month == "Decembre" || $month == "decembre")
        {
            $date[month] = 12;
            $month_check = 1;
        }
        else
        {   
            echo "Wrong Format\n";
            exit(-1);
        }

        if ($month_check == 1 && $weekday_check == 1)
            if (preg_match("/^(([0-3]){1}([0-9]){1}|([1-9]){1})$/", $date[day]) && $date[day] > 0 && $date[day] <= 31 &&
                preg_match("/^([0-9]){4}$/", $date[year]) && $date[year] >= 1970 && $date[year] < 9999 && 
                preg_match("/^([0-9]){2}|([0-9]){1}$/", $date[minute]) && $date[minute] >= 0 && $date[minute] < 60 &&
                preg_match("/^([0-9]){2}|([0-9]){1}$/", $date[hour]) && $date[hour] >= 0 && $date[hour] < 24 &&
                preg_match("/^([0-9]){2}|([0-9]){1}$/", $date[second]) && $date[second] >= 0 && $date[second] < 60)
            {
                date_default_timezone_set('Europe/Moscow'); 
                $temp = "$date[year]-$date[month]-$date[day] $date[hour]:$date[minute]:$date[second]";
                $olddate = strtotime("1970-01-01 00:00:00");
                $newdate = strtotime($temp);
                $res = $newdate - $olddate;
                echo $res."\n";
            }
            else
                echo "Wrong Format\n";
    }
?>