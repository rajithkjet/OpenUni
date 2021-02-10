

<?php

include "conection.php";


if(isset($_POST['btnupdate'])){

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
	
	
	$query = "UPDATE userinfo SET surname='$sname',fname='$fname',nic='$nic',mobile='$mobile',email='$email' WHERE nic='$nic'";
	// print($query);
	$result = mysqli_query($strconn,$query);
	//echo $result;

	 $queryedu1 = "UPDATE education1 SET nic='$nic',title='$edutitle1',class='$educlass1',uname='$eduuni1',grdate='$edugrad1' WHERE nic='$nic'";
	 //print($queryedu1);
	 $resultedu1 = mysqli_query($strconn,$queryedu1);

	 $queryedu2 = "UPDATE education2 SET nic='$nic',title='$edutitle2',class='$educlass2',uname='$eduuni2',grdate='$edugrad2' WHERE nic='$nic'";
	 //print($queryedu2);
	 $resultedu2 = mysqli_query($strconn,$queryedu2);

	 $queryedu3 = "UPDATE education3 SET nic='$nic',title='$edutitle3',class='$educlass3',uname='$eduuni3',grdate='$edugrad3' WHERE nic='$nic'";
	 //print($queryedu3);
	 $resultedu3 = mysqli_query($strconn,$queryedu3);

	 $querywork1 = "UPDATE work1 SET nic='$nic',cname='$wname1',position='$wposi1',period='$wperiod1'";
	 //print($querywork1);
	 $resultwork1 = mysqli_query($strconn,$querywork1);

	 $querywork2 = "UPDATE work2 SET nic='$nic',cname='$wname2',position='$wposi2',period='$wperiod2'";
	 //print($querywork1);
	 $resultwork2 = mysqli_query($strconn,$querywork2);
	//echo $resulttime;
	// $nul=0;
	// $queryrating = "INSERT INTO rating (UserName,name,Subject,subrating) VALUES('$username','$fname','$subject','$nul')";
	// $resultrating = mysqli_query($strconn,$queryrating);
	//echo $resultrating;
	// if($result&&$resulttime&&$resultrating)
	if($result|| $resultedu1||$resultedu2||$resultedu3||$resultwork1||$resultwork2)
	{
		echo "<div class='alert alert-success' role='alert'>Application Update Successfully !</div>";
		//echo '<script>alert("Application Update Successfully !")</script>';

	}
	else
	{
	   
		echo "<div class='alert alert-danger' role='alert'>Something went wrong</div>";
	}
	
	




}
		
	
		
	
//  mysqli_close($strconn);
// header("Location: updatedelete.php");

	?>

