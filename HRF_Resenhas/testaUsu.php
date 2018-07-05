<?php
session_start();
include('functions.php');

echo("<br>");

    $login = $_POST['email'];
	$buscaUsu=buscaUsuario($login);
    $senha = $_POST['senha'];
    echo"<center>";
    if($buscaUsu['senha']==$senha){
    	print("<h1> Ola ".$buscaUsu['nome_usu']."</h1>");

    	echo'<meta http-equiv="refresh" content="1;url=index.php">';

    	$_POST['usuario']=$buscaUsu['nome_usu'];

    }else{  
    	echo"<h1>Informações incorretas</h1>";
    	echo'<meta http-equiv="refresh" content="2;url=login.php">';
    }
echo"</center>";
  

  /*  
    if ($login=='admin' and $senha=='admin') {

        $_SESSION['name'] = "Administrador";
        $_SESSION['login'] = 'admin';
        $_SESSION['permissao'] = 'Admin';
        $_SESSION['foto'] = "imagens/pessoa.png";

        echo('<meta http-equiv="refresh" content="0;url=index.php">');
    }
    */