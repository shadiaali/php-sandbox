<?php
//echo 'Hello world'; 
//print 'hello world';
//single line comment
# single line comment
/* multi line comment */

#variables
/* -prefix with $ sign
   - start with a letter or an underscore
   - only letters numbers and underscores
   - case sensitive
   */

//$output = 'my first variable';
//echo $output;

# data types
/* String
   Integers
   floats
   booleans (true/false)
   arrays
   objects
   NULL
   resource
   */

   //$num1 = 4; //integer
   //$float1 = 4.4; //float
   //$boolean1 = true; //boolean

   //$number1 = 3;
   //$number2 = 5;
   //$sum = $number1 + $number2;
   //print $sum;

  $string1 = 'first';
  $string2 = 'greeting';
  //$greeting = $string1 .' '. $string2.'!';
  //echo $greeting;

  $greeting2 = "$string1 $string2";
  echo $greeting2;

  $string3 = 'they\'re here'; 
  echo $string3;

  //to make this constant non case sensitive,add a parameter of true
  define('GREETING', 'Hello everyone', true);
  echo GREETING;

?>
