<?php

$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost:3306";
	$dbname = "librarydatabase";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if($connection){
		echo "Connected to DATABASE<br>";
	}
	else{
		echo "NOT CONNECTED TO DATABASE<br>";
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$mname = $_POST['mname'];
		$mail = $_POST['mail'];
		$cno = $_POST['cont_number'];
		$bday = $_POST['bday'];
		$type = $_POST['type'];
		$ms = $_POST['memstrt'];
		$mf = $_POST['memfin'];
		$mid=$_POST['memid'];
		$mp=$_POST['mempswd'];
		print("Elements collected<br>");
		print_r($_POST);
		print("<br>");
		$sql = "UPDATE librarydatabase.member SET Mem_Id='$mid',Mem_Name='$mname',Mem_Email='$mail',Mem_Contact='$cno',M_DOB='$bday',Membership_start='$ms', Membership_End='$mf',Mem_psswd='$mp' WHERE Mem_Id='$mid'";
$sql1 = "UPDATE  librarydatabase.member_card SET Mbr_Id='$mid', Mbr_Name='$mname', Type='$type' WHERE Mbr_Id='$mid'";
$result = mysqli_query($connection,$sql);
$result1 = mysqli_query($connection,$sql1);
if(mysqli_query($connection,$sql1)){
		echo "yes<br>";
	}
else{
		echo "no<br>";
	}
if(mysqli_query($connection,$sql)){
		echo "yes<br>";
		
	}
else{
		echo "no<br>";
	}
	$sql = "SELECT * FROM librarydatabase.member";
	$sql1 = "SELECT * FROM librarydatabase.member_card";
	$result = mysqli_query($connection,$sql);
	$result1=mysqli_query($connection,$sql1);
	}
else{
		echo "Elements could not be collected<br>";
	}
	?>
	

