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

	echo "  there are ".$matches.PHP_EOL;
}
//echo compareAnArray($haystacks,$compare);

function getUniqueValues($array1,$array2){
	return array_values(array_unique(array_merge($array1,$array2)));

}
print_r(getUniqueValues($haystacks,$compare));


function combine_arrays($array1, $array2){
	$combined=[];

	foreach( $array1 as $key=> $value){		
		
		if($array1[0] == $array2[0]){
			$temp = array_shift($array1);
			array_shift($array2);
			array_push($combined,$temp);	
			
			
		}else  {
			$temp2 = array_shift($array2);
			$temp3= array_shift($array1);
			array_push($combined,$temp3);
			array_push($combined,$temp2);
			
		}
		
	
}
	return $combined;

}

	
	

	$combined=combine_arrays($haystacks,$compare);
	 print_r($combined);	


 