<?php

$members = ['Harry', 'Maguire', 'Oslo', 'Messi', 'CR7'];
$attendance_status = [[1,1,1,1,0,0,1],[0,1,1,0,1,0,0],[1,1,1,1,1,1,1],[0,1,1,0,0,0,1],[0,0,0,0,1,0,1]];

$flipped_keys = array_keys($members);
$Unique_keys = array_keys($flipped_keys);


foreach ($Unique_keys as $value) {

    print_r($attendance_status[$value]);
    foreach ($attendance_status as $value) {
        print_r($value[$value][$value]);
    }   

}
?>