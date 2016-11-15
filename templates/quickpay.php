<?php
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "aayush@123";
      $db = "InstiWallet";
      $sender=$_GET['quickpay_name'];
      $receiver=$_GET['quickpay_receiver_name'];
      $type=$_GET['quickpay_type'];
      $pass=$_GET['quickpay_user_password'];
      $comment=$_GET['quickpay_comment'];
      $amount=$_GET['quickpay_amount'];
      // Create connection
      $conn = new mysqli($servername, $username, $password, $db);
      // if ($conn->connect_error())
      // {
      //     die("Connection failed: " . $conn->connect_error());
      // }
      $sql="SELECT * from USER where user_name='$sender'";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
      echo $result->num_rows;
      if($sender==$receiver)
      {
        echo "Bhosdi ke lund ho kya!";
      }
      else if($result->num_rows==1)
      {
            if($pass==$row['password'])
            {
                $sql="SELECT * from USER where user_name='$receiver'";  
                $result1=$conn->query($sql);
                $row1=$result1->fetch_assoc();
                if($result1->num_rows==1)
                {
                  $new_sender_balance=$row['balance']-$amount;
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
                }
            }
      }
?>