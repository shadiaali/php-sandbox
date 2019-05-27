<?php

//CONDITIONALS


// Equals: ==  
// Triple equals, matches value AND datatype: ===
// Less than: <
// Greater than: >
// Less than or equals to: <=
// Greater than or equals to: >=
// Not equals to: !=
// Not identical: !==





//$num =4;

// if($num == 5){
 //   echo '5 passed';
// } elseif($num == 6){
   //  echo '6 passed';
// } else {
  //  echo 'did not pass';
// }


#NESTING IF STATEMENTS

// $num = 6;
// if ($num > 5){
//    if($num < 10){
//        echo "num passed";
//    }
// }


//LOGICAL OPERATORS

// and &&
// or ||
// xor 


/*
$num = 6;

if($num > 4 AND $num < 10){
    echo "num passed. num is greater than 4 and less than 10.";
}
*/

#SWITCH

$favColor = 'red';

switch($favColor){
    case 'red':
    echo 'your fav color is red';
    break;
    case 'blue':
    echo 'your fav color is blue';
    break;
    default:
    echo 'your fav color is green';
}
?>