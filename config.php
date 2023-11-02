<?php
      $conn=new mysqli("0.0.0.0","root","root");
      if($conn->connect_error){
            die("Connection error:-  ".$conn->connect_error);
      }else{
            echo"connected successfully ";
      }
?>