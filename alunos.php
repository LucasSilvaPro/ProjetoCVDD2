<?php
	session_start();
	require_once("conec.php");
?>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='css/uikit.css'>
	<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
	<link rel='stylesheet href='css/princessSophia.css'/>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

	<script src='js/jquery.js'></script>

	<div class='uk-position-relative'>
			<div uk-sticky='sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar'>
		        <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
		            <div class='uk-navbar-center'>
		                <ul class='uk-navbar-nav'>
		                    <li><a href='index.php'>Home</a></li>
		                    <li class='uk-active'>
		                    	<a href='cursos.php'>Cursos</a>
		                    </li>
		                    <li><a href='#'><img id='logu' src='imgs/logo.png'/></a></li>
		                    <li>
		                    	<a href='#'>Alunos</a>
		                    </li>
		                   <?php
		                  	if(!isset($_SESSION['admin'])){
		                       echo"<li><a href='#' id='requisitarLogin'>Login</a></li>";
		                    }else{
		                       echo"<li><a href='sair.php'>Sair</a></li>";
		                    }
		                   ?>
		                   
		                </ul>
		            </div>
		        </nav>
		      </div>
		    </div>
		</div>

		<div class='alunos1'><br><br>
			
			<center>
				<h1 color='black'>Alunos</h1><br><br>
				<form action='alunos.php' method='post'>
					<div class='uk-margin'>
				        <div class='uk-inline'>
				            <a class='uk-form-icon' href='#' uk-icon='icon: pencil'></a>
				            <input class='uk-input' name='busca' placeholder='buscar Aluno' type='text'>
				        </div>
	    			</div>
				</form>
				<br>
				<table class='uk-table uk-table-middle uk-table-divider' border='2' width='80%'>

					<tr>
						<th class='uk-width-small'><center>Imagem de Perfil</center></th>
						<th class='uk-width-small'><center>Nome do Aluno</center></th>
						<th class='uk-width-small'><center>Curso</center></th>
						<th class='uk-width-small'><center>Email</center></th>
						<th class='uk-width-small'><center>Data de Inserção</center></th>
						<?php
							if(isset($_SESSION['admin'])){
								echo "<th class='uk-width-small'><center>Atualizar</center></th>";
								echo "<th class='uk-width-small'><center>Deletar Aluno</center></th>";
							}
						?>
						
					</tr>
				<?php
					if(isset($_POST['busca'])){
					$busca=addslashes($_POST['busca']);
					$sql="SELECT * FROM Aluno WHERE nome_aluno like '%$busca%'";
					$result=$conn->query($sql) or die($sql->error);
					while($dados=$result->fetch_array()){
					echo"	
								<center>
								<tr>
									<td><img style='height:100px'; src='data:image;base64,{$dados['imagem']}'></td>
									";
								?>
							 		<td><?php echo"{$dados['nome_aluno']}";?></td>
					
							 		<?php
							 		if(!isset($dados['curso_id'])){
							 			if(isset($_SESSION['admin'])){
							 				echo"<td><a href='matricularA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Matricular</button></a></td>";
							 			}else{
							 				echo"<td>Não está Matriculado</td>";
							 			}
					 				}
					 				?>
					 				<?php
					 				if(isset($dados['curso_id'])){
					 					echo "<td>{$dados['curso_id']}</td>";
					 				}
							 		?>
							 		<td><?php echo"{$dados['email_aluno']}"; ?></td>
							 		<?php
							 		 	$data=date('d/m/Y', strtotime($dados['data']));
							 		 ?>
							 		
							 		<td><?php echo"{$data}";?></td>
							 		<?php
							 		if(isset($_SESSION['admin'])){
										?>							 		
								 		<td>
								 			<a id='atualizarA' href='editarA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Atualizar</button></a>
								 		</td>
								 		<td>
											<a class='uk-button uk-button-default' href='#modal-sections' uk-toggle>Deletar Aluno</a>
											<div id='modal-sections' uk-modal>
											    <div class='uk-modal-dialog'>
											        <button class='uk-modal-close-default' type='button' uk-close></button>
											        <div class='uk-modal-header'>
											            <h2 class='uk-modal-title'>Você tem certeza de Deletar Aluno?</h2>
											        </div>
											        <div class='uk-modal-footer uk-text-right'>
											            <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancelar</button>
											           <?php 
											            echo"<a href='apagarA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Apagar</button></a>";
											           ?>
											        </div>
											    </div>
											</div>
										</td>
								<?php	} ?>
									
							 	</tr>
							</center>
							
					<?php	} ?>

				<?php }

				if(!isset($_POST['busca'])){
					$sql="SELECT * FROM  Aluno";
					$result=$conn->query($sql) or die ($sql->error);
					while($dados=$result->fetch_array()){
					 	
					 	echo"<tr>
					 		<td><img style='max-height:100px'; src='data:image;base64,{$dados['imagem']}'></td>
					 		";
					 		?>
					 		<td><?php echo"{$dados['nome_aluno']}"; ?></td>
					 	
					 		<?php
					 		if(!isset($dados['curso_id'])){
					 			if(isset($_SESSION['admin'])){
					 				echo"<td><a href='matricularA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Matricular</button></a></td>";
					 			}else{
					 				echo"<td>Não está Matriculado</td>";
					 			}
					 		}
					 		?>
					 		<?php
					 		if(isset($dados['curso_id'])){
					 			echo"<td>{$dados['curso_id']}</td>";
					 		}
					 		$data=date('d/m/Y', strtotime($dados['data']));
					 		?>
					 		<td><?php echo"{$dados['email_aluno']}";?></td>
					 		<td><?php echo"{$data}";?></td>
					 		<?php
					 		if(isset($_SESSION['admin'])){
					 			echo"
					 				<td><a href='editarA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Atualizar</button></a></td>";
					 			?>
							<td>
								<a class='uk-button uk-button-default' href='#modal-sections' uk-toggle>Deletar Aluno</a>
								<div id='modal-sections' uk-modal>
								    <div class='uk-modal-dialog'>
								        <button class='uk-modal-close-default' type='button' uk-close></button>
								        <div class='uk-modal-header'>
								            <h2 class='uk-modal-title'>Você tem certeza de Deletar Aluno?</h2>
								        </div>
								        <div class='uk-modal-footer uk-text-right'>
								            <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancelar</button>
								            <?php echo"<a href='apagarA.php?id={$dados['id']}'><button class='uk-button uk-button-default'>Apagar</button></a>";
								            ?>
								        </div>
								    </div>
								</div>
							</td>
						<?php	} ?>
					 	
					 	</tr>
					 	
					<?php }?>
				<?php }?>
			
				
				</table><br><br>
				<?php
				if(isset($_SESSION['admin'])){
					echo"<a id='inserirAlunos'><button class='uk-button uk-button-default'>Inserir Alunos</button></a><br><br>";
				}
				?>
				
			</center>
		</div>



<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>

