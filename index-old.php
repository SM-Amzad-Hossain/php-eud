<?php
// https://alva.savvypioneer.net/wp-admin/
// Suites by Alvaranga Collection
// Subdomain: alva.savvypioneer.net
// Username: alvasavvypioneer
// password: FGwtJbs7VrQi94u
// gmail: ann@savvypioneer.com

// $fruits = array("a"=>"Banana","Apple", "c"=>"Mango", "d"=>"Orange", "e"=> "Grapes");
// $randam = array ("a" => "Banana", "b" => "Apple", "c" => "Mango", "d" => "Orange", "e" => "Grapes", 12 => 78, "g"=>87);

// $someFruits = array_slice($fruits, 1,2);
// print_r($someFruits);
// $randomFruits = array_slice($randam, 3, null, true);
// print_r($randomFruits);
// $newFruits = array_splice($randam, 3, null, true);
// $someFruits = array_splice($fruits, 1,2, $newFruits );
// print_r($someFruits);
// print_r($fruits);

// $newFruits = array_slice($fruits,0,3);
// $newFruits1 = array_slice($fruits,3, null, true);

// $newFruits2 = array_merge( $newFruits, $newFruits1);
// print_r($newFruits);
// print_r($newFruits1);
// print_r($newFruits2);

// $newFruitsPlus = $newFruits + $newFruits1;
// print_r($newFruitsPlus);

// $r1 = array_slice($randam, 0, 2);
// $r2 = array_slice($randam, 2, null, true);
// $r3 = array("j"=>"watermelon", "k"=>"goava");


// $randomfruits = array_splice($randam,2,2,array("x"=>"kiwi", "y"=>"papaya"));
// $randomfruits1 = $r1 + $r2 + $r3;
// print_r($randomfruits1);

// asort($fruits);
// print_r($fruits);
// $fruits = array("a"=>"Banana","Apple", "c"=>"Mango", "d"=>"Orange", "e"=> "Grapes");
// $numbers = array(12, 45, 67, 89, 23, 56, 78, 90);

// if (in_array(45, $numbers, true)) {
//     echo "The number 45 is present in the array."."\n";
// } else {
//     echo "The number 45 is not present in the array.";
// }

// $offset = array_search(45, $numbers, true);
// echo $offset;

// if (array_key_exists("c", $fruits)) {
//     echo "The key 'c' exists in the array."."\n";
// } else {
//     echo "The key 'c' does not exist in the array.";
// }

// $fruits = array ("a"=>"apple", "b"=> "banana" , "c" => "orange", "p"=>"plum", "f" => "dates", "m"=>"mango" );
// $number = array( 1,2,11,56,3,4,22,77,5);
// if(in_array(56,$number)){
//     echo '56 is found'."\n";
// }

// $offset = array_search(56,$number);
// echo $offset."\n";


// if (key_exists('b',$fruits)){
//     echo "key B exists";
// }

// $number1 = array(1,4,3,66,54,7,23,1,2);
// $number2 = array(88,3,21,44,3,28,1,2,7);

// $fruits1 = array('a' => 'apple','b' => 'banana', 'c' => 'lemon');
// $fruits2 =array("d"=>"pineapple","b"=>"malta","g"=>"Grapes", "e"=>"lemon");

// $common = array_intersect($number1, $number2);
// $commonf =array_intersect_assoc($fruits1, $fruits2);
// print_r($common);
// print_r($commonf);


// $number = array(1,2,3,4,5,6,7,8,9,10,11,12);

// function square($n){
//    printf("square of %d is %d \n",$n, $n*$n);
// }

// function cube($n){
//     return $n*$n*$n;

// }

// array_walk($number,"square");
// $newArray = array_map('cube',$number);

// print_r($number);
// print_r($newArray);


// $n = 12;
// $student =array(
// "Rohim",
// "karim",
// 123,
// "monir"
// );

// echo $student[0] . "\n";

// echo count($student) ."\n";

// $n = count($student);
// for ($i=0; $i < $n; $i++){
// echo $student[$i] . "\n";
// }

// $foods =[
//     'vegetables'=>'brinjal, brocolli,carrot,capsicam',
//     'fruits' => 'orange, banana,apple',
//     'drinks' => 'water,milk'

// ];

// $foods['drinks'] = $foods['drinks'].",orange juice";
// // echo $foods['vegetables'];

// foreach($foods as $key=>$value){
//     echo $key."=".$value."\n";
// }
// $keys= array_values($foods);
// for($i=0;$i<count($key);$i++){
//     $key=$key[$i];
//     echo $foods[$key]."\n";
// }

