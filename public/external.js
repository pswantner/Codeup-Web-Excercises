
// function doSomething(param 1){


// console.log(param1);
// }

// doSomething('Hellowrld');


//function areaOfRectangle(length,width){
// 	var area= length*width;
// 	return area;
// }

// var rectangleArea =areaOfRectangle(10,5);
// console.log(rectangleArea);
function isEven(input){
	return(input % 2=== 0)? true:false;
}
for(var i=0; i<= 100; i++){
if(isEven(i)){
	console.log(i + 'is even');
}
}