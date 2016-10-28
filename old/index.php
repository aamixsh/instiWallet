<!DOCTYPE HTML>

<html>
	<head>
		<title>Feel Free</title>
		<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
	<body> 
		<div id="loginspace">
			<a href="http:\\www.iitmandi.ac.in"><img id="logoimg" src="images/logo.jpg" align="left" alt="IIT Mandi Logo" title="IIT Mandi Website"></a>
			<div id="maintext">
				<label><i>InstiWallet</i></label>
			</div>
			<div id="blank">
			</div>
			<div id="login">
				<form method="post" id="formlog" action="pages/login.php">
						<label for="email"><b>Email</b></label>
						<input type="email" id="email" name="email" placeholder="example@students.iitmandi.ac.in" required="required">
					<label for="password"><b>Password</b></label>
					<input type="password" id="password" name="password" placeholder="********" required="required">
					<button>Login</button>
				</form>
			</div>
		</div>
		<div id="mid">
		<div id="content">
			This application lets you handle your account for the fingerprint
			payment system on campus. You have to have an institute ID to use 
			it and signup.
		</div>		
		<div id="blank2">
		</div>
		<div id="signup" align="center"> 
			<h2>Signup here</h2>
			<form id="form2" method="post" action="">
				<input type="text" name="Name" required="required" placeholder="Name"><br><br> 
				<input type="email" name="Email" required="required" placeholder="example@students.iitmandi.ac.in"><br><br>
				<input type="text" name="number" min="7000000000" max "9999999999" size="10" maxlength="10" required="required" placeholder="Mobile Number"><br><br>					
				<input type="password" name="pass" required="required" placeholder="Password"><br>
				<button name='signup'><b>Submit</b></button>
			</form>
		</div>
		<div id="footer">
		</div>
		</div>
	</body>
</html>