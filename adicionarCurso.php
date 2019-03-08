<?php
	
	require_once("conec.php");
	echo "<form action='adicionarCurso.php' method='post'>
			<legend><h1>Adicionar Curso</h1></legend><br>
			<div class='uk-margin'>
				<label>Nome do Curso:</label>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: user'></span>
            		<input class='uk-input' name='cursoN' placeholder='Nome do Curso' type='text' required/>
        		</div>
    		</div><br>
    		<label>Status:</label>
    		<input type='radio' class='uk-radio' name='status' value='1'/>Disponivel
    		<input type='radio' class='uk-radio' name='status' value='0'/>Indisponivel
    		<br><br><br>
    		<input class='uk-button uk-button-default' type='submit' value='Adicionar Curso'/>
	</form>";

	if(isset($_POST['cursoN'])){
		$nomeC=addslashes($_POST['cursoN']);
		$status=addslashes($_POST['status']);
		$sql="INSERT INTO Curso(nome_curso,status_curso) VALUES('$nomeC','$status')";
		if($conn->query($sql)){
			header("Location: cursos.php");
		}else{
			echo "Não Adicionado";
		}

	}




  ?>
