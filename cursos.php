<?php
	session_start();
?>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='css/uikit.css'>
	<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
	<link rel='stylesheet href='css/princessSophia.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

	<div class='uk-position-relative'>
			<div uk-sticky='sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar'>
		        <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
		            <div class='uk-navbar-center'>
		                <ul class='uk-navbar-nav'>
		                    <li><a href='index.php'>Home</a></li>
		                    <li class='uk-active'>
		                    	<a href='#'>Cursos</a>
		                    </li>
		                    <li><a href='#'><img id='logu' src='imgs/logo.png'/></a></li>
		                    <li>
		                    	<a href='alunos.php'>Alunos</a>
		                    </li>
		                    
		                    <?php
			                    if(!isset($_SESSION['admin'])){
			                       echo "<li><a href='#' id='requisitarLogin'>Login</a></li>";
			                    }else{
			                       echo "<li><a href='sair.php'>Sair</a></li>";
			                    }
		                    ?>
		                    
		                </ul>
		            </div>
		        </nav>
		      </div>
		</div>

		<div class='cursos1'><br><br><br>
			<center>

				<h1 color='black'>Nossos Cursos</h1><br>
				<table class='uk-table uk-table-middle uk-table-divider' border='2' width='80%'>

					<tr>
						<th class='uk-width-small'><center>Id do Curso</center></th>	
						<th class='uk-width-small'><center>Nome do Curso</center></th>
						<th class='uk-width-small'><center>Status</center></th>
						<th class='uk-width-small'><center>Data de Inserção</center></th>
						<?php
							if(isset($_SESSION['admin'])){
								echo"<th class='uk-width-small'><center>Editar Curso</center></th>
									<th class='uk-width-small'><center>Apagar Curso</center></th>";
								}
							?>
					</tr>
				
				<?php
					require_once("conec.php");
					$sql="SELECT * FROM  Curso";
					$result=$conn->query($sql) or die ($sql->error);
				?>
				<?php while($dado=$result->fetch_array()){ ?> 	
				 	<tr>
				 		<td><?php echo "{$dado['id']}";?></td>
				 		<td><?php echo "{$dado['nome_curso']}";?></td>
				 		<td><?php echo "{$dado['status_curso']}";?></td>
				 	
				<?php
				 	$data=date("d/m/Y" , strtotime($dado['data']));
				 	echo"<td>{$data}</td>";
				 	?>

				 <?php if(isset($_SESSION['admin'])){ ?>
							
					 		<td><?php echo"<a href='editarC.php?id={$dado['id']}'><button class='uk-button uk-button-default'>Editar</button></a>";?></td>
					 		<td>
								<center><a class='uk-button uk-button-default' href='#modal-sections' uk-toggle>Deletar</a></center>
									<div id='modal-sections' uk-modal>
									    <div class='uk-modal-dialog'>
									        <button class='uk-modal-close-default' type='button' uk-close></button>
									        <div class='uk-modal-header'>
									            <h2 class='uk-modal-title'>Você tem certeza de Deletar este Curso?</h2>
									        </div>
									        <div class='uk-modal-footer uk-text-right'>
									            <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancelar</button>
									            <?php echo"<a href='apagarC.php?id={$dado['id']}'><button class='uk-button uk-button-default'>Apagar</button></a>";?>
									        </div>
									    </div>
									</div>
							</td>

						<?php } ?>
											 		
				 	</tr>
				 	
				<?php } ?>

				</table><br><br>
				<?php
				if(isset($_SESSION['admin'])){
					echo "<a id='adicionarC'><button class='uk-button uk-button-default'>Adicionar Cursos</button></a><br><br><br>";
					}
				?>
				
			</center>
		</div>



	

<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
