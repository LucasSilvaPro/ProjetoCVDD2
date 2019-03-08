<?php
	
	require_once("conec.php");
	$id=$_GET['id'];
	$sql="DELETE FROM Curso WHERE id='$id'";
	$result=$conn->query($sql) or die ($sql->error);
	if($result){
		header("Location: cursos.php");
	}else{
		echo "Não foi apagado";
	}


  ?>
