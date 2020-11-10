<?php
	require("dbcnct.php");
	if (isset($_REQUEST['O0'])&& $_REQUEST['O0']=="o0") {
		$email=$_SESSION['email'];
		$fname=$_SESSION['fname'];
		$lnamr=$_SESSION['lname'];
		$phone=$_SESSION['phone'];
		$password=$_SESSION['password'];
		$dob=$_SESSION['dob'];
		$interst=$_SESSION['interst'];
		

		$nemail=mysqli_real_escape_string($con,$_REQUEST['mail']);
		$nname=mysqli_real_escape_string($con,$_REQUEST['fname']);
		$nlname=mysqli_real_escape_string($con,$_REQUEST['lname']);
		$nphone=mysqli_real_escape_string($con,$_REQUEST['phn']);
		$npass=mysqli_real_escape_string($con,$_REQUEST['pass']);
		$ndob=mysqli_real_escape_string($con,$_REQUEST['dob']);
		$ninterst=mysqli_real_escape_string($con,$_REQUEST['gender']);
		

		if ($nemail==$email) {
				echo "string";
			}
		if ($nemail!=NULL && $nemail!=$email) {
			
			$query="UPDATE users SET email = '$nemail' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
				
		}
		else header("Location:edit.php ?samemail=smail");
		if ($nname!=NULL) {
			$query="UPDATE users SET fname = '$nname' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}
		if ($nlname!=NULL) {
			$query="UPDATE users SET lname = '$nlname' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}
		if ($nphone!=NULL) {
			$query="UPDATE users SET phone = '$nphone' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}
		if ($npass!=NULL) {
			$query="UPDATE users SET password = '$npass' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}
		if ($ndob!=NULL) {
			$query="UPDATE users SET dob = '$ndob' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}
		if ($ninterst!=NULL) {
			$query="UPDATE users SET interst = '$ninterst' WHERE email='$email'";
			mysqli_query($con,$query);
			session_destroy();
			header("Location:alrady-reg.php");
		}

		
	}

	else echo "string";

?>