

var myNameIs ='Will'; // todo: Fill in your name here.

function sayHello(firstName){

//console.log('hello ' + firstName);	
return 'hello ' + firstName;	
	// return 	myNameIs;
 }
sayHello(myNameIs);
console.log(sayHello(myNameIs));
 
// todo:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// todo: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// do not worry about the details of this line
// just know that it generates a random number between 1 and 100

// var random = Math.floor((Math.random()*100)+1);

function randomNumber(min, max){
	return Math.floor((Math.random()*(max-min))+min);

}
console.log(randomNumber(5,20));
// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.
// var remainder=isOdd(random);

// function isOdd(random){


// 	var remainder=(random%2!==0)?"Your Number is odd":"your number is even";
// 	return remainder;
// }
// console.log(remainder);
// console.log(random);