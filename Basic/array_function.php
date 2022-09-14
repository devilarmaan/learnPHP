<?php

 $Fruits = ['apple', 'orange', 'pear'];
//  get length
//  echo count($Fruits) . "\n";
 //  Search Array
 $search = var_dump(in_array('apple', $Fruits));

//  echo $search;

//  add to array
 $Fruits[] = 'grape';
 array_push($Fruits, 'blueberry', 'strawberry'); // push elemnt to end
 array_unshift($Fruits, 'mango');
//  print_r($Fruits);


//  remove from array
 array_pop($Fruits); // from the end
 array_shift($Fruits); // from the begining
// unset($Fruits[2]); /// remove any elemnts  
 $array_of_array = array_chunk($Fruits, 3); // 1 argum = main array 2 argum = how many ele of child array

//  print_r($array_of_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$merge_array = array_merge($arr1, $arr2);
// $spread = [...$arr1, ...$arr2];
$spread = [34, 55, $arr2];
// print_r($spread);
// print_r($merge_array)


$a = ['red', 'green', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b); // it's make key value pare
// print_r($c);
$key = array_keys($c);
// print_r($key);

$flipped = array_flip($c);

// print_r($c)

$number = range(1, 20);
print_r($number);

?>