<?php
require("dbcnct.php");

		$pcode=$_GET['remove'];
		
		
		$que= "DELETE FROM all_product WHERE pcode='$pcode'";
		mysqli_query($con,$que);
		
		header('Location:admin.php');

?>