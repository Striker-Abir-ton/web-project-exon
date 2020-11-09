<<!-- for delete account-->
<?php 
require("dbcnct.php");
	if (isset($_REQUEST['delete'])&& $_REQUEST['delete']=="remove") {
		$ok=$_SESSION['email'];
		$que= "DELETE FROM users WHERE email='$ok'";
		mysqli_query($con,$que);
		session_destroy();
		header('Location:alrady-reg.php');

	}
?>
