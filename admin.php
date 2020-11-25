<?php 
	require("dbcnct.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exon|MY Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--Header-->
	<header>
		<nav id="header-nav">
			<div>
				<div id="bar1">
					<b>ASSALAMUALAIKUM</b>
				</div><!--end of bar1-->
				<div id="bar2" class="flex">
					<div id="barmenu" class="over">
						<span id="clsbtn">
							<a href="#" class="closebtn" onclick="closenav()"><i class="fa fa-remove fa-2x"></i></a>
						</span>
						
						 <div class="over-content">
						  	<div id="mw2" class="flex">
						  		<div class="mw">
						  			<a href="men.php?var=men"><b>MEN</b></a>
						  		</div>
						  		<div class="mw">
						  			<a href="women.php?var=women"><b>WOMEN</b></a>
						  		</div>
    							
						  	</div>
						  	<br>
 						    <div>
 						    	<div class="barsop">
 						    		<a href="exon.php">
 						    		<b>Home</b>
 						    	</a>
 						    	</div>
 						    	<br>
 						    	<div class="barsop">
 						    		<a href="newin.php"><b>New in</b></a>
 						    	</div>
 						    	<br>
 						    	<div class="barsop">
 						    		<a href="brands.php"><b>Brands</b></a>
 						    	</div>
    							
 						    </div>
    						
  						</div>
  						
						
					</div>
					<span id="bars" onclick="opennav()"><i class="fa fa-bars fa-2x"></i></span>
					
					<div id="logo" class="inline">
						<a href="exon.php ">
            				<div id="logoimg">EXON</div>
          				</a>
					</div>
					<div>
						<ul id="bar2-ul">
							<li>
								<div>
									<a href="women.php?var=women">WOMEN</a>
								</div>
							</li>
							<li>
								<div>
									<a href="men.php?var=men">	MEN</a>
								</div>
							</li>
						</ul>
					</div>
					
					<div id="searchdiv">
						<form action="srcresultsm.php?srch=src" method="post" id='searchform' class="flex">
							<label id="labelsrch">
								<input  type="search" name="search" placeholder="Search for items, Brands">
							</label><!--labelsrch-->
							<button id='search-icon-btn'type="submit">
								<i class="fa fa-search"></i>
							</button><!--end search-icon-btn-->
						</form><!--end searchform-->
					</div><!--end searchdiv-->

					<!--last added start-->
					<!--after search-->
					<div id="flo">
						<ul class="flex" id="floating">
							<li>
								<div id="srcbtnsml">
										<button id='search-icon-btn'type="button">
											<a href="searchresultmob.php"><i class="fa fa-search"></i></a>
										</button>
								</div>
							</li>
							<li id='for3ta'>
								<div  id='dropdown-account'>
									<button id='usericonbtn' type="button">
										<i class="fa fa-user-circle fa-2x"></i>
									</button><!--end usericonbtn-->
									<div class='dropdown-content'>
										<ul>
											<li>
												<div id="signin">
													<u>	
														<!-- user login -->
														<?php
															

															# <!--logout start-->
														  
														  	if (isset($_REQUEST['logout'])&& $_REQUEST['logout']=="out") {
														  		session_destroy();
														  		$_SESSION['user']=0;
														  		if (isset($_SESSION['user']) && $_SESSION['user']==0)
																		$user=0;
														  		
														  		
														  	}
														  	# logout end
														  	
															if ($user==1) {
																
																echo "<a href='exon.php?logout=out'>Log Out</a>";
															}

															if ($user==0) {
																
																echo "<a href='alrady-reg.php'>Sign In</a>";
															}

														  ?>
														  <!-- end user login -->
													</u>	
												</div>
											</li>
											<li>
												<div class="dropdown-li">
													<a href="myaccount.php">
														My Account
													</a>
												</div>
											</li>
											<li>
												<div class="dropdown-li">
													<a href="myorder.php">My Orders
													</a>
												</div>
											</li>
										</ul>
									</div>



								</div><!--end dropdown-account-->
							</li>


					<!--2-->
							<li class='divfor3ta'>
								<div  id='dropdown-account'>
									<button id='usericonbtn' type="button">
									<a href="saved-item.php" target="_blank"><i class="fa fa-heart-o fa-2x"></i></a>
									</button><!--end usericonbtn-->
								</div><!--end dropdown-account-->
							</li>

					<!--3-->
							<li class='divfor3ta'>
								<div  id='dropdown-account'>
									<button id='usericonbtn' type="button">
										<a href="wishlist.php" target="_blank"><i class="fa fa-shopping-bag fa-2x"></i></a>
									</button><!--end usericonbtn-->
								</div><!--end dropdown-account-->
							</li>
						</ul>
					</div>
					<!--last added end-->
				</div> <!--end of bar2-->


				
				<div id="bar3">
					<div>
						<ul class="flex">
							<li id="b3">
								<div class="b3op">
									<a href="newin.php">New in</a>
								</div>
							</li>
							<li id="b3">
								<div class="b3op">
									<a href="brands.php">Brands</a>
								</div>
							</li>
							<?php
								if ($user==1) {
									$email=$_SESSION['email'];
								$password=$_SESSION['password'];
								$mail='strikerabirhasasn@gmail.com';
								$pass='admin';
									if ($email==$email && $password==$pass) {
										echo "
											<li id='b3' style='padding-right: 10px;padding-left: 10px;padding-top: 15px;'>
												<div>
									 				<a href='admin.php'>Admin Panel</a>
												</div>
											</li>
										";
									}

								}
								
							  ?>
						</ul>
					</div>
				</div><!--end of bar3-->

					
	
				
			</div>	<!-- end-->
		</nav> <!--Header nav end-->
	</header>
<div id='admin'>
	<div id='admin_content'>
		<form action="admin.php?form=ad" method="post">
			<label>Product name : </label>
			<input type="text" name="pname"><br><br>
			<label>Select Image : </label>
			<input type="file" name="img"><br><br>
			<label>Product code : </label>
			<input type="text" name="code"><br><br>
			<label>Product size : </label>
			<input type="text" name="size"><br><br>
			<label>Prize : </label>	
			<input type="text" name="prize"><br><br>
			<input type="radio" name="gender" value="Women">
 			<label>..Womenswear.. </label>
  			<input type="radio" name="gender" value="Men">
 			<label>..Menswear.. </label><br><br>
 			<label>Quantity : </label>
 			<input type="number" name="quantity">
 					<br><br>
 			<input id='submit'type="submit" name="submit" value="Add">	


		</form>
		<?php
			// insert into all produt table
			if (isset($_REQUEST['form'])&&$_REQUEST['form']=="ad") {
				

				$pname=mysqli_real_escape_string($con,$_REQUEST['pname']);
				$img=mysqli_real_escape_string($con,$_REQUEST['img']);
				$pcode=mysqli_real_escape_string($con,$_REQUEST['code']);
				$psize=mysqli_real_escape_string($con,$_REQUEST['size']);
				$prize=mysqli_real_escape_string($con,$_REQUEST['prize']);
				$pgender=mysqli_real_escape_string($con,$_REQUEST['gender']);
				$pquantity=mysqli_real_escape_string($con,$_REQUEST['quantity']);

				if ($pname!=NULL && $img!=NULL && $pcode!=NULL && $psize!=NULL && $prize!=NULL && $pgender!=NULL && $pquantity!=NULL) {

					$query="select * from all_product where pcode='$pcode'";
					$result1=mysqli_query($con,$query);
					if (mysqli_num_rows($result1)==1) {
						echo "<br>!!!..Product code exist..!!! Use new one";
					}

					else{
					$query="INSERT INTO all_product VALUES (NULL,'$pname','$img','$pcode','$psize','$prize','$pgender','$pquantity')";
					mysqli_query($con,$query);
					}
				}
				else echo "<br>!!! Fill all information first!!!";
			}


		 ?>
	</div>
</div>
<div id='addd'>
	<div >

		<a class='ed aa' href="admin.php?allproduct=pro">All Products</a>
		<a class='ed aa' href="admin.php?men=pro">Men</a>
		<a class='ed aa' href="admin.php?women=pro">Women</a>
	</div>
	
	<div id='admin_content' style="text-align: none;">
		<?php
		//for all_product table
		if (isset($_REQUEST['allproduct'])&&$_REQUEST['allproduct']=="pro") {
			echo "<b><u>All Products</u></b> <br><br>";

			
			$query= "select * from all_product";
			
			$result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0) {
				
					echo "

					<table>";
					echo "
 						<tr>
 						<th>Image</th>
 						<th>Code</th>
 						<th>Name</th>
 						<th>Size</th>
 						<th>Prize</th>
 						<th>Gender</th>
 						<th>Quantity</th>
 						<th></th>
 						</tr>";
 						while ($row=mysqli_fetch_assoc($result)) {
 							$pcode=$row['pcode'];

 							echo 
 						"<tr>
 						<td><img src='image/{$row['img']}' height='45px'></td>
 						<td>{$row['pcode']}</td>
 						<td>{$row['pname']}</td>
 						<td>{$row['psize']} </td>
 						<td>{$row['prize']}</td>
 						<td>{$row['gender']}</td>
 						<td>{$row['quantity']}</td>
 						<td><a id='rm' class='dl' href='item_delete.php?remove=$pcode'>Remove</a></td>
 						</tr>";

 						
				}
				echo "</table>";			
			}	
		}
		//for men table
		if (isset($_REQUEST['men'])&&$_REQUEST['men']=="pro") {
			echo "<b><u>Mens Products</u></b> <br><br>";

			
			$query= "select * from all_product where gender='Men' ";
			
			$result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0) {
				
					echo "<table>";
					echo "
 						<tr>
 						<th>Image</th>
 						<th>Code</th>
 						<th>Name</th>
 						<th>Size</th>
 						<th>Prize</th>
 						<th>Gender</th>
 						<th>Quantity</th>
 						<th></th>
 						</tr>";
 						while ($row=mysqli_fetch_assoc($result)) {
 							$pcode=$row['pcode'];

 							echo 
 						"<tr>
 						<td><img src='image/{$row['img']}' height='45px'></td>
 						<td>{$row['pcode']}</td>
 						<td>{$row['pname']}</td>
 						<td>{$row['psize']} </td>
 						<td>{$row['prize']}</td>
 						<td>{$row['gender']}</td>
 						<td>{$row['quantity']}</td>
 						<td><a id='rm' class='dl' href='item_delete.php?remove=$pcode'>Remove</a></td>
 						</tr>";

 						
				}
				echo "</table>";			
			}	
		}
		//for women table
		if (isset($_REQUEST['women'])&&$_REQUEST['women']=="pro") {
			echo "<b><u>Womens Products</u></b> <br><br>";

			
			$query= "select * from all_product where gender='Women' ";
			
			$result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0) {
				
					echo "

					<table>";
					echo "
 						<tr>
 						<th>Image</th>
 						<th>Code</th>
 						<th>Name</th>
 						<th>Size</th>
 						<th>Prize</th>
 						<th>Gender</th>
 						<th>Quantity</th>
 						<th></th>
 						</tr>";
 						while ($row=mysqli_fetch_assoc($result)) {
 							$pcode=$row['pcode'];

 							echo 
 						"<tr>
 						<td><img src='image/{$row['img']}' height='45px'></td>
 						<td>{$row['pcode']}</td>
 						<td>{$row['pname']}</td>
 						<td>{$row['psize']} </td>
 						<td>{$row['prize']}</td>
 						<td>{$row['gender']}</td>
 						<td>{$row['quantity']}</td>
 						<td><a id='rm' class='dl' href='item_delete.php?remove=$pcode'>Remove</a></td>
 						</tr>";

 						
				}
				echo "</table>";			
			}	
		}


		?>

		
	</div>
