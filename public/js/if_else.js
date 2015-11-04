

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // TODO: change this to your favorite color from the list
var message;
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
console.log('random color chosen is '+ color);
console.log('my favorite color is ' + favorite);

if (color=='red'){

message="Red is apple color";

}
else if(color=='orange'){
	message="orange is the color of bball";
}
else if(color=='yellow'){
	message="yellow is the color of jaundiced peoples skin";
}
else if(color=='green'){
	message="green is the color of frogs";
}
else if(color=='blue'){
	message="BLUE IS THE COLOR OF WATER....";
}
else 
{
	message="i dont know anything about this color";
}
console.log(message);

 favorite== ('indigo') ? "thats your favorite color":"not your favorite";

