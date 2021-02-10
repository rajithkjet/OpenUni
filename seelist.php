<?php
		
		include "conection.php";
		// session_start();
		// if(isset($_SESSION["nic"]))
		// {
		// 	$username=$_SESSION["nic"];
		// 	//echo $username;
		// 	$query1 = "SELECT * FROM userinfo WHERE UserName='". $nic."'";
		// 	//  print($query1);
		// 	$result1 = mysqli_query($strconn,$query1);
			
		// 	$result_data=mysqli_fetch_assoc($result1);
		// 	//print_r($result_data["Subject"]);
		// 	$nic=$result_data["nic"];

			

		// 	while($row = mysqli_fetch_array($result1))
		// {
			
		// 		$_SESSION["nic"] = $nic;
			
		// }
			
		// }	
		


		

	?>

<html>
<head>
	<meta charset="utf-8">
	<title>Open UNI Application </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	
	
</head>
<body>
	<?php
		
		$query = "SELECT nic FROM userinfo LIMIT 100000000000000";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "success";
		}*/
		while($row=mysqli_fetch_array($result))
		{
			$nic = $row["nic"];
			
		}
	?>

	

				<?php	
				echo '<div align="center"><br><a href="index.php" class="btn">Back</a><br></div>';
				//echo '<td colspan="2" align="center"><a href="../user/courses.php" class="btn btn-block"  >Back</a> </td>';	
				?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">				
				<?php 
                
                //$queryf = "SELECT nic FROM userinfo where nic='".$nic."'";
                $queryf = "SELECT nic FROM userinfo";
		$resultf = mysqli_query($strconn,$queryf);
		
		while($row = mysqli_fetch_array($resultf))
		{
			
			//echo ' <li><a href="viewusers.php?usernic='.$row[0].'">  :'.$row[0].'</a><br></li>';

             echo "<td><a class='btn btn-success' href=\"viewusers.php?usernic=".$row[0]."\">Click here to View $row[0]</a></td>"; 
            //echo ' <li><a href="viewusers.php?usernic='.$row[2].'">  :'.$row[2].'</a><br></li>';
		}
                
                




        
                ?>			
			</div>

			
			    <div class="ex2" align="center">  <!--FAcebook width high describe ex2 ..IT is at the top in this script -->
					<div class="fb-comments" data-href="http://localhost/idealms/chontact.php?name='.$subject.'" data-width="" data-numposts="100">
					</div>
					
				</div>
		   </div>
	</div>

<!-- Clock Start -->




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
