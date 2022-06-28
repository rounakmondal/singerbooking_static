<?php

$conn = mysqli_connect('localhost', 'root','', 'abc');
if(!$conn){
	die("connection failed:".mysqli_connect_error()); 
} 
mysqli_select_db($conn,' abc');	
         $fname= $_POST['first_name']; 
         $lname= $_POST['last_name']	;
    	 $email = $_POST['email']; 	
         $phone= $_POST['contact_no'];
         $coment = $_POST['coment']; 
         $query="INSERT INTO user (fname, lname, email, phone, coment) VALUES ('$first_name','$last _name','$contact_no',  '$email', '$coment')";
         mysqli_query($conn,$query)	;
         header('location:index.html');
?>