
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<html>
<head>
	<title>My first HTML form</title>
</head>
<body>
		<h2>Log In</h2>
		<form method="POST" action="/my_first_html_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" autofocus placeholder = "insert name here" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <button type="submit">Log In</button>
    </p>
		</form>
		
		<h2>Compose an Email</h2>
		<p>
		<form method="POST" action ="/my_first_html_form.php">
		<label for="to">To:</label>
		
		<input id="to" name="to" placeholder="Recipient" type="text">
		</p>
			<label for="subject">Subject</label>
			<input id="subject" name ="subject" type="text" placeholder="what yo shit about" type="text">
		<p>

			<textarea id="emailbody" name="emailbody" rows="5" cols="40">Content Here</textarea>
			<br><button type="submit">Send</button>
			<br><input type="checkbox" id="save" name="saveemail" value="yes">
			<label for="save">Save Email?</label>
		</p>	
	</form>

	<form method="POST" action="my_first_html_form.php">
		<h2>Multiple Choice Test</h2>
		<p>What is the correct topping for pizza?</p>
			<label><input type="radio" name="q1" value="cheese"> Cheese</label>
			<label><input type="radio" name="q1" value="pepperoni">Pepperoni</label>
			<label><input type="radio" name="q1" value="pepmush"> Pepperoni and Mushroom</label>
			<label><input type="radio" name="q1" value="all"> All the Toppings</label>
			<!-- <button type="submit">Submit</button> -->
		<p>Which Ninja Turtle is Best</p>
			<label><input type="radio" name="q2" value="don">Donatello</label>
			<label><input type="radio" name="q2" value="leo">Leonardo</label>
			<label><input type="radio" name="q2" value="ralph"> Raphael</label>
			<label><input type="radio" name="q2" value="mike">Michaelangelo</label>
			<!-- <button type="submit">Submit</button> -->
		</p>
		<p><label for="answer">Favorite Cartoon</label>
			<select id="answer" name="answer">
				<option disabled select selected>Choose Your Weapon</option>
				<option>Rick and Morty</option>
				<option>The Simpsons</option>
				<option>Futurama</option>
				<option>The Venture Bros</option>
			</select>
			<!-- <button type="submit">Submit</button> -->

		</p>
		<p><label for="cartoon">Which do you watch?</label>
			<select id="cartoon" name="cartoon[]" multiple>
				<option disabled select selected>Choose Your Weapon</option>
				<option value="randm">Rick and Morty</option>
				<option value="thesim">The Simpsons</option>
				<option value="futur">Futurama</option>
				<option value="tvb">The Venture Bros</option>
			</select>
			<button type="submit">Submit</button>
		</form>
		<form method="POST" action="my_first_html_form.php">
			<h2>Survey</h2>
			<p>Method of Gaming</p>
			<label><input type="checkbox" id="c1" name="c[]" value="Nintendo">Nintendo</label>
			<label><input type="checkbox" id="c2" name="c[]" value="Xbox">Xbox</label>
			<label><input type="checkbox" id="c3" name="c[]" value="Playstation">Playstation</label>
			<label><input type="checkbox" id="c4" name="c[]" value="PC">PC</label>
			<button type="submit">Submit</button>
		</form>
		<form method="POST" action="my_first_html_form.php">
			<h2>Select Testing</h2>
			
			<label for="answer">Do you like jam bands?</label>
			<select id="answer" name="answer">
				<option value="1"selected>Yes</option>
				<option value="0">No</option>
			</select>	
				<button type="submit">Submit</button>

		</form>

		</form>





</body>
</html>