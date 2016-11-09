<?php
		$servername = "localhost";
		$username = "root";
		$password = "aayush@123";
		$db = "InstiWallet";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error)
		{
    		die("Connection failed: " . $conn->connect_error);
		}
		echo "<div id='content'>";
		echo "<center><br>";
		$username=$_POST['user_name'];
		$password=$_POST['user_pass'];
		$sql = "SELECT * FROM USER where user_name = '$username' and password= '$password'";
		$result = $conn->query($sql);
		if($result->num_rows == 1)
		{
			$row=$result->fetch_assoc();
			echo "<br>Hello";
			echo "<h2>".$row["name"]."</h2>";
			echo "You've succesfully logged in!<br><br>";
			echo "Your data is as follows: <br><br>";
			echo "<table>
        				<tr>
        					<td><b>User_Name</b></td>
        					<td><b>Name</b></td>
        					<td><b>Balance</b></td>
        					<td><b>Date_Of_Joining</b></td>
        					<td><b>Last_Online</b></td>
        					<td><b>Email</b></td>
        					<td><b>Mobile</b></td>
        					<td><b>Total_Expense</b></td>
        				</tr>
        				<tr>
        					<td>".$row["user_name"]."</td>
        					<td>".$row["name"]."</td>
        					<td>".$row["balance"]."</td>
        					<td>".$row["d_o_j"]."</td>
        					<td>".$row["last_online"]."</td>
        					<td>".$row["email"]."</td>
        					<td>".$row["mobile"]."</td>
        					<td>".$row["total_expense"]."</td>
        				</tr>
        			</table><br><br>
        			<hr height='5px' color='#AAAAAA'><br><br>
        		";
			// echo "
			// 	<form method='post' action='index_e.php'>
			// 		<button id='home_e'>Home</button>
			// 	</form>
			// 	<form method='post' action='delete_e.php'>
			// 		<button id='delete_e'>Delete</button>
			// 	</form>
			// 	<form method='post' action='update_e.php'>
			// 		<button id='update_e'>Update</button>
			// 	</form>
			// ";
		}
		else
		{
			echo "<br>No result found!<br><br>";
		}
		echo "</center>";
		echo "</div>";
		$conn->close();
		?>