</div>




	<footer>
		<div>
			<div id="foot1">
				<div id="Hours"class="row">
					<span><strong>Hours</strong></span><br>
					Sat-Thurs: 8:00am - 10:00pm<br>
					Friday Closed<br>
					Sat-Fri: 8:00am - 12:30pm (Eid Special)
				</div> <!-- hours & row-->
				<div id="Address" class="row">
					<span><strong>Address</strong></span><br>
					<p>
					S.N.B Super Market, <br>Alamdanga, Chuadanga</p>
					<div id="maps">
						<a href="https://goo.gl/maps/BPuSkhYsByP8ejR66">
							<div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6153092657564!2d88.94507341488188!3d23.76109379428481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39feb92c30ab5c69%3A0x721a02036745cac4!2sExon%20Export%20And%20Garments!5e0!3m2!1sen!2sbd!4v1599615487789!5m2!1sen!2sbd" width="100%" height="113px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</a>
					</div> <!--maps-->
				</div> <!--Address & row-->
				<div id="Contactus" class="row">
					<span><strong>Contact us</strong></span><br>
					<b>Email: </b>exonexportgarments@gmail.com<br>
					<b>Phone: </b><a href="tel:01711444754" id="phone">
						<span>01711444754</span>
					</a><br>
					<div id="Aboutus">
						<span><strong>About Us</strong></span>
						<p>"We try our best to give you best quality cloths. We have best collection and brands. Thank you for supporting us. Hope we will give you a good service."</p>
					</div> <!--Aboutus-->

				</div> <!--Contactus & row-->
			</div> <!--foot1-->
		
			<div id="foot2">
				&copy; Exon Export & Garments 2020
			</div> <!--foot2-->
		</div>
	</footer>


	<script type="text/javascript" src="script.js"></script>
</body>
</html>