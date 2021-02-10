<html>
<head>
<left>
<div id="response" style="font-size: 30px;">
</left>


<meta charset="utf-8">
	<title>Open UNI Application</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	
	<style>
	th, td {
		padding:5px;   
	}
	</style>
</head>
<body>
	<?php
		
		include "conection.php";
		include "update.php";
	?>

	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                
                    <h2>Update / Delete Applicant Details</h2><br>
					<table>
					<tr>
					<th><label>National Id No :</label></th>
					<form method="POST" action="" id="show">
					<td><input type="text" class="form-control" name="nicsearch" placeholder="NIC No"></td>
					
					
				<td colspan="5" align="center"><button class="btn btn-block" name="btnsearch" >Search</button></td>
				<td colspan="5" align="center"> <?php echo '<colspan="2" align="center"> <a href="index.php" class="btn btn-warning"  >Back</a>'; ?></td>
		
					</form>
				    </tr>
					</table>

            </div>
        </div>
	
		<?php
					
					if(!empty($_POST['nicsearch']))
					{
						if(isset($_POST['btnsearch']))
						{
						
						$nicsearch = $_POST['nicsearch'];
				  
						$querysearchuser = "SELECT * FROM userinfo WHERE nic='$nicsearch'";
						//print($querysearchuser);
						$resultsearchuser = mysqli_query($strconn,$querysearchuser);

						$rowuser = mysqli_fetch_array($resultsearchuser);
						$sname = $rowuser["surname"];
							//echo $sname;
							$fname = $rowuser["fname"];
							$nic = $rowuser["nic"];
							$mobile = $rowuser["mobile"];
							$email =$rowuser["email"];

						//echo "$fname";
						//print_r($rowuser["mobile"]);
						//var_dump ($resultsearchuser);



						$querysearchedu1 = "SELECT * FROM education1 WHERE nic='$nicsearch'";
						$resultsearchedu1 = mysqli_query($strconn,$querysearchedu1);
						$rowedu1 = mysqli_fetch_array($resultsearchedu1);
						$edutitle1 = $rowedu1['title'];
						$educlass1 = $rowedu1['class'];
						$eduuni1 = $rowedu1['uname'];
						$edugrad1 = $rowedu1['grdate'];


						$querysearchedu2 = "SELECT * FROM education2 WHERE nic='$nicsearch'";
						$resultsearchedu2 = mysqli_query($strconn,$querysearchedu2);
						$rowedu2 = mysqli_fetch_array($resultsearchedu2);
						$edutitle2 = $rowedu2['title'];
						$educlass2 = $rowedu2['class'];
						$eduuni2 = $rowedu2['uname'];
						$edugrad2 = $rowedu2['grdate'];



						$querysearchedu3 = "SELECT * FROM education3 WHERE nic='$nicsearch'";
						$resultsearchedu3 = mysqli_query($strconn,$querysearchedu3);
						$rowedu3 = mysqli_fetch_array($resultsearchedu3);
						$edutitle3 = $rowedu3['title'];
						$educlass3 = $rowedu3['class'];
						$eduuni3 = $rowedu3['uname'];
						$edugrad3 = $rowedu3['grdate'];

						$querysearchwork1 = "SELECT * FROM work1 WHERE nic='$nicsearch'";
						$resultsearchwork1 = mysqli_query($strconn,$querysearchwork1);
						$rowwork1 = mysqli_fetch_array($resultsearchwork1);
						$wname1 = $rowwork1['cname'];
						$wposi1 = $rowwork1['position'];
						$wperiod1 = $rowwork1['period'];


						$querysearchwork2 = "SELECT * FROM work2 WHERE nic='$nicsearch'";
						$resultsearchwork2 = mysqli_query($strconn,$querysearchwork2);
						$rowwork2 = mysqli_fetch_array($resultsearchwork2);
						$wname2 = $rowwork2['cname'];
						$wposi2 = $rowwork2['position'];
						$wperiod2 = $rowwork2['period'];

	
						include "show.php";
						}
					}
					?>
		</header>	
	
</body>
</html>