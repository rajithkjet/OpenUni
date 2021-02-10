<html>
<head>



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
        
        $nic=$_GET['usernic'];
       // echo "$nic";
   
            $nicsearch = $nic;
      
            $querysearchuser = "SELECT * FROM userinfo WHERE nic='$nic'";
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



            
        

	?>
			
					
					
	<form method="POST" action="" id="updateform">
		<table border=0 align="center">

        <tr>
            <td><td>
			<td>
            <td colspan="5" align="center"> <?php echo '<colspan="2" align="center"> <a href="seelist.php" class="btn btn-block"  >Back</a>'; ?></td>
				
				</td> 
				
			</tr>
			<tr>
				<td><label>Surname :</label></td>
				<td><input type="text" class="form-control" id="test" name="sname" value="<?php echo $sname;?>"></td>
			</tr>
			<tr>
				<td><label>First Name :</label></td>
				<td><input type="text" class="form-control" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
		
			<tr>
					<th><label>National Id No :</label></th>
					<td><input type="text" class="form-control" name="nic" value="<?php echo $nic;?>"></td>
				</tr>
		
			<tr>
				<td><label>Mobile Number :</label></td>
				<td><input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?>"></td>
			</tr>
			<tr>
				<td><label>Email :</label></td>
				<td><input type="text" class="form-control" name="email" value="<?php echo $email;?>"></td>
			</tr>

            <tr>
				<td><label>Educational Qualifications :</label></td><br>
				<td>Title of the Degree / Diploma / Certificate(e.g. BSc in Computer Science)</td>
                <td>Class (1srt, 2nd Upper, 2nd Lower, General Pass)</td>
                <td>Name of the University / Institution</td>
                <td>Date of Graduation</td><br>
                </tr>

            <tr>
				<td><label></label></td><br>
				<td><input type="text" class="form-control" name="edutitle1" value="<?php echo $edutitle1;?>"></td>
                <td><input type="text" class="form-control" name="educlass1" value="<?php echo $educlass1;?>"></td>
                <td><input type="text" class="form-control" name="eduuni1" value="<?php echo $eduuni1;?>"></td>
                <td><input type="text" class="form-control" name="edugrad1" value="<?php echo $edugrad1;?>"></td>
                </tr>
                <tr>
                <td><label></label></td>
                <td><input type="text" class="form-control" name="edutitle2" value="<?php echo $edutitle2;?>"></td>
                <td><input type="text" class="form-control" name="educlass2" value="<?php echo $educlass2;?>"></td>
                <td><input type="text" class="form-control" name="eduuni2" value="<?php echo $eduuni2;?>"></td>
                <td><input type="text" class="form-control" name="edugrad2" value="<?php echo $edugrad2;?>"></td>
                </tr>
                <tr>
                <td><label></label></td>
                <td><input type="text" class="form-control" name="edutitle3" value="<?php echo $edutitle3;?>"></td>
                <td><input type="text" class="form-control" name="educlass3" value="<?php echo $educlass3;?>"></td>
                <td><input type="text" class="form-control" name="eduuni3" value="<?php echo $eduuni3;?>"></td>
                <td><input type="text" class="form-control" name="edugrad3" value="<?php echo $edugrad3;?>"></td>
			</tr>
			
            <tr>
				<td><label>Work Experience :</label></td><br>
				<td>Company Name</td>
                <td>Position</td>
                <td>Period (from date to to date)</td>
                </tr>

            <tr>
				<td><label></label></td><br>
				<td><input type="text" class="form-control" name="wname1" value="<?php echo $wname1;?>"></td>
                <td><input type="text" class="form-control" name="wposi1" value="<?php echo $wposi1;?>"></td>
                <td><input type="text" class="form-control" name="wperiod1" value="<?php echo $wperiod1;?>"></td>
                </tr>
                <tr>
				<td><label></label></td><br>
				<td><input type="text" class="form-control" name="wname2" value="<?php echo $wname2;?>"></td>
                <td><input type="text" class="form-control" name="wposi2" value="<?php echo $wposi2;?>"></td>
                <td><input type="text" class="form-control" name="wperiod2" value="<?php echo $wperiod2;?>"></td>
                </tr>

				

			
			
			
		</table>
	</form>
	

</body>
</html>