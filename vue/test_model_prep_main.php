<?php

//echo 'data...';
//echo 'data..1';
//echo 'data..2';


$p1 = filter_input(INPUT_GET, 'd1');
$p2 = filter_input(INPUT_GET, 'd2');
$p3 = filter_input(INPUT_GET, 'd3');
$p4 = filter_input(INPUT_GET, 'd4');


// $arr = array(
//     'data...',
//     'data..1',
//     'data..2'
// );

$arr = array(
    d1 => $p1,
    d2 => $p2,
    d3 => $p3,
    d4 => $p4
);

//return $arr;
var_dump($arr);
// var_dump($p1);