<?php
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "aayush@123";
      $db = "InstiWallet";
      $q=$_GET['q'];
      $conn = new mysqli($servername, $username, $password, $db);
      // Check connection
      // if ($conn->connect_error())
      // {
      //     die("Connection failed: " . $conn->connect_error());
      // }
      $sql="SELECT * from USER where user_name = '$q'";
      $result=$conn->query($sql);
      $row=$result->fetch_all();
      if(count($row)==1)
        echo "UserName not Available!";
      else
        echo "UserName Available.";
?>