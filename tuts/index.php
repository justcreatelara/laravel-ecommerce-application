<?php 

//echo 'hello, ninjas';
//variable
$name = 'yoshi';
$age = 30;
//constant
define('NAME', 'yaya');

//data types
//strings
$stringone = 'my email is';
$stringtwo = 'opa@hot';
//string concatenation
echo $stringone.$stringtwo;

echo 'hey my name is'.$name;

//or with double quotes
echo "my name is $name";
//escaping character
echo "the ninja said \"opaaa\"";
// or
echo 'the ninja said "opaa"';

//find character
echo $name[1];
// built in functions
echo strlen($name);

echo strtoupper($name);

echo str_replace('y', 'w', $name);

//numbers data types

$radius = 25;
$pi = 3.14;

//operators basic * / + -
echo $pi * $radius**2;

// order of operations (braquets i** d m a s)

// increment decrement operators
$radius +1;
 echo $radius++;
 echo $radius;

//shortnad
 $age = 20;
 $age += 10;
 echo $age;

// number functions
echo floor($pi);
echo ceil($pi);
echo pi();

//arrays
//indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];
echo $peopleOne[1];

$peopleTwo = array('ken','shaunli');
echo $peopleTwo[1];

$ages = [20, 30, 40, 50];

print_r($ages);

$ages[1] = 33; // overwrite

print_r($ages);

// add new value

$ages[] = 60;

print_r($ages);

//or

array_push($ages, 70);
print_r($ages);

//count
echo count($ages);
//merge 2 arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);


//associative arrays ( key and values paris)
$ninjasOne = ['shaun'=>'black', 'aley'=>'purple'];
print_r($ninjasOne);
echo $ninjasOne['aley'];

$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
print_r($ninjasTwo);
// add value
$ninjasTwo['toad'] = 'pink';
print_r($ninjasTwo);

echo count($ninjasOne);
//merge
$ninjasThree = array_merge($ninjasOne,$ninjasTwo);
print_r($ninjasThree);

?>
<!DOCTYPE html>
<html>
<head>
	<title>my first php file</title>
</head>
<body>
<div><?php echo NAME; ?></div>
</body>
</html>