<?php

$haystacks = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$needle='Bob';

$result=valueAnArray($needle,$haystacks);

// compareAnArray($haystack,$compare);


// var_dump($result);
function valueAnArray($needle,$haystacks){
	$result= array_search($needle, $haystacks);
	

	if($result===false){
		
		return false;
	}else{
		return $result=true;
		
	}
	

}



function compareAnArray($array1,$array2){
	$matches=0;
	foreach ($array1 as $value) {
		$results=array_search($value, $array2);
		if(is_numeric($results))
		{
			$matches++;
			echo $value." ";
		}
		
	}

	echo "  there are ".$matches;
}


echo compareAnArray($haystacks,$compare);