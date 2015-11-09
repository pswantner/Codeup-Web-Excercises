<?php

$firstname='ben';
$lastname='Batschelet';

function sayHello($firstname, $lastname){
	
	return "hello $fname $lastname"

}

//only echo outside of function
//white lie you can not access the global scoped variables from inside of the function
echo sayHello($firstname, $lastname) . PHP_EQL;


function appendIntials($fName)
{
	$fname .= 'G'
	return "$fName";

}