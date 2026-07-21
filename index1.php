<?php
$firstName = ucwords("S.M. amzad");
$lastName = ucwords("hossain");

// // // $name = ucwords($name);
// // // echo "Hello $name"; 


// // printf("Hello, %s %s",$firstName,$lastName);
// $html_block ="
// <div>
// <h1>%s</h1>
// <h2>%s</h2>
// </div>";

// // echo $html_block;
// // printf($html_block, $firstName, $lastName);

// $test = 3.5565;

// printf("Ascll key vaule: %.2f",$test);
// // printf('last Name: %2$s <br> first Name: %s',$firstName,$lastName);

// Arithmetic Operator 

// $num = 5+8;
// var_dump($num);
// $amount = 10;

// ++$amount;

// echo $amount;

  // $first_num = 10;
  // $second_num = 12;

  // var_dump($first_num <=> $second_num );

  //  $user_name = "Amzad";

  //  if($user_name == "Amzad"){
  //   echo "Welcome $user_name";
  //  }else{
  //   echo "Welcome Guest";
  //  }
  
// for ($count = 1 ; $count < 10; $count++) {
//   echo "php<br>"; 
//   if($count == 5){
//     continue;
//   }
//   echo "is <br>0";
//   echo "awesome <br><br><br>";
//     // code...
// }

for ($outer_list = 1; $outer_list <= 5; $outer_list++){
  echo "Outer List: $outer_list <br>";
 for($inner_list = 1; $inner_list <=2; $inner_list++){
  echo "-----Inner List: $inner_list <br>";
   if($outer_list == 2 && $inner_list == 1){
    goto end;
   }

 }
}
end:

?>