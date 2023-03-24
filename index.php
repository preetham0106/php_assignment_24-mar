<?php 
echo '<pre>';
 //print_r($_SERVER);
?>

<!-- The null type is PHP's unit type, i.e. it has only one value: null. -->


<?php
$var = NULL;     

$a = array();

echo $a == null  ;//<== return true

//only true values are printed false values are not printing

echo $a === null ;//< == return false
print_r($a === null);
echo is_null($a) ;//<== return false

// Pay attention then using operator -- on NULL values:

$x = null;
--$x;      // $x is NULL
$x--;      // still NULL
$x -= 1;   // $x is -1
echo $x;


$array1=array(1,2,34);
print_r($array1);
echo $array1[0];

// true or false. Both are case-insensitive


// the boolean false itself
// the integer 0 (zero)
// the floats 0.0 and -0.0 (zero)
// the empty string "", and the string "0"
// an array with zero elements
// the unit type NULL (including unset variables)
// Internal objects that overload their casting behaviour to bool. For example: SimpleXML objects created from empty elements without attributes.


$x=TRUE;
$y=FALSE;
$z=$y OR $x;//or has less preference than assignment

echo $z;

$z=$x||$y ;//|| has higher preference than assignment

echo "<br>value of z is",$z,"<br>";

var_dump(0 == 'all'); //exception
echo "<br>";
// Please keep in mind that the result of  0 == 'whatever'  is true in PHP Version 7 and 
// false in PHP version 8.

//integrs

$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0123; 
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
echo "<br>";
echo var_dump($a);



$a=2/3;
echo "<br>";
echo $a;

echo "<br>";

// There is no int division operator in PHP, to achieve this use the intdiv() function

//print_r(intdiv(2/3));

//intdiv function is not present in php 8

// When converting from float to int, the number will be rounded towards zero. As of PHP 8.1.0, a deprecation notice is emitted when implicitly converting a non-integral float to int which loses precision.
var_dump(20);

function foo($value): int {
    return $value; 
  }
  
  var_dump(foo(8.1));


//   NaN and Infinity will always be zero when cast to int.

echo (int) ( (0.1+0.7) * 10 ); 


$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;



if(abs($a-$b) < $epsilon) {
    echo "<br>true<br>";
}

echo is_nan(NAN);

echo "<br>";


$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true

// PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()

echo "<br>";

var_dump(round($x, 5) == round($y, 5));


//strings


echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';
$name="Arnold";
//when ever using special symbols use backslash \
echo '$name once said: "I\'ll be back"',PHP_EOL;

echo "$name once said :\"I'll be back\". <br>";

//arrays


$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);

var_dump($array);


$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    // 0 =>"jio",
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);


var_dump($array);

//deleting the array element and whole array


$arr = array(5 => 1, "pora" => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"

print_r($arr);



//array destructring

$source_array = ['foo', 'bar', 'baz'];

[$a,$b,$c]=$source_array;

echo $a,$b,$c;


//unset the array

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
                
unset($arr[5]); // This removes the element from the array
 
print_r($arr);

unset($arr); //delets whole array


$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}

print_r($array);

$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];

// Assign the element at index 'baz' to the variable $three
['baz' => $three] = $source_array;

echo $three;

//aray unpacking

$arr1 = [1, 2, 3];
$arr2 = [...$arr1]; //[1, 2, 3]
$arr3 = [0, ...$arr1]; //[0, 1, 2, 3]
$arr4 = [...$arr1, ...$arr2, 111]; //[1, 2, 3, 1, 2, 3, 111]


//looping through arrays

foreach($arr4 as $item){
    echo "the element is ",$item,"<br>";
}

//objects


$a=(object)"ciao";

echo $a->scalar;

//A PHP function is passed by its name as a string. Any built-in or user-defined function can be used, except language constructs such as: array(), echo, empty(), eval(), exit(), isset(), list(), print or unset().


//never
session_start();
print_r(session_id());
function sayHello(string $name): never
{
    echo "Hello, $name";
   
    exit(); // if we comment this line, php throws fatal error
}

// sayHello("John"); 

//variables


var_dump($random_value);


?>



