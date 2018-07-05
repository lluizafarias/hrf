<?php
include 'cabecalho.php';
?>
<br>
<br>
	<br>
	<br>
	<br>
	<br>
	<center><h2>Login</h2></center>
    <div class="formulario_login">
        <form class="ui form" method="post" action="testaUsu.php">
            <div class="field">
                <label class="negrito">E-mail ou apelido</label>
                <input type="text" name="email" placeholder="E-mail ou apelido">
            </div>
            <div class="field">
                <label class="negrito">Senha</label>
                <input type="password" name="senha" placeholder="Senha">
            </div>
        <h4 class="recupercao_senha">Esqueci minha senha</h4>
          
            <button type="submit" class="ui google plus button para_lado">
                Entrar
                <i class="caret square right icon"></i>
            </button>
        </form>
        
    </div>
	<br>


<?php

   
//*