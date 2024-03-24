<?php
session_start();

if (!isset($_SESSION['idFuncionario'])) {
    header("location:https://adegairmandade.smpsistema.com.br/admin/loginAdmin.php");
    exit;
}

$id = $_SESSION['idFuncionario'];

$pagina = @$_GET['p'];

require_once('class/funcionario.php');

$funcionarios = new FuncionarioClass($id);
$usuario = $funcionarios;