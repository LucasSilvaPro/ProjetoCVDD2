<?php
	echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	echo "<link rel='stylesheet' type='text/css' href='css/uikit.css'>";
	echo "<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>";
	echo "<link rel='stylesheet href='css/princessSophia.css'/>";
	echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
	require_once("conec.php");
	$sql="SELECT id,nome_curso FROM Curso WHERE status_curso='1'";
	$result=$conn->query($sql) or die ($sql->error);

	echo "<center>
		<form action='#' method='post' id='atualizar'>
			<fieldset>
				<legend><h1>Matricular Aluno</h1></legend>
				<div class='uk-margin'>
					<h4>Cursos Disponiveis:</h4>
	       			<div class='uk-inline'>
	            		";
	            		while ($dado=$result->fetch_array()) {
	            			echo "<input type='radio' class='uk-radio' name='curso' value='{$dado['id']}' placeholder='nome do Curso' required/>{$dado['nome_curso']}<br>";	
						}
						echo "
	        		</div>
	    		</div>
	    		
	    		<button class='uk-button uk-button-default demo' id='notificação' type='submit'>Matricular Aluno</button><br><br>
    		</fieldset>
	</form><br>
		<a href='alunos.php'><button class='uk-button uk-button-default'>Voltar para Alunos</button></a>
	</center>
	";

	if(isset($_POST['curso'])){
		$id=$_GET['id'];
		$curso=$_POST['curso'];
		$sql="UPDATE Aluno SET curso_id='$curso' WHERE id='$id'";
		$result=$conn->query($sql);
		if($result){
			echo "<script>
				window.onload=function() {
					swal('Aluno Matriculado', '' , 'success');
					};
				</script>";
		}else{
			echo "<script>
				window.onload=function() {
					swal('Aluno não Matriculado', '' , 'error');
					};
				</script>";
		}
	}
echo "<script src='js/jquery.js'></script>";
echo "<script src='js/ajax.js'></script>";
echo "<script src='js/alert.js'></script>";
echo "<script src='js/uikit.js'></script>";
echo "<script src='js/uikit-icons.js'></script>";
echo "<script src='js/javinha.js'></script>";

  ?>
