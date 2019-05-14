<?php
# Loops
// executes a block of code a set number of times based on a condition
/*
For
Do..While
Foreach

# For Loop
#  Used if you know the # of times it's gonna be executed
# @params (parameters of loop) - init, condition, inc 
*/

//for($i = 0;$i < 10;$i++){
//    echo $i;
//    echo '<br>';
//}

#While Loop
# @params - condition

//$i = 0;

//while($i < 11){
 //   echo $i;
  //  echo '<br>';
  //  $i++;
//}

#Do..While 
#@params condition 

$i = 0;

do{
    echo $i;
    echo '<br>';
    $i++;
}

while($i < 10);

#for..each loop meant to work with arrays

//$people = array('Brad', 'Jose', William);

//foreach($people as $person){
//    echo $person;
//    echo '<br>';
//}


//associative array. looping through 
$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

foreach($people as $person => $email){
    echo $person.': '.$email;
    echo '<br>';
}
?>