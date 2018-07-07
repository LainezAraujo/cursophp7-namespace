<?php 

require_once("config.php");

use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Lainez Araujo");
$cad->setEmail("lainezlsarujo@gmail.com");
$cad->setSenha("123456");

$cad-> registrarVenda();


 ?>