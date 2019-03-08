<?php

 $server='localhost';
 $user='cvdd@localhost';
 $pass='mansuetobarbosa';

 $conn= new mysqli($server,$user,$pass);
 	if($conn->connect_error){
 		echo "error";
 	}

 $sql="CREATE SCHEMA cvdd";

 if($conn->query($sql)){
 	echo "Banco Criado";
 }else{
 	echo "EROO";
 }

/* $sql= "CREATE TABLE Clientes(
 	id int PRIMARY KEY AUTO_INCREMENT,
 	primeiro_nome VARCHAR(30) NOT NULL,
 	email VARCHAR(30) NOT NULL,
 	data_registro TIMESTAMP 
);";
	if($conn->query($sql)){
		echo "CRIADO";
	}else{
		echo "Não Criado";
	}

	$sql="INSERT INTO Clientes(primeiro_nome,email) VALUES('Lucas','lucas.emailp@gmail.com')";
	if($conn->query($sql)){
		echo "CLiente adicionado";
	}else{
		echo "ERRO";
	}

	$sql="SELECT * FROM Clientes";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()) {
			echo $rows['id'].' '.$rows['primeiro_nome'].'  '.$rows['email'].'<br>';
		}
	}else{
		echo "sem resultados";
	}

	$sql="DELETE FROM Clientes WHERE id='2'";
	if($conn->query($sql)){
		echo "Deletado";
	}else{
		echo "Não deletado";
	}
	

	$sql="UPDATE Clientes SET primeiro_nome='Silva',email='silva@gmail.com' WHERE id='1' ";
	if($conn->query($sql)){
		echo "UPADO";
	}else{
		echo "Não Upado";
	}
  	$conn->close();
	*/
	

  ?>
