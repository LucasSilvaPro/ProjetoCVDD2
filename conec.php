<?php

	$server='localhost';
 	$user='lucas@localhost';
 	$pass='lucas';
 	$banco="cvdd";

 	$conn= new mysqli($server,$user,$pass,$banco);
 	if($conn->connect_error){
 		echo "error";
 	}

  ?>
