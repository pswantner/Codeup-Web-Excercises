<?php

	echo "what is your name?";

	$name = strttolower(trim(fGets(STDIN)));

	var_dump($name);

	switch($name){
		case 'ben':
		echo "welcome fearless leader.\n";
		break;
		case 'cameron':
			echo "Where in the world are you carmen\n";
			break;
		case 'will':
			echo "Dont hate the player hate the compiler\n";
			break;
		case 'Ryan':
			echo "do a little dance make a little code code up tonight\n";
			break;
		default:
		echo "WHHAaaaat\n";
	}



 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         	echo:"Somebody's got a case of the mondays-Garfield\n";
        	break;
     case 2:
     		echo:"Another terrible Tuesday\n";
     		break;
     case 3:
  			echo: "wastey wednesdays or humpday if youre a lame camel\n";  	# code...
     		break;
     case 4:
     		echo:"thurrrsty thirtie thursdays\n";
     	# code...
     		break;
     case 5:
     		echo:"freak out funk flag friday# code...\n";
     		break;
     case 6:
     		echo:"Paturday Sometimes Reffered to as Caturday and Sticky Iicky Saturdays by ludacris\n"
     		break;
     case 7: 
     		echo:"The nicolas rage cage saturday\n";
     		break;
     case 8:
     		echo:"Lord of War day or NIC CAGE DAY 2\n";
     		break;

     }
         


     // etc through day 7
 }