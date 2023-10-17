<?php

    // Crreate an sql attendance table
    // table contains colums made out of date values
    // id values = members identification numbbers
    // attendance status; 1= full attendance, 0= absent
    // status for saturday and sunday = 0;

    //get column names out of date values

    // lets calculate leap year

    //leap years = last two digits are divisible by 4 \

    $year_array =  array();
    $get_year = date("y");
    
    print_r($get_year);

    $result = $get_year % 4; 

    if(!$result){
        echo 'leap year';
    } else {
        echo 'not leap year';
    }

    // $day1 = date("d-m-y");
    // $day2 = date();
    // $day3 = date();
    // $day4 = date();
    // $day5 = date();
    // $day6 = date();
    // $day7 = date();

    // echo $day1;

    // get February month of leap year

    
    // get February month of not leap year




?>