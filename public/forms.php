


<html>
<head>
	<title>Form</title>
</head>


		<body>
			<h1>GET</h1>
			<?php var_dump($_GET)?>
			<h1>POST</h1>
  			<?var_dump($_POST);?>

  			<h2>Search</h2>
  					<p>
  					<form method ="GET" action="/forms.php">
							
  					<label for="search_term">Search</label>	
  					<input id="search" name ="search" placeholder "search me" type="text">
  					<button type="search">Search</button>
  					</p>


  			<h2>Log In</h2>
  				<p>
  					<form method ="POST" action="/forms.php">
  					<label for="username">Username</label>
  					<input id="username" name="username" autofocus placeholder = "insert name here" type="text">
  				</p>
  				<p>
  					<label for="password">Password</label>
        			<input id="password" name="password" type="password">
        		</p>
        			<button type="submit">Login</button>


        	<h2>Sign Up</h2>
        			<form method="post"
        			<label for="mailinglist">Sign Me Up for Spam</label>

        	<h2>Contact Me</h2>

        			&np;
		</body>
</html>