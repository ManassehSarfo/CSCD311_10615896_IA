<?php

$username = $_POST['username'];
$first name = $_POST['first name'];
$middle name = $_POST['middle name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone number = $_POST['phone number'];
$nationality = $_POST['nationality'];
$married = $_POST['married'];
$place of birth = $_POST['place of birth'];
$city of residence = $_POST['city of residence'];
$next of kin = $_POST['next of kin'];
$course = $_POST['course'];
$religion = $_POST['religion'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$Post Adress = $_POST['Post Adress'];
$alternative phone no = $_POST['alternative phone no'];

if(!empty($username) || !empty($password) || !empty($gender) || !empty($email) ||!empty($phone number) ||!empty($nationality) ||!empty($married) ||!empty($place of birth) ||!empty($city of residence) ||!empty($next of kin) ||!empty($course) ||!empty($religion) ||!empty($password) ||!empty($gender) ||!empty($Post Adress) ||!empty($alternative phone no)
{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "webd";
	
	$connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	if(mysqli_connect_error()) 
	{
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
	else{
		$SELECT = "SELECT email From register Where email = ? Limit 1";
		$INSERT = "INSERT Into register (first name,midde name , surname , email , phone number,
		nationality, married, place of birth, city of residence,next of kin, course, religion, password, gender,
		Post Adress, alternative phone no) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
		
		$stmt = $conn->prepapre($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		
		if ($rnum==0)
		{
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $first name,$midde name , $surname , $email , $phone number,
		$nationality, $married, $place of birth, $city of residence,$next of kin, $course, $religion, $password, $gender,$Post Adress, $alternative phone no);
		
		    $stmt->execute();
			echo "New record inserted successfully";
			
		}
		else{
			echo "Someone alreeady registered using this email";
		}
		$stmt->close();
		$conn->close();
		
		
	}
	
}

else{
	
	echo "All fields required";
	die(); 
	
}



?>