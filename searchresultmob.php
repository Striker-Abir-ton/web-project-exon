<?php 
	require("dbcnct.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exon Export</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
									<form action="searchresultmob.php?srch=src" method="post" id='searchform' class="flex">
										<label id="labelsrch">
										<input  type="search" name="search" placeholder="Search for items, Brands">
										</label><!--labelsrch-->
										<button id='search-icon-btn'type="submit">
										<i class="fa fa-search"></i>
										</button><!--end search-icon-btn-->
									</form>
										
								</div>
							</li>
							
				</div> <!--end of bar2-->
				
			</div>	<!-- end-->
		</nav> <!--Header nav end-->
	</header>


	<div  >
		<div class="outer" >
			<?php


				if (isset($_REQUEST['srch'])&&$_REQUEST['srch']=="src") {
					$src_item=$_REQUEST['search'];
					if ($src_item!=NULL) {
						$query= "select * from all_product where pname like '%$src_item%' OR pcode=$src_item'";
			
						$result=mysqli_query($con,$query);
						if (mysqli_num_rows($result)>0) {
						
							while ($row=mysqli_fetch_assoc($result)) {
								$pcode=$row['pcode'];
 								echo "<div class='pcard'>
								<a href='productinfo.php?var=$pcode'> " ;

 									echo "<img src='image/{$row['img']}' width='100%' height='82.75%'>";
									echo "<div id='one'>{$row['pname']}</div>";
									echo "<p id='two'><b> Prize : {$row['prize']} TK</b></p>";

									echo "</a>
								</div>";

 							}
 							
						}
						else echo "<div style='text-align: center; font-size: 50px;'><b>NOT FOUND</b></div>";
					}
					
					else echo "<div style='text-align: center; font-size: 50px;'><b>NOT FOUND</b></div>";

				}	 		
			?>
			
		</div>
		
	</div>










	


	<script type="text/javascript" src="script.js"></script>
</body>
</html>