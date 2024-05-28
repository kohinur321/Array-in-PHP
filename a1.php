<?php

$array1=array('riya', 'suba', 'mitu');
$array2=['kohinur', 'kobita', 'mango'];
$array3=['maa', 'baba'];

/*echo $array2[0];
echo $array3[0];*/

//For loop through index array

/*for($i=0;$i<count($array1);$i++){
    echo "$array1[$i] <br/>";
}*/

//ForEach loop through indexed array

foreach($array2 as $item){
    echo "$item <br/>";
}