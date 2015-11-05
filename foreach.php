<?php

$things = [
'Sgt. Pepper',
 "11",
null,
array(1,2,3), 
3.14,
"12 + 7",
 false,
  (string) 11
];


foreach($things as $value){
	if(is_scalar($value)){

		echo "$value is a scalar dataype" . PHP_EOL;
	}else if(is_string($value)){
		echo "$value is a string ol datatype". PHP_EOL;
	}else if(is_array($value)){
		echo "$value is a sting array". PHP_EOL;
	}else if(is_null($value)){
		echo "$value is a nullguy not a nilgai". PHP_EOL;
	}


}

foreach($things as $value){
	if(is_scalar($value)){
		echo "$value". PHP_EOL;
	}else if(is_array($value)){
		foreach($value as $item)
			echo "$item". PHP_EOL;
	}
}