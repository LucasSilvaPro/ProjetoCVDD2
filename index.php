
<?php 
	session_start(); 
?>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' type='text/css' href='css/uikit.css'>
<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
<link rel='stylesheet href='css/princessSophia.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'>
	
			<div class='uk-position-relative'>
			<div class='uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light' data-src='imgs/SOBRE.jpg' uk-img><br>
  				<h1>Casa de Vovó DeDé</h1>
			</div>
		    <div class='uk-position-top'>
		    	<div uk-sticky='sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar'>
		        <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
		            <div class='uk-navbar-center'>
		                <ul class='uk-navbar-nav'>
		                    <li><a href='#'>Home</a></li>
		                    <li>
		                    	<a href='cursos.php'>Cursos</a>
		                    	
		                    </li>
		                    <li><a href='#'><img id='logu' src='imgs/logo.png'/></a></li>
		                    <li>
		                    	<a href='alunos.php'>Alunos</a>
		                    </li>
		                <?php
		                    if (!isset($_SESSION['admin'])) {
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
		</div>
	</div>

	<div id='segunda'><br><br>
		<center><h1 style='color: white'>Quem Somos?</h1><br>

        	<p class='texto' uk-parallax='opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.25;'>A Casa de Vovó Dedé é uma instituição sem fins lucrativos fundada em 1993 na Barra do Ceará, em Fortaleza/CE. Nossa missão é promover o desenvolvimento humano, pessoal e profissional, por meio da arte, cultura e educação de crianças e jovens de seis a vinte e nove anos em situação de vulnerabilidade social. Levamos música, tecnologia e cultura para a nossa comunidade, através de atividades e projetos totalmente gratuitos. O amor é o principal pilar da nossa formação e rege todas as nossas ações. Acreditamos, assim, na formação e na mudança de realidade das pessoas através da arte e da educação.<br><br> 

				Além de promover a disseminação da arte, cultura e tecnologia por meio de projetos, oficinas e cursos, a Casa também colabora para o crescimento de seus alunos e professores com eventos de alta qualidade elaborados por toda a equipe da Casa. Acreditamos que o conhecimento atrelado a experiências reais em qualquer área de expertise são essenciais para a formação de um bom profissional.<br><br>

				A Casa de Vovó Dedé como agente de formação artística e cultural promove formações de grupos musicais e apresentações buscando sempre a participação dos alunos, professores e convidados, o que contribui para o aperfeiçoamento musical de todos. Sabemos que a formação de grupos musicais também funciona como uma ferramenta social de interação, pois esse trabalho coletivo estimula a convivência e ajuda ao próximo.<br><br> 

				A Casa através de diversos cursos com o objetivo de proporcionar aos jovens importantes ferramentas de formação profissional, tais como: fotografia, audiovisual, animação, design gráfico, entre outros, se propõe a ser um importante canal de fomento e divulgação da cultura da nossa comunidade através da produtora de audiovisual, da TVDD, da Rádio RVDD, do Estúdio Casa Animada, da Fábrica de Software, entre outros.</p>
        	
        </center>
      </div>

      <div class='terceira'><br><br>
      	<center><h1>A História de um Sonho...</h1><br>
      		<video playsinline controls width='50%' height='50%' >
    			<source src='imgs/video.mp4' type='video/mp4'>
			</video><br>
			<h4>Este filme foi produzido pelos alunos da primeira turma<br> 
				do curso de audiovisual da Casa formada em 2015</h4><br>

			<h1> Ações</h1><br>
	
			<div class='uk-width-auto@m uk-text-center icones' uk-grid>
    			<div>
        			<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: rss; ratio: 4'></span><h3>Rádio Vovó Dedé</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: video-camera; ratio: 4'></span><h3>Tv Vovó Dedé</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: microphone; ratio: 4'></span><h3>Concursos de Talentos</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: user; ratio: 4'></span><h3>Fundador</h3></div>
    			</div>
			</div>

			<div class='uk-width-auto@m uk-text-center icones' uk-grid>
    			<div>
        			<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: folder; ratio: 4'></span><h3>Projetos</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: comment; ratio: 4'></span><h3>Cursos</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon: users; ratio: 4'></span><h3>Colaboradores</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon:  cart; ratio: 4'></span><h3>Doações</h3></div>
    			</div>
    		<div>
        		<div class='uk-card uk-card-default uk-card-body'><span uk-icon='icon:  receiver; ratio: 4'></span><h3>Contatos</h3></div>
    			</div>
			</div>
      	</center>
      </div><br><br>
      <div class='quarta'><br><br>
      <center>
      	<h1 style='color:#FFFFFF;'>Transparência</h1><br>
			<p>
				A Casa de Vovó Dedé é reconhecida como entidade de utilidade pública Municipal (Lei nº 8.031 de 1997), Estadual (Lei nº 12.735 de 1997) e Federal (Por decreto publicado no diário oficial de união de 1998). Temos como valores o compromisso com a comunidade, a ética e a igualdade de gênero, racial e social. Divulgamos anualmente a prestação de contas de todas as nossas atividades.
			</p>
	</center>

      	</div><br><br><center><h1>Localização</center></h1><br>
    	
     <div class='mapa'>

     </div>

<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
