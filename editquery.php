<?php
	require("dbcnct.php");
	if (isset($_REQUEST['O1'])&& $_REQUEST['O1']=="o1") {
		$email=$_SESSION['email'];
		echo "$email";

		$nemail=mysqli_real_escape_string($con,$_REQUEST['O1']);
		echo "nemail";



	//	$query="UPDATE users SET email = '$nemail' WHERE email='$email'";
	//	mysqli_query($con,$query);
	//	session_destroy();
		//header("Location:alrady-reg.php");
	}
	if (isset($_REQUEST['O2'])&& $_REQUEST['O2']=="o2") {
		$fname=$_SESSION['fname'];
		echo "$fname";

		//$newfname=mysqli_real_escape_string($con,$_REQUEST['nfname']);
		$_SESSION['nfname']=$_REQUEST['nfname'];
		$p=$_SESSION['nfname'];
		echo "$p";



	//	$query="UPDATE users SET fname = '$newfname' WHERE email='$email'";
	//	mysqli_query($con,$query);
	//	session_destroy();
		//header("Location:alrady-reg.php");
	}
	else echo "string";

?>