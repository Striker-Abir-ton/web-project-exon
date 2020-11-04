

 <?php 
	session_start();
	$con= mysqli_connect('localhost','root','','projectprac');
		if (!$con) {
		echo "error conneting database";
		}
	if (isset($_SESSION['user']) && $_SESSION['user']==1)
		$user=1;
	else
		$user=0;
 ?>