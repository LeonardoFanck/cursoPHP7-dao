<?php 	

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//Carrega uma lista de usuários

//$lista = Usuario::getList();
//echo json_encode($lista);
 
//Carrega uma lista de usuários buscando pelo login

//$search = Usuario::search("j");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("jorge", "gatoPreto");
//echo $usuario;

//Criando um novo usuário

//$aluno = new Usuario("bahh", "kkk");
//$aluno->insert();
//echo $aluno;
 

 //Alterar um usuário
 //$usuario = new Usuario();
 //$usuario->loadById(8);
 //$usuario->update("corno", "lskdfjlsdfj");
 //echo $usuario;

//Deletando um usuário

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->delete();

echo $usuario;
 ?>