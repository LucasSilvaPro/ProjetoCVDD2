<?php
	session_start();
	require_once("conec.php");
	$usuario=addslashes($_POST['usuario']);
	$senha=addslashes($_POST['senha']);
	$sql="SELECT * FROM login WHERE usuario='$usuario' AND senha='$senha'";
	$result=$conn->query($sql);
	$dados=$result->fetch_array();
	if(count($dados)<=0){
		header("Location: index.php");
	}else{
		if($usuario=='admin' && $senha=='admin12345'){
			$_SESSION['admin']=$usuario;
			header("Location: index.php");
		}else{
			return user;
		}
	}

  ?>
