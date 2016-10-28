<?php
$host='localhost/feelfree';
$user='root';
$pass='aayush@123';

$db = new PDO($host,$user,$pass) or die('Unable to connect. Check your connection parameters.');

mysqli_select_db('feelfree',$db) or die (mysqli_error($db));

function insertUser()
{
	global $db;
	if(isset($_POST['signup']))
	{
		$name=S_POST['Name'];
		$email=S_POST['Email'];
		$number=S_POST['number'];
		$pass=S_POST['pass'];
		$query="select * from user where email='$email'";
		$run_query=mysqli_query($db, $query);
		$check=mysqli_num_rows($run_query);
		if($check==1)
		{
			echo"<script>alert('This email already exists!')</script>";
			exit();
		}
		else
		{
			$insert="insert into user values('$name','$email','$number','$pass')";
			$run_query=mysqli_query($insert);
			if($run_query)
			{
				echo"<script>alert('Signed Up successfully!')</script>";				
			}
		}

	}
}
?>