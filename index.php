<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("select * from tb_usuarios");

//echo json_encode($usuarios);


//Carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("da");
//echo json_encode($search);

//Carrega usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("teste", "852963");
//echo $usuario;

//inserir usuario no banco de dados
//$aluno = new Usuario("aluno2", "qwe123!@#");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "65409");

?>