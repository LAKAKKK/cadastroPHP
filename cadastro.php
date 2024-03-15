<?php

// conexao mysql

$host='127.0.0.1';
$bd='cadastro';
$userdb='root';
$senhadb='senac';


// receber do form

$nome=$_POST["nome"];
$email=$_POST["email"];
$sexo=$_POST["sexo"];
$ddd=$_POST["ddd"];
$tel=$_POST["telefone"];
$endereco=$_POST["endereco"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$bairro=$_POST["bairro"];
$pais=$_POST["pais"];
$login=$_POST["login"];
$senha=$_POST["senha"];
$news=$_POST["news"];

// conectar com bd

$conexao=mysql_connect($host,$bd,$userdb,$senhadb);

if (!$conexao)
die("Ero de conexão->".mysql_erro());
$banco=mysql_select_db($bd,$conexao);
if(!$banco)
die("Erro de conexão ao banco->".mysql_error())




?>