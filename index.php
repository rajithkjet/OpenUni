<html>
<head>
<left>
<div id="response" style="font-size: 30px;"></div>
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
	?>

	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1>Applicant Details</h1>
                </div>
            </div>
        </div>
    </header>
	<form method="POST" action="" id="regform">
		<table border=0 align="center">

        <tr>
        <td colspan="5" align="center"> <?php echo '<colspan="2" align="center"> <a href="updatedelete.php" class="btn btn-warning"  >Update / Delete Applicant Details</a>'; ?></td>
			</tr>

			<tr>
				<td><label>Surname :</label></td>
				<td><input type="text" class="form-control" name="sname" placeholder="Surname"></td>
			</tr>
			<tr>
				<td><label>First Name :</label></td>
				<td><input type="text" class="form-control" name="fname" placeholder="First Name"></td>
			</tr>
		
				<tr>
					<th><label>National Id No :</label></th>
					<td><input type="text" class="form-control" name="nic" placeholder="NIC No"></td>
				</tr>
		
			<tr>
				<td><label>Mobile Number :</label></td>
				<td><input type="number" class="form-control" name="mobile" placeholder="Mobile No"></td>
			</tr>
			<tr>
				<td><label>Email :</label></td>
				<td><input type="text" class="form-control" name="email" placeholder="Email Address"></td>
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
				<td><input type="text" class="form-control" name="edutitle1" placeholder="Title of the Degree / Diploma / Certificate(e.g. BSc in Computer Science)"></td>
                <td><input type="text" class="form-control" name="educlass1" placeholder="Class (1srt, 2nd Upper, 2nd Lower, General Pass)"></td>
                <td><input type="text" class="form-control" name="eduuni1" placeholder="Name of the University / Institution"></td>
                <td><input type="text" class="form-control" name="edugrad1" placeholder="Date of Graduation"></td><br>
                </tr>
                <tr>
                <td><label></label></td>
                <td><input type="text" class="form-control" name="edutitle2" placeholder="Title of the Degree / Diploma / Certificate(e.g. BSc in Computer Science)"></td>
                <td><input type="text" class="form-control" name="educlass2" placeholder="Class (1srt, 2nd Upper, 2nd Lower, General Pass)"></td>
                <td><input type="text" class="form-control" name="eduuni2" placeholder="Name of the University / Institution"></td>
                <td><input type="text" class="form-control" name="edugrad2" placeholder="Date of Graduation"></td><br>
                </tr>
                <tr>
                <td><label></label></td>
                <td><input type="text" class="form-control" name="edutitle3" placeholder="Title of the Degree / Diploma / Certificate(e.g. BSc in Computer Science)"></td>
                <td><input type="text" class="form-control" name="educlass3" placeholder="Class (1srt, 2nd Upper, 2nd Lower, General Pass)"></td>
                <td><input type="text" class="form-control" name="eduuni3" placeholder="Name of the University / Institution"></td>
                <td><input type="text" class="form-control" name="edugrad3" placeholder="Date of Graduation"></td><br>
			</tr>
			
            <tr>
				<td><label>Work Experience :</label></td><br>
				<td>Company Name</td>
                <td>Position</td>
                <td>Period (from date to to date)</td>
                </tr>

            <tr>
				<td><label></label></td><br>
				<td><input type="text" class="form-control" name="wname1" placeholder="Company Name"></td>
                <td><input type="text" class="form-control" name="wposi1" placeholder="Position"></td>
                <td><input type="text" class="form-control" name="wperiod1" placeholder="Period (from date to to date)"></td>
                </tr>
                <tr>
				<td><label></label></td><br>
				<td><input type="text" class="form-control" name="wname2" placeholder="Company Name"></td>
                <td><input type="text" class="form-control" name="wposi2" placeholder="Position"></td>
                <td><input type="text" class="form-control" name="wperiod2" placeholder="Period (from date to to date)"></td>
                </tr>



			<tr>
				<td colspan="5" align="center"><button class="btn btn-block" name="btn" >Add Application</button></td>
			</tr>
			<tr>
				<td colspan="5" align="center"><button class="btn btn-block">Reset</button></td>
			</tr>
			<tr>
			<td colspan="5" align="center"> <?php echo '<colspan="2" align="center"> <a href="seelist.php" class="btn btn-block"  >See Applicant | Administartion</a>'; ?></td>
			</tr>
		</table>
	</form>
	<?php
	if(!empty($_POST['nic'])&&!empty($_POST['mobile']))
	{
		if(isset($_POST['btn']))
		{
		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$nic = $_POST['nic'];
        $mobile = $_POST['mobile'];
		$email = $_POST['email'];

        $edutitle1 = $_POST['edutitle1'];
        $edutitle2 = $_POST['edutitle2'];
        $edutitle3 = $_POST['edutitle3'];

        $educlass1 = $_POST['educlass1'];
        $educlass2 = $_POST['educlass2'];
        $educlass3 = $_POST['educlass3'];

        $eduuni1 = $_POST['eduuni1'];
        $eduuni2 = $_POST['eduuni2'];
        $eduuni3 = $_POST['eduuni3'];

        $edugrad1 = $_POST['edugrad1'];
        $edugrad2 = $_POST['edugrad2'];
        $edugrad3 = $_POST['edugrad3'];

        $wname1 = $_POST['wname1'];
        $wname2 = $_POST['wname2'];

        $wposi1 = $_POST['wposi1'];
        $wposi2 = $_POST['wposi2'];

        $wperiod1 = $_POST['wperiod1'];
        $wperiod2 = $_POST['wperiod2'];
		
        
		
		$query = "INSERT INTO userinfo(surname,fname,nic,mobile,email) VALUES('$sname','$fname','$nic','$mobile','$email')" ;
		//echo $query;
		$result = mysqli_query($strconn,$query);
		//echo $result;

		 $queryedu1 = "INSERT INTO education1 (nic,title,class,uname,grdate) VALUES('$nic','$edutitle1','$educlass1','$eduuni1','$edugrad1')";
		 $resultedu1 = mysqli_query($strconn,$queryedu1);

         $queryedu2 = "INSERT INTO education2 (nic,title,class,uname,grdate) VALUES('$nic','$edutitle2','$educlass2','$eduuni2','$edugrad2')";
		 $resultedu2 = mysqli_query($strconn,$queryedu2);

         $queryedu3 = "INSERT INTO education3 (nic,title,class,uname,grdate) VALUES('$nic','$edutitle3','$educlass3','$eduuni3','$edugrad3')";
		 $resultedu3 = mysqli_query($strconn,$queryedu3);

         $querywork1 = "INSERT INTO work1 (nic,cname,position,period) VALUES('$nic','$wname1','$wposi1','$wperiod1')";
		 $resultwork1 = mysqli_query($strconn,$querywork1);

         $querywork2 = "INSERT INTO work2 (nic,cname,position,period) VALUES('$nic','$wname2','$wposi2','$wperiod2')";
		 $resultwork2 = mysqli_query($strconn,$querywork2);
		
        if($result|| $resultedu1||$resultedu2||$resultedu3||$resultwork1||$resultwork2)
		{
			echo "<div class='alert alert-success' role='alert'>Application Submited</div>";
			echo '<script>alert("Application Submited")</script>'; 

		
		}
		else
		{
           
			echo "<div class='alert alert-danger' role='alert'>Something went wrong</div>";
			echo '<script>alert("Something went wrong")</script>'; 
		}
		
		
		
		}
	}
	?>
	
</body>
</html>