<?php 

//Array Transform Function

//array_map() -Applies a callback function to the elements of one or more arrays
$numbers=[1,2,3,4,5,6,7,8,9,10];
function add10($n){
    return ($n+10)*($n+10);
}

$reshaped= array_map('add10', $numbers);
print_r($reshaped);


//array_filter() - Filters elements of an any using a callback function
/*$numbers=[1,2,3,4,5,6,7,8,9,10];
function even($n){
    return $n%2==0;
}
function odd($n){
    return $n%2!=0;
}
//$evenNum=array_filter($numbers, 'even');
//print_r($evenNum);

$oddNum=array_filter($numbers, 'odd');
print_r($oddNum);*/


//array_merge() -Merges one or more arrays
/*$array1=[1,2,3,4,5];
$array2=[6,7,8,9,10];
$array3=[11,12,13,14,15];
$merge=array_merge($array1,$array2,$array3);
print_r($merge);*/


//array_replace() Replaces values from one array to another
/*$relation=array('father', 'mother', 'sister', 'brother', 'grandparents');
$newItem=array(0=>'kocimuddin', 2=>'kobita');
$replaced=array_replace($relation,$newItem);
print_r($replaced);*/