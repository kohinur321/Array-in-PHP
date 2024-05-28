<?php 

//Multidimensional arrays

/*$arr=[
    ['name'=>"Kohinoor Shah", "fathersName"=>"Kocim Uddin", "mothersName"=>"Jennatun", "home"=>"Parbatipur, Dinajpur"],
    ['name'=>"Sifat Al Kiyas", "fathersName"=>"Shofikul", "mothersName"=>"Kobita", "home"=>"Saidpur, Nilphamari"],
    ['name'=>"Al Kiyas", "fathersName"=>"Swapon", "mothersName"=>"Keya", "home"=>"Uttara, Dhaka"]

];
//Accessing Values
//echo $arr[0]['fathersName'];


//ForEach loop through Multidimensional array

foreach($arr as $child){
    foreach($child as $key=>$value){
        echo "$key:$value<br/>";
    }
}

//array_combine() Combines two arrays: one for keys and the other for values.

$keys=["nijhum", "dhaka", "nil"];
$values=["dip", "city", "shagor"];
$combine=array_combine($keys,$values);
print_r($combine);

//array_fill() method - Fills an array with values.

$filled=array_fill(0,60,"KOHINUR");
print_r($filled);

//array_push() - Adds one or more elements to the end of an array

$country=['Bangladesh', 'India'];
array_push($country, "Canada", "Thailand");
print_r($country);

//array_pop() - Removes the last element from an array

$names=array('riya', 'suba', 'mitu');
array_pop($names);
print_r($names);

//array_shift() Removes the first element from an array
$names=array('riya', 'suba', 'mitu');
array_shift($names);
print_r($names);


//array_unshift() add the first element from an array
$names=array('riya', 'suba', 'mitu');
array_unshift($names, 'sumiya');
print_r($names);

//array_splice() Removes a portion of the array and replaces it with something else

$names=array('riya', 'suba', 'mitu');
array_splice($names, 1,2,['raha', 'asha']);
print_r($names);*/


//array_slice() Extracts a portion of the array 

$names=array('riya', 'suba', 'mitu', 'setu', 'ritu');
$portion=array_slice($names,0,1);
print_r($portion);
