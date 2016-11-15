<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "aayush@123";
	$db = "InstiWallet";
	$conn = new mysqli($servername, $username, $password, $db);
	if($_POST)
	{
		$q=$_POST['searchword'];
		// $q=lower($q);
		$result=$conn->query("select name,profile_pic,user_name from USER where lower(user_name) like '%$q%' or lower(email) like '%$q%' or lower(name) like '%$q%' order by name LIMIT 7");
		$row=$result->fetch_all();
		$i=0;
		while($i<count($row))
		{
			$name=$row[$i][0];
			$profile_pic=$row[$i][1];
			$user=$row[$i][2];

			$i++;
?>
	<form action="profile.php" method="POST" style="margin:auto">
		<div class="display_box" align="left">
		<input value="<?php echo $name; ?>" name="user">
		<img src="<?php echo $profile_pic; ?>" style="width:50px; height:50px; float:left; margin-right:6px;"/><span class="name">
		<span style="font-size:9px; color:#999999"></span></div>
	</form>
	<br>
<?php
		}
	}
?>