<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exon|Sign In</title>
	<link rel="stylesheet" type="text/css" href="alrady-reg.css">
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
						<h2 class="bcolor">
							<a class="bcolor" href="signup.php">NEW IN EXON?</a>
						</h2>
						
					</div>
					<div id="border2" class="twop bcolor">
						<h2 class="bcolor">ALRADY REGISTERD?</h2>
					</div>
				</div>
			</div>
			<div id="aform" class="bcolor">
				<h1 class="bcolor" id="sincl">Sign In using your email address</h1>
				<form action="exon.php" method="" class="bcolor">
					<label for='mail' name='mail'><b>Email Address:</b></label><br>
					<input type="email" name="mail" >
					<br>

					
					<label for='pass' name='pass'><b>Password:</b></label><br>
					<input type="password" name="pass" id="myInput">
					<br>
					<input type="checkbox" onclick="showpass()">Show Password<br>
					<br>

					<input id='submit'type="submit" name="submit" value="Sign IN">

				</form>
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>










