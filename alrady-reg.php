<?php 
	require("dbcnct.php");
 ?>
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

				<h1 class="bcolor" id="sincl">
				<!-- add user start -->
				<?php  
					if (isset($_REQUEST['from'])&& $_REQUEST['from']=="adduser") {

						//insert user 
						$email=mysqli_real_escape_string($con,$_REQUEST['mail']);
						$fname=mysqli_real_escape_string($con,$_REQUEST['fname']);
						$lname=mysqli_real_escape_string($con,$_REQUEST['lname']);
						$phone=mysqli_real_escape_string($con,$_REQUEST['phn']);
						$password=mysqli_real_escape_string($con,$_REQUEST['pass']);
						$dob=mysqli_real_escape_string($con,$_REQUEST['dob']);
						$interst=mysqli_real_escape_string($con,$_REQUEST['gender']);

						$querymatch="select * from users where email='{$email}'";
						$resultmatch= mysqli_query($con,$querymatch);
						$row1=mysqli_num_rows($resultmatch);

						if ($row1>0) {
							 $same="samemail";
							header('Location:signup.php ?same=samemail');
						}
						else{
							$query="INSERT INTO users VALUES (NULL,'$email','$fname','$lname','$phone','$password','$dob','$interst')";
							$result=mysqli_query($con,$query);
							if ($result) {
								echo "Thanks for joining.. Now log in";
							}	
						}
					}
					else
					echo 'Sign In using your email address';
				?>	
				<!-- add user end -->
				</h1>

				<!-- login start -->
				<?php
					if (isset($_SESSION['user'])&& $_SESSION['user']==1) {
						echo "alrady login";
					}
					 if (!isset($_SESSION['user'])) {
					}

				  ?>
				<form action="exon.php ?login=in" method="post" class="bcolor">
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










