<?php

$things = [
'Sgt. Pepper',
 "11",
null,
array(1,2,3), 
3.14,
"12 + 7",
 false,
  (string) 11));
]


foreach($things as $value){
	if(is_scalar($value)){

		echo "$value is a scalar dataype";
	}else if(is_string($value)){
		echo "$value is a string ol datatype";
	}else if(is_array($value)){
		echo "$value is a sting array";
	}else if(is_null($value)){
		echo "$value is a nullguy not a nilgai";
	}


}