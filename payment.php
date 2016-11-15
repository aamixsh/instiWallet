<?php
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "aayush@123";
      $db = "InstiWallet";
      $sender=$_SESSION['sender'];
      $receiver=$_GET['receiver_username'];
      $amount=$_GET['amount'];
      // Create connection
      $comment=$_GET['comment'];
      $type=$_GET['type'];
      $conn = new mysqli($servername, $username, $password, $db);
      // if ($conn->connect_error())
      // {
      //     die("Connection failed: " . $conn->connect_error());
      // }
      $sql="SELECT * from USER where user_name='$sender'";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
      $new_sender_balance=$row['balance']-$amount;
      $sql="SELECT * from USER where user_name='$receiver'";
      $result1=$conn->query($sql);
      $row1=$result1->fetch_assoc();
      $new_receiver_balance=$row1['balance']+$amount;
      $sql="UPDATE USER set balance = '$new_receiver_balance' where user_name='$receiver'";
      $result=$conn->query($sql);
      $update_used=$row['used_this_month']+$amount;
      $sql="UPDATE USER set used_this_month = '$update_used' where user_name='$sender'";
      $result=$conn->query($sql);
      $sql="UPDATE USER set balance = '$new_sender_balance' where user_name='$sender'";
      $result=$conn->query($sql);
      $sql="INSERT into TRANSACTIONS values (0, '$sender', '$receiver', '$amount', '".date("Y-m-d H:i:s")."', '3', '$comment', '$type')";
      $result=$conn->query($sql);
?>