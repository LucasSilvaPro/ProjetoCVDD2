<?php
	require_once("conec.php");
	?>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='css/uikit.css'>
	<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
	<link rel='stylesheet href='css/princessSophia.css'/>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
<?php
	$id=$_GET['id'];
	$sql="SELECT * FROM Aluno WHERE id='$id'";
	$result=$conn->query($sql) or die ($sql->error);
	$dado=$result->fetch_array();
?>
	<center>
		<form action='#' method='post' id='atualizar' enctype='multipart/form-data'>
			<fieldset>
				<legend><h1>Atualizar Aluno</h1></legend>
				<?php echo"<img id='imagem' src='data:image;base64,{$dado['imagem']}' class='ui circular small image'/><br><br>";?>
					<label for='file' class='uk-button uk-button-default' onclick='document.getElementById('file').click(); return false;>Trocar Imagem de perfil</label>
					<input type='file' id='file' style='display:none;' onchange='readUrl(this);' name='arquivo' accept='image/*' required/>
				<div class='uk-margin'>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon' uk-icon='icon: user'></span>
						<?php echo"<input class='uk-input' type='text' name='nomeNovo' value='{$dado['nome_aluno']}' placeholder='nome do Aluno' required/>";
						?>
	        		</div>
	    		</div>
	    		<div class='uk-margin'>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon' uk-icon='icon: mail'></span>
						<?php
						echo"<input class='uk-input' type='text' name='emailNovo' value='{$dado['email_aluno']}' placeholder='status do Curso' required/>";
						?>
	        		</div>
	    		</div>
	    		<button class='uk-button uk-button-default demo' id='notificação' type='submit'>Atualizar</button>
    		</fieldset>
	</form><br>

	<a href='alunos.php'><button class='uk-button uk-button-default'>Voltar para Alunos</button></a><br><br>
				
	</center>
	
	<?php

	if(isset($_POST['nomeNovo'])){
		$nomeN=addslashes($_POST['nomeNovo']);
		$emailN=addslashes($_POST['emailNovo']);
		$imagem=$_FILES['arquivo'];
		$a = file_get_contents($imagem['tmp_name'],$imagem['size']);
		$foto = base64_encode($a);
		$sql="UPDATE Aluno SET nome_aluno='$nomeN',email_aluno='$emailN',imagem='$foto' WHERE id='$id'";
		$result=$conn->query($sql) or die ($sql->error);
		if ($result) {
			echo "<script>
				window.onload=function() {
					swal('Aluno Atualizado com Sucesso', '' , 'success');
					};
				</script>";
		}else{
			echo "<script>
				window.onload=function() {
					swal('Aluno Não Atualizado', '' , 'error');
					};
				</script>
				";
		}
	}
	?>
<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
<script>
		function readUrl(input){
			if(input.files && input.files[0]){
				var reader= new FileReader();
				reader.onload=function(e){
					$('#imagem')
					.attr('src', e.target.result)
					.width(250)
					.heigth(200);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
</script>
