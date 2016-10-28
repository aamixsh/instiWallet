<?php
$host='localhost';
$user='root';
$pass='aayush@123';

$db=mysqli_connect($host,$user,$pass) or die('Unable to connect. Check your connection parameters.');

mysqli_select_db('feelfree',$db) or die (mysqli_error($db));

function login()
{
	global $db;
	if(isset($_POST['login']))
	{
		$email=S_POST['email'];
		$pass=S_POST['password'];
		$query="select * from user where email='$email' and password='$pass'";
		$run_query=mysqli_query($db, $query);
		$check=mysqli_num_rows($run_query);
		if($check==1)
		{
			
			echo "<h2>Hello";
		}

	}
}



