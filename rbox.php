<?php
   
   include("connection.php");
 
 if(isset($_POST['submit']))
 {
	
   
   	 // INSERT TYPED MESSAGES IN DATABASE
	 
	 // ASSIGNING RANDOM NUMBERS  TO USERS
	 // HAVE TO CHANGE IT TO UNIQUE USER VIA IP ADDRESS
	 $user = rand(100,10000); 
	 $review_msg=$_POST['review_msg'];
	 
	 $query = "INSERT INTO `message`(`id`, `user`, `msg`) VALUES ('','".$user."','".$review_msg."')"  ;
	 
	 $insert=mysqli_query($conn,$query);
   if(!$insert)
   {
     die();
	   
   }
	 ?>
	 
	  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	 
	<?php 
	  //DISPLAY ALL PREVIOUS MESSAGES
	 
	 $query2="SELECT * FROM `message`";
     $fetch =mysqli_query($conn,$query2);
   
   while($row = mysqli_fetch_assoc($fetch))
   {
	   $id2 =$row['id'];
	   $msg2= $row['msg'];
	   $name= $row['user'];
	   echo "<br>".$name." : ".$msg2;
   }
	 
	 
	 
 }
 
 ?>