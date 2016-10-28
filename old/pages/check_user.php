<?php
$host='localhost';
$user='root';
$pass='aayush@123';

$db=mysql_connect($host,$user,$pass) or die('Unable to connect. Check your connection parameters.');

mysql_select_db('feelfree',$db) or die (mysql_error($db));

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
		$run_query=mysql_query($db, $query);
		$check=mysql_num_rows($run_query);
		if($check==1)
		{
			echo"<script>alert('This email already exists!')</script>";
			exit();
		}

	}
}
?>