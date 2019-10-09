#!/usr/bin/php
<?php

    // $keys = array(
    //     'Y' => array('year', '\d{4}'),              //Année sur 4 chiffres
    //     'y' => array('year', '\d{2}'),              //Année sur 2 chiffres
    //     'm' => array('month', '\d{2}'),             //Mois au format numérique, avec zéros initiaux
    //     'n' => array('month', '\d{1,2}'),           //Mois sans les zéros initiaux
    //     'M' => array('month', '[A-Z][a-z]{3}'),     //Mois, en trois lettres, en anglais
    //     'F' => array('month', '[A-Z][a-z]{2,8}'),   //Mois, textuel, version longue; en anglais, comme January ou December
    //     'd' => array('day', '\d{2}'),               //Jour du mois, sur deux chiffres (avec un zéro initial)
    //     'j' => array('day', '\d{1,2}'),             //Jour du mois sans les zéros initiaux
    //     'D' => array('day', '[A-Z][a-z]{2}'),       //Jour de la semaine, en trois lettres (et en anglais)
    //     'l' => array('day', '[A-Z][a-z]{6,9}'),     //Jour de la semaine, textuel, version longue, en anglais
    //     'u' => array('hour', '\d{1,6}'),            //Microsecondes
    //     'h' => array('hour', '\d{2}'),              //Heure, au format 12h, avec les zéros initiaux
    //     'H' => array('hour', '\d{2}'),              //Heure, au format 24h, avec les zéros initiaux
    //     'g' => array('hour', '\d{1,2}'),            //Heure, au format 12h, sans les zéros initiaux
    //     'G' => array('hour', '\d{1,2}'),            //Heure, au format 24h, sans les zéros initiaux
    //     'i' => array('minute', '\d{2}'),            //Minutes avec les zéros initiaux
    //     's' => array('second', '\d{2}')             //Secondes, avec zéros initiaux

        $format = "12 November 2019 13:12:11";
        print_r(date_parse_from_format("j M Y H:i:s", $format));
        

?>