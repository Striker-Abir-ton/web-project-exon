<?php 

	require("dbcnct.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exon|Sign Up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="content" >
		<div id="header">
			<a id="headera" href="exon.php"><h1>EXON</h1></a>
		</div>
		<div id="main">
			<div id= "inmain" class="bcolor">
				<div id="signin-option" class="flex bcolor">
					<div id="border1" class="twop bcolor">
						<h2 class="bcolor">NEW IN EXON?</h2>
					</div>
					<div id="border2" class="twop bcolor">
						<h2 class="bcolor">
							<a class="bcolor" href="alrady-reg.php">ALRADY REGISTERD?</a>
					</h2>
					</div>
				</div>
			</div>
			<div id="aform" class="bcolor">
				<h1 class="bcolor" id="sincl">
					<?php
						if (isset($_REQUEST['same'])&& $_REQUEST['same']=="samemail") {
							echo nl2br("!!!! Email address alrady in use !!!!\nUse another one.");
						}
						else{
								if (isset($_REQUEST['nopass'])&& $_REQUEST['nopass']=="npass") {
										echo nl2br("!!!! Enter Password !!!!");
								}
								else
									echo "Sign up using your email address";
							}
					  ?>
				</h1>

				<form action="alrady-reg.php ?from=adduser" method="post" class="bcolor">
					<label for='mail' name='mail'><b>Email Address:</b></label><br>
					<input type="email" name="mail" >
					<br>

					<label for='fname' name='fname'><b>First Name:</b></label><br>
					<input type="text" name="fname" > <br>

					<label for='lname' name='lname'><b>Last Name:</b></label><br>
					<input type="text" name="lname" >
					<br>

					<label for='Phn' name='phn'><b>Phone:</b></label><br>
					<input type="tel" name="phn">
					<br>
					
					<label for='pass' name='pass'><b>Password:</b></label><br>
					<input type="password" name="pass" id="myInput">
					<br>
					<input type="checkbox" onclick="showpass()">Show Password<br>
					<br>

					<label for="dob"><b>Date of Birth:</b></label><br>
  					<input type="date" name="dob">
  					<br>
  					<p><b class="bcolor">Mostly Intersted In:</b></p>
					<br>
  					<input type="radio" id="female" name="gender" value="Womenswear">
 					<label class="bcolor" for="female">..Womenswear.. </label>
  					<input type="radio" id="other" name="gender" value="Menswear">
 					<label class="bcolor" for="other">..Menswear.. </label>
 					<br>


					<input id='submit'type="submit" name="submit" value="JOIN EXON">

				</form>
			</div>
			
		</div>
	</div>
	
	<script type="text/javascript" src="script.js"></script>
</body>
</html>










