<?php

	echo "<form action='backLogin.php' method='post'>
			<h2>Login Adm</h2>
			<div class='uk-margin'>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: user'></span>
            		<input class='uk-input' name='usuario' placeholder='Campo de Usuario' type='text' required/>
        		</div>
    		</div>
    		<div class='uk-margin'>
        		<div class='uk-inline'>
            		<span class='uk-form-icon uk-form-icon-flip' uk-icon='icon: lock'></span>
            		<input class='uk-input' name='senha' placeholder='Campo da Senha' type='password' required/>
        		</div>
    		</div>
    		<input class='uk-button uk-button-default' type='submit' value='Entrar'/>
	</form>";

  ?>