// $values = array_values($foods);
// for($i=0;$i<count($values);$i++){
//     $value = $values[$i];
//     echo $value."\n";
// }


// $vegetables = preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicam');
// // echo $vegetables[2];
// print_r($vegetables);

// $vegetablesString = join(', ', $vegetables);
// // echo $vegetablesString;

// echo count($vegetables);

$foods =[
    'vegetables'=> explode(', ','brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ','orange, banana,apple'),
    'drinks' => explode(', ','water, milk'),

];

// print_r($foods);

// array_push($foods['drinks'], 'orange juice');

// // print_r($foods);

// echo $foods['vegetables'][3];

 
// $smaple =[
//     'test' =>[
//         'test-again' =>[
//             'a',
//             'b',
//             'c',
//             'd',
//         ]
//     ],
// ];

// $smaple2 =[
//     [1,2,3,],
//     [11,22,33,44],
//     [111,222,333,444],
//     [1111,2222,3333,[5,6,7]]
// ];

// print_r($smaple2);

// // echo $smaple['test']['test-again'][2];


// $student = array(
//     'fname'=>'jamal',
//     'lname'=>'Ahmed',
//     'age' =>'15',
//     'class' =>'5',
//     'section' => 'B',

// );

//  print_r($student);

//  echo $student['fname']." ". $student ['lname']."\n";

// printf("%s %s \n", $student['fname'],$student['lname']);


// $serialize = serialize($student);

// $newstudent =unserialize($serialize);
// print_r($newstudent);


// $jsondata = json_encode($student);

// echo $jsondata;

// $student2 =json_decode($jsondata);
// print_r($student2);

//capy by value
//deep copy
$person = array('fname'=>'hello','lname'=>'world',);

$newPerson = $person;
$newPerson['lname']='pluto';

// print_r($person);
// print_r($newPerson);


// copy by reference
// shallow copy

$person = array('fname'=>'hello','lname'=>'world',);

$newPerson = $person;
$newPerson['lname']='pluto';

// print_r($person);
// print_r($newPerson);
 


// function printData($person){
//     $person['fname'] .= ' changed';
//     print_r($person);
// }

// printData($person);
// print_r($person);

// $name=0;

// if(isset($name)){
//     echo"Name is Set";

// }else{
//     echo "Not set";
// }
 
// echo "\n";

// if(empty($name)){
//     echo"Name is empty";
// }else{
//     echo "Not empty";
// }

// echo "\n";
// if(isset($name) && (is_numeric($name) || $name !='')){
//     echo "Name is set and it's not empty";
// }else{
//  echo "Name is either not set or it's empty";
// }

// $number =array(1,2,3,4,5,6,7,8,9,10,11,12);

// function square($n){
//     printf("square of %d is %d \n",$n ,$n*$n);
// }

// function cube($n){
//     return $n*$n*$n;
// }

// function even($n){
//     return $n%2==0;
// }

// function odd($n){
//     return $n%2==1;
// }
// // $newarray = array_map('cube', $number);

// $evenarray = array_filter( $number, 'even');
// $oddarray = array_filter( $number, 'odd');
// print_r($evenarray);
// print_r($oddarray);

// $persons = array('sujon','kabir','sabab','selim','roni','jamal','kamal','sayma');

// function filterByS($name){
//     return $name[0]=='s';
// }

// $newPerson = array_filter($persons, 'filterByS');
//  print_r($newPerson);


// $numbers = array(1,2,3,4,5,6);

// function sum($oldValue, $newValue){
//     if($newValue%2==1){
//      return $oldValue+$newValue;
//      }
//      return $oldValue;
// }

// $sum = array_reduce($numbers, 'sum');

// echo $sum;

// echo count($numbers);

// $color = array(122,223,65);
// // $red = $color[0];
// // $green = $color[1];
// // $blue = $color[2];

// // echo $blue;

// list($red, $green, $blue) = $color;

// echo $green;


// $numbers = array();

// for($i=12;$i<21; $i++){
//     array_push ($numbers, $i);
// }


// foreach(range(12,20,2) as $evenNumber){
//     if ($evenNumber > 0){
//     echo $evenNumber."\n";
//     }
// }

// print_r($numbers);

// $fruits = array( 'a' => 'banana','b' => 'apple', 'c' => 'Cherry','d' => 'Dates');
// $key = array_rand($fruits);
// // echo $key;

// echo $fruits[$key];




