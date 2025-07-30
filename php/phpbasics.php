<?php
// PHP Basics
echo "Hello, World!.";
print "<br>";
echo "Welcome to PHP Basics!";
print "<br>";
print date("Y-m-d H:i:s");
print "<br>";
print date("l");

$yob = 2002;

print $yob;
$lname = "Esilosia";
$age = date("Y") - $yob;

print "<br>";
print $lname . 'is' . $age . 'years old';
print "<br>";
if($age >= 23) {
    print "You are an adult.";
}else{
    print "You are a minor.";
}

?>