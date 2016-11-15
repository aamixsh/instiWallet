<?php
		$servername = "localhost";
		$username = "root";
		$password = "aayush@123";
		$db = "InstiWallet";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		// if ($conn->connect_error)
		// {
  //   		die("Connection failed: " . $conn->connect_error);
		// }
		echo "<div id='content'>";
		echo "<center><br>";
		$name=$_POST['name'];
		$email=$_POST['signup_email'];
		$mobile=$_POST['mobile'];
		$username=$_POST['signup_username'];
		$password=$_POST['signup_password'];
		$gender=$_POST['signup_gender'];
		$sql1 = "SELECT * FROM USER where user_name = '$username'";
		$sql2 = "SELECT * FROM USER where email = '$email'";
		$sql3 = "SELECT * FROM USER where mobile = '$mobile'";
		$result1 = $conn->query($sql1);
		$result2 = $conn->query($sql2);
		$result3 = $conn->query($sql3);
		if($result1->num_rows == 1)
		{
			echo "UserName already registered!";
		}
		else if($result2->num_rows == 1)
		{
			echo "Email already registered!";
		}
		else if($result3->num_rows == 1)
		{
			echo "Mobile already registered!";
		}
		else if($result1->num_rows == 0 && $result2->num_rows == 0 && $result3->num_rows == 0)
		{
			
			$sql = "INSERT into USER values ('$username','$password','$name','0','".date("Y-m-d")."','".date("Y-m-d H:i:s")."','0','$mobile','$email','$gender','0','0','1','0','images/profiles/default.jpg')";
			$result = $conn->query($sql);	
			$sql = "SELECT * FROM USER where mobile = '$mobile'";
			$result = $conn->query($sql);
			echo $result->num_rows;
			if(!result)
			{
				printf("Errormessage: %s\n", $mysqli->error);
   				exit;
			}
			else
			{
				echo "User added succesfully!";
			}
		}
		echo "</center>";
		echo "</div>";
		$conn->close();
?>