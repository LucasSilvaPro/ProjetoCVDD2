	<form action='adicionarAluno.php' method='post' enctype='multipart/form-data'>
			<label class='uk-button uk-button-default' for='file'>Imagem de Perfil</label>
			<input type='file' id='file' style='display:none;' onchange='readUrl(this);' name='arquivo' accept='image/*' required/>
			<div class='uk-margin'>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: user'></span>
            		<input class='uk-input' name='alunoN' placeholder='Nome Aluno' type='text' required/>
        		</div>
    		</div>
    		<div class='uk-margin'>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: mail'></span>
            		<input class='uk-input' name='emailA' placeholder='Email do Aluno' type='text' required/>
        		</div>
    		</div>
    		
    		<input class='uk-button uk-button-default' type='submit' value='Inserir Aluno'/>
	</form>
<?php
	if(isset($_POST['alunoN'])){
		require_once("conec.php");
		$imagem=$_FILES['arquivo'];
		$a = file_get_contents($imagem['tmp_name'],$imagem['size']);
		$foto = base64_encode($a);
		$nome=$_POST['alunoN'];
		$email=$_POST['emailA'];
		$sql="INSERT INTO Aluno(nome_aluno,email_aluno,imagem) VALUES ('$nome','$email','$foto')";
		if($conn->query($sql)){
			header("Location: alunos.php");
		}else{
			echo "Aluno não Inserido";
		}
	}

  ?>
