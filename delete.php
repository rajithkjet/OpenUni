<?php

		include "conection.php";



$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

//echo "DELETE FROM user_info WHERE User_id='".$id."'";
$queryuser="DELETE FROM userinfo WHERE nic='".$id."'";
$resultuser = mysqli_query($strconn,$queryuser);

$queryedu1="DELETE FROM education1 WHERE nic='".$id."'";
$resultedu1 = mysqli_query($strconn,$queryedu1);

$queryedu2="DELETE FROM education2 WHERE nic='".$id."'";
$resultedu2 = mysqli_query($strconn,$queryedu2);

$queryedu3="DELETE FROM education3 WHERE nic='".$id."'";
$resultedu3 = mysqli_query($strconn,$queryedu3);

$querywork1="DELETE FROM work1 WHERE nic='".$id."'";
$resultwork1 = mysqli_query($strconn,$querywork1);

$querywork2="DELETE FROM work2 WHERE nic='".$id."'";
$resultwork2 = mysqli_query($strconn,$querywork2);

if($resultuser||$resultedu1||$resultedu2||$resultedu3||$resultwork1||$resultwork2)
								{
									echo "Application Deleted Successfully";
                                    echo '<script>alert("Application Deleted")</script>';
									//echo("<script>location.href = 'manageuser.php';</script>");
								}
								else
								{
									echo $result;
								}
mysqli_close($strconn);
header("Location: updatedelete.php");

?> 	