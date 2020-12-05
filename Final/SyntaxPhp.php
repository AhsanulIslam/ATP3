<!DOCTYPE html>
<html>
<head>
	<title>Php</title>
</head>
<body>




<?php 

echo "<h1>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. (Active Server Pages is Microsoft's first server-side scripting language and engine for web pages that change by time or other circumstances.)

PHP 7 is the latest stable release. </h1>";

echo "it works.......";

$txt1 = "Learn PHP";
echo "<h2>" . $txt1 . "</h2>";
// Global and Local Scope
 $x =5;  // Global

 function mytest(){
 	//echo " <p> global x : $x </p>";   // using x inside this function will generate an error
 }
 mytest();

echo "<p>Variable x outside function is: $x</p>";


function test(){
	$x = 5;
	echo "<p> local x: $x </p>";
}
test();

echo "<p>
<h1>PHP Data Types</h1>
PHP supports the following data types: <br>
String <br>
Integer <br>
Float (floating point numbers - also called double) <br>
Boolean <br>
Array <br>
Object <br>
NULL <br>
Resource</p>";
$x = 5985;
var_dump($x);

$x = null;    //null
var_dump($x);



///////PHP String Functions
echo strlen("Hello world!"); // outputs 12

echo str_word_count("Hello world!"); // outputs 2

echo strrev("Hello world!"); // outputs !dlrow olleH

echo strpos("Hello world!", "world"); // outputs 6

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;


echo(pi()); // returns 3.1415926535898

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo(abs(-6.7));  // returns 6.7

echo(sqrt(64));  // returns 8

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

echo(rand());

echo(rand(10, 100));

// array 2 process



/////////Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}


// PHP Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.

// There are two ways to create an associative array: 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//or:
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}



//Class -----  Object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();




////if else

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}



//The PHP switch Statement

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


//loop
$x = 0;
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}



$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}


$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}


/*
GET vs. POST
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.

When to use GET?
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.


When to use POST?
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
*/

?>

	
</body>
</html>