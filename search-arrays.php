<?php

$haystack = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$needle='Bob';

$result=valueAnArray($needle,$haystack);

var_dump($result);


// var_dump($result);
function valueAnArray($needle,$haystack){
	$result= array_search($needle, $haystack);
	

	if($result===false){
		
		return false;
	}else{
		return $result=true;
		
	}
	

}
