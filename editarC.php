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
	$sql="SELECT * FROM Curso WHERE id='$id'";
	$result=$conn->query($sql) or die ($sql->error);
	$dado=$result->fetch_array();
?>	
	<center>
		<form action='#' method='post' id='atualizar'>
			<fieldset>
				<legend><h1>Atualizar Curso</h1></legend>
				<div class='uk-margin'>
					<h4>Nome Novo do Curso:</h4>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon' uk-icon='icon: user'></span>
						<?php echo "<input class='uk-input' type='text' name='nomeNovo' value='{$dado['nome_curso']}' placeholder='nome do Curso' required/>";?>
	        		</div>
	    		</div>
	    		<div class='uk-margin'>
	    			<h4>Status Novo:</h4>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon'></span>
						<input class='uk-radio' type='radio' name='statusNovo' value='1' placeholder='status do Curso' required/>Disponível
						<input class='uk-radio' type='radio' name='statusNovo' value='0' placeholder='status do Curso' required/>Indisponivel
						
	        		</div>
	    		</div><br>
	    		<button class='uk-button uk-button-default demo' id='notificação' type='submit'>Atualizar Curso</button><br><br>
    		</fieldset>
	</form><br>
		<a href='cursos.php'><button class='uk-button uk-button-default'>Voltar para Cursos</button></a>
	</center>
	
<?php
	if(isset($_POST['nomeNovo'])){
		$nome=$_POST['nomeNovo'];
		$status=$_POST['statusNovo'];		
		$sql="UPDATE Curso SET nome_curso='$nome',status_curso='$status' WHERE id='$id'";
		$result=$conn->query($sql) or die ($sql->error);
		if($result){
			echo "<script>
				window.onload=function() {
					swal('Curso Atualizado', '' , 'success');
					};
				</script>";
		}else{
			echo "<script>
				window.onload=function() {
					swal('Curso Não Atualizado', '' , 'error');
					};
				</script>";
		}
	}	
	?>
<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
