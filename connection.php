<?php

  $servername ="localhost";
  $username="root";
  $password="";
  $dbname="rtable";
  
  $conn =mysqli_connect($servername,$username,$password,$dbname);
  
  if(!$conn)
   {
	   
	   die("Connection error because :".mysqli_connect_error());
   }
   else
   {
	   echo "-----";
   }

   



?>
