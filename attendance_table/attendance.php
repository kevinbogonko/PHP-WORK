<?php

    // Crreate an sql attendance table
    // table contains colums made out of date values
    // id values = members identification numbbers
    // attendance status; 1= full attendance, 0= absent
    // status for saturday and sunday = 0;

    //get column names out of date values

    $day1 = date("d-m-y");
    $day2 = date();
    $day3 = date();
    $day4 = date();
    $day5 = date();
    $day6 = date();
    $day7 = date();

    echo $day1;

